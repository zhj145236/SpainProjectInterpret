<?php

namespace app\admin\controller;
use think\facade\View;
use think\facade\Lang;

/**
 * ============================================================================
 * 爱购商城
 * ============================================================================
 * 版权所有 2020 爱购商城，并保留所有权利。
 * 网站地址: http://xbyshopp.stablenewpay.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * 控制器
 */
class Complain extends AdminControl
{
    //定义投诉状态常量
    const STATE_NEW = 10;
    const STATE_APPEAL = 20;
    const STATE_TALK = 30;
    const STATE_HANDLE = 40;
    const STATE_FINISH = 99;
    const STATE_ACTIVE = 2;
    const STATE_UNACTIVE = 1;

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'admin/lang/'.config('lang.default_lang').'/complain.lang.php');
    }


    /*
     * 未处理的投诉列表
     */
    public function complain_new_list()
    {
        $this->get_complain_list(self::STATE_NEW, 'complain_new_list');
        return View::fetch('complain_list');
    }

    /*
     * 待申诉的投诉列表
     */
    public function complain_appeal_list()
    {
        $this->get_complain_list(self::STATE_APPEAL, 'complain_appeal_list');
        return View::fetch('complain_list');
    }

    /*
     * 对话的投诉列表
     */
    public function complain_talk_list()
    {
        $this->get_complain_list(self::STATE_TALK, 'complain_talk_list');
        return View::fetch('complain_list');
    }

    /*
     * 待仲裁的投诉列表
     */
    public function complain_handle_list()
    {
        $this->get_complain_list(self::STATE_HANDLE, 'complain_handle_list');
        return View::fetch('complain_list');
    }

    /*
     * 已关闭的投诉列表
     */
    public function complain_finish_list()
    {
        $this->get_complain_list(self::STATE_FINISH, 'complain_finish_list');
        return View::fetch('complain_list');
    }

    /*
     * 获取投诉列表
     */
    private function get_complain_list($complain_state, $action)
    {
        $complain_model = model('complain');
        //搜索条件
        $condition = array();
        $condition[]=array('accuser_name','like', "%" . input('param.input_complain_accuser') . "%");
        $condition[]=array('accused_name','like', "%" . input('param.input_complain_accused') . "%");
        $condition[]=array('complain_subject_content','like', "%" . input('param.input_complain_subject_content') . "%");
        if(input('param.input_complain_datetime_end')) {
            $stime = strtotime(input('param.input_complain_datetime_start'));
            $condition[]=array('complain_datetime','>=', $stime);
        }
        if(input('param.input_complain_datetime_end')){
            $etime = strtotime(input('param.input_complain_datetime_end'))+86399;
            $condition[]=array('complain_datetime','<=', $etime);
        }
        if ($action === 'complain_finish_list') {
            $order= 'complain_id desc';
        } else {
            $order = 'complain_id asc';
        }
        $condition[]=array('complain_state','=',$complain_state);
        $complain_list = $complain_model->getComplainList($condition, 10 ,$order);
        $this->setAdminCurItem($action);
        View::assign('complain_list', $complain_list);
        View::assign('show_page', $complain_model->page_info->render());
    }

    /*
     * 进行中的投诉
     */
    public function complain_progress()
    {
        $complain_id = intval(input('param.complain_id'));
        //获取投诉详细信息
        $complain_info = $this->get_complain_info($complain_id);
        //获取订单详细信息
        $order_info = $this->get_order_info($complain_info['order_id']);
        //获取投诉的商品列表
        $complain_goods_list = $this->get_complain_goods_list($complain_info['order_goods_id']);
        View::assign('complain_goods_list', $complain_goods_list);
        if (intval($complain_info['complain_subject_id']) == 1) {//退款信息
            $refundreturn_model = model('refundreturn');
            $this->getRefundStateArray();//向模板页面输出退款退货状态
            $list = $refundreturn_model->getComplainRefundList($order_info, $complain_info['order_goods_id']);
            View::assign('refund_list', $list['refund']);//已退或处理中商品
            View::assign('refund_goods', $list['goods']);//可退商品
        }
        $this->setAdminCurItem('complain_progress');
        View::assign('order_info', $order_info);
        View::assign('complain_info', $complain_info);
        return View::fetch('complain_info');
    }

    function getRefundStateArray($type = 'all') {
        $state_array = array(
            '1' => lang('refund_state_confirm'),
            '2' => lang('refund_state_yes'),
            '3' => lang('refund_state_no')
        ); //卖家处理状态:1为待审核,2为同意,3为不同意
        View::assign('state_array', $state_array);

        $admin_array = array(
            '1' => lang('ds_processing'),
            '2' => lang('ds_processed'),
            '3' => lang('order_state_success')
        ); //确认状态:1为买家或卖家处理中,2为待平台管理员处理,3为退款退货已完成
        View::assign('admin_array', $admin_array);

        $state_data = array(
            'seller' => $state_array,
            'admin' => $admin_array
        );
        if ($type == 'all') {
            return $state_data; //返回所有
        }
        return $state_data[$type];
    }
    /*
     * 审核提交的投诉
     */
    public function complain_verify()
    {
        $complain_id = intval(input('post.complain_id'));
        $complain_info = $this->get_complain_info($complain_id);
        if (intval($complain_info['complain_state']) === self::STATE_NEW) {
            $complain_model = model('complain');
            $update_array = array();
            $update_array['complain_state'] = self::STATE_APPEAL;
            $update_array['complain_handle_datetime'] = TIMESTAMP;
            $update_array['complain_handle_member_id'] = $this->get_admin_id();
            $update_array['complain_active'] = self::STATE_ACTIVE;
            $condition = array();
            $condition[] = array('complain_id','=',$complain_id);
            if ($complain_model->editComplain($update_array, $condition)) {
                $this->log(lang('complain_verify_success') . '[' . $complain_id . ']', 1);

                // 发送商家消息
                $param = array();
                $param['code'] = 'complain';
                $param['store_id'] = $complain_info['accused_id'];
                $param['ali_param'] = array(
                    'complain_id' => $complain_id
                );
                $param['param'] = $param['ali_param'];
                //微信模板消息
                $param['weixin_param'] = array(
                    'url' => config('ds_config.h5_site_url').'/seller/complaint_form?complain_id='.$complain_id,
                    'data'=>array(
                        "keyword1" => array(
                            "value" => $complain_info['accuser_name'],
                            "color" => "#333"
                        ),
                        "keyword2" => array(
                            "value" => $complain_info['complain_subject_content'],
                            "color" => "#333"
                        )
                    ),
                );
                \mall\queue\QueueClient::push('sendStoremsg', $param);

                $this->success(lang('complain_verify_success'), (string)url('Complain/complain_new_list'));
            } else {
                $this->error(lang('complain_verify_fail'), (string)url('Complain/complain_new_list'));
            }
        } else {
            $this->error(lang('param_error'), '');
        }
    }

    /*
     * 关闭投诉
     */
    public function complain_close()
    {
        //获取输入的数据
        $complain_id = intval(input('post.complain_id'));
        $final_handle_message = trim(input('post.final_handle_message'));
        $data=[
            'final_handle_message'=>$final_handle_message
        ];
        $complain_validate = ds_validate('complain');
        if (!$complain_validate->scene('complain_close')->check($data)) {
            $this->error($complain_validate->getError());
        }

        $complain_info = $this->get_complain_info($complain_id);
        $current_state = intval($complain_info['complain_state']);
        if ($current_state !== self::STATE_FINISH) {
            $complain_model = model('complain');
            $update_array = array();
            $update_array['complain_state'] = self::STATE_FINISH;
            $update_array['final_handle_message'] = $final_handle_message;
            $update_array['final_handle_datetime'] = TIMESTAMP;
            $update_array['final_handle_member_id'] = $this->get_admin_id();
            $condition = array();
            $condition[] = array('complain_id','=',$complain_id);
            if ($complain_model->editComplain($update_array, $condition)) {
                if (intval($complain_info['complain_subject_id']) == 1) {//退款信息
                    $order = $this->get_order_info($complain_info['order_id']);
                    $refundreturn_model = model('refundreturn');
                    $list = $refundreturn_model->getComplainRefundList($order, $complain_info['order_goods_id']);
                    $refund_goods = $list['goods'];//可退商品
                    if (!empty($refund_goods) && is_array($refund_goods)) {
                        $checked_goods = input('post.checked_goods/a');#获取数组
                        foreach ($refund_goods as $key => $value) {
                            $goods_id = $value['rec_id'];//订单商品表编号
                            if (!empty($checked_goods) && array_key_exists($goods_id, $checked_goods)) {//验证提交的商品属于订单
                                $refund_array = array();
                                $refund_array['refund_type'] = '1';//类型:1为退款,2为退货
                                $refund_array['seller_state'] = '2';//卖家处理状态:1为待审核,2为同意,3为不同意
                                $refund_array['refund_state'] = '2';//状态:1为处理中,2为待管理员处理,3为已完成
                                $refund_array['order_lock'] = '1';//锁定类型:1为不用锁定,2为需要锁定
                                $refund_array['refund_amount'] = ds_price_format($value['goods_refund']);
                                $refund_array['reason_id'] = '0';
                                $refund_array['reason_info'] = lang('complaints_success');
                                $refund_array['buyer_message'] = lang('complaints_success_confirm');
                                $refund_array['seller_message'] = lang('complaints_success_confirm');
                                $refund_array['add_time'] = TIMESTAMP;
                                $refund_array['seller_time'] = TIMESTAMP;
                                $refundreturn_model->addRefundreturn($refund_array, $order, $value);
                            }
                        }
                    }
                }
                $this->log(lang('complain_close_success') . '[' . $complain_id . ']', 1);
                $this->success(lang('complain_close_success'), $this->get_complain_state_link($current_state));
            } else {
                $this->error(lang('complain_close_fail'), $this->get_complain_state_link($current_state));
            }
        } else {
            $this->error(lang('param_error'), '');
        }
    }

    /*
     * 投诉主题列表
     */
    public function complain_subject_list()
    {
        /*
         * 获得举报主题列表
         */
        $complainsubject_model = model('complainsubject');
        //搜索条件
        $condition = array();
        $condition[] = array('complainsubject_state','=',1);
        $complainsubject_list = $complainsubject_model->getComplainsubject($condition, 10);
        $this->setAdminCurItem('complain_subject_list');
        View::assign('complainsubject_list', $complainsubject_list);
        View::assign('show_page', $complainsubject_model->page_info->render());
        return View::fetch('complain_subject_list');
    }

    /*
     * 添加投诉主题页面
     */
    public function complain_subject_add() {
        if (!request()->isPost()) {
            $this->setAdminCurItem('complain_subject_add');
            return View::fetch();
        } else {

            //获取提交的内容
            $input['complainsubject_content'] = trim(input('post.complain_subject_content'));
            $input['complainsubject_desc'] = trim(input('post.complain_subject_desc'));
            //验证提交的内容
            $data = [
                'complain_subject_content' => $input['complainsubject_content'],
                'complain_subject_desc' => $input['complainsubject_desc'],
            ];

            $complain_validate = ds_validate('complain');
            if (!$complain_validate->scene('complain_subject_add')->check($data)) {
                $this->error($complain_validate->getError());
            } else {
                //验证成功保存
                $input['complainsubject_state'] = 1;
                $complainsubject_model = model('complainsubject');
                $complainsubject_model->addComplainsubject($input);
                $this->log(lang('complain_subject_add_success') . '[' . input('complain_subject_content') . ']', 1);
                $this->success(lang('complain_subject_add_success'), 'complain/complain_subject_list');
            }
        }
    }


    /*
     * 删除投诉主题,伪删除只是修改标记
     */
    public function complain_subject_drop()
    {
        $complain_subject_id = input('param.complain_subject_id');
        $complain_subject_id_array = ds_delete_param($complain_subject_id);
        if ($complain_subject_id_array == FALSE) {
            $this->error(lang('param_error'));
        }
        $condition = array();
        $condition[]=array('complainsubject_id','in',$complain_subject_id_array);
        
        $complainsubject_model = model('complainsubject');
        $update_array = array();
        $update_array['complainsubject_state'] = 2;
        
        if ($complainsubject_model->editComplainsubject($update_array, $condition)) {
            $this->log(lang('complain_subject_delete_success') . '[ID:' . input('post.complain_subject_id') . ']', 1);
            ds_json_encode(10000, lang('complain_subject_delete_success'));
        } else {
            ds_json_encode(10001, lang('complain_subject_delete_fail'));
        }
    }

    /*
     * 根据投诉id获取投诉对话列表
     */
    public function get_complain_talk()
    {
        $complain_id = intval(input('param.complain_id'));
        $complain_info = $this->get_complain_info($complain_id);
        $complain_talk_list = $this->get_talk_list($complain_id);
        $talk_list = array();
        $i = 0;
        foreach ($complain_talk_list as $talk) {
            $talk_list[$i]['css'] = $talk['talk_member_type'];
            $talk_list[$i]['talk'] = date("Y-m-d", $talk['talk_datetime']);
            switch ($talk['talk_member_type']) {
                case 'accuser':
                    $talk_list[$i]['talk'] .= lang('complain_accuser');
                    break;
                case 'accused':
                    $talk_list[$i]['talk'] .= lang('complain_accused');
                    break;
                case 'admin':
                    $talk_list[$i]['talk'] .= lang('complain_admin');
                    break;
                default:
                    $talk_list[$i]['talk'] .= lang('complain_unknow');
            }
            if (intval($talk['talk_state']) === 2) {
                $talk['talk_content'] = lang('talk_forbit_message');
                $forbit_link = '';
            } else {
                $forbit_link = "&nbsp;&nbsp;<a href='#' onclick=forbit_talk(" . $talk['talk_id'] . ")>" . lang('complain_text_forbit') . "</a>";
            }
            $talk_list[$i]['talk'] .= '(' . $talk['talk_member_name'] . ')' . lang('complain_text_say') . ':' . $talk['talk_content'] . $forbit_link;
            $i++;
        }

        echo json_encode($talk_list);
    }

    /*
     * 发布投诉对话
     */
    public function publish_complain_talk()
    {
        $complain_id = intval(input('param.complain_id'));
        $complain_talk = trim(input('param.complain_talk'));
        $talk_len = strlen($complain_talk);
        if ($talk_len > 0 && $talk_len < 255) {
            $complain_info = $this->get_complain_info($complain_id);
            $complaintalk_model = model('complaintalk');
            $param = array();
            $param['complain_id'] = $complain_id;
            $param['talk_member_id'] = $this->get_admin_id();
            $param['talk_member_name'] = $this->get_admin_name();
            $param['talk_member_type'] = 'admin';

            $param['talk_content'] = $complain_talk;
            $param['talk_state'] = 1;
            $param['talk_admin'] = 0;
            $param['talk_datetime'] = TIMESTAMP;
            if ($complaintalk_model->addComplaintalk($param)) {
                echo json_encode('success');
            } else {
                echo json_encode('error2');
            }
        } else {
            echo json_encode('error1');
        }
    }

    /*
     * 屏蔽对话
     */
    public function forbit_talk()
    {
        $talk_id = intval(input('post.talk_id'));
        if (!empty($talk_id) && is_integer($talk_id)) {
            $complaintalk_model = model('complaintalk');
            $update_array = array();
            $update_array['talk_state'] = 2;
            $update_array['talk_admin'] = $this->get_admin_id();
            $condition = array();
            $condition[] = array('talk_id','=',$talk_id);
            if ($complaintalk_model->editComplaintalk($update_array, $condition)) {
                echo json_encode('success');
            } else {
                echo json_encode('error2');
            }
        } else {
            echo json_encode('error1');
        }
    }

    /**
     * 投诉设置
     **/
   public function complain_setting() {
        if (!request()->isPost()) {
            //读取设置内容 $list_setting
            $list_setting = rkcache('config', true);
            View::assign('list_setting', $list_setting);
            $this->setAdminCurItem('complain_setting');
            return View::fetch('complain_setting');
        } else {

            $setting_model = model('config');
            $complain_time_limit = intval(input('post.complain_time_limit'));
            if (empty($complain_time_limit)) {
                //如果输入不合法默认30天
                $complain_time_limit = 2592000;
            } else {
                $complain_time_limit = $complain_time_limit * 86400;
            }
            $update_array['complain_time_limit'] = $complain_time_limit;
            if ($setting_model->editConfig($update_array)) {
                $this->log(lang('complain_setting_save_success'), 1);
                $this->success(lang('complain_setting_save_success'));
            } else {
                $this->error(lang('complain_setting_save_fail'));
            }
        }
    }


    /*
     * 获取订单信息
     */
    private function get_order_info($order_id)
    {
        $order_model = model('order');
        $order_info = $order_model->getOrderInfo(array('order_id' => $order_id), array('order_goods'));
        if (empty($order_info)) {
            $this->error(lang('param_error'));
        }
        $order_info['order_state_text'] = get_order_state($order_info);
        return $order_info;
    }

    /*
     * 获取投诉信息
     */
    private function get_complain_info($complain_id)
    {
        $complain_model = model('complain');
        $complain_info = $complain_model->getOneComplain($complain_id);
        if (empty($complain_info)) {
            $this->error(lang('param_error'));
        }
        $complain_info['complain_state_text'] = $this->get_complain_state_text($complain_info['complain_state']);
        return $complain_info;
    }

    /*
     * 获取投诉商品列表
     */
    private function get_complain_goods_list($order_goods_id)
    {
        $order_model = model('order');
        $param = array();
        $param['rec_id'] = $order_goods_id;
        $complain_goods_list = $order_model->getOrdergoodsList($param);
        return $complain_goods_list;
    }

    /*
     * 获取对话列表
     */
    private function get_talk_list($complain_id)
    {
        $complaintalk_model = model('complaintalk');
        $param = array();
        $param['complain_id'] = $complain_id;
        $talk_list = $complaintalk_model->getComplaintalkList($param);
        return $talk_list;
    }

    /*
     * 获得投诉状态文本
     */
    private function get_complain_state_text($complain_state)
    {
        switch (intval($complain_state)) {
            case self::STATE_NEW:
                return lang('complain_state_new');
                break;
            case self::STATE_APPEAL:
                return lang('complain_state_appeal');
                break;
            case self::STATE_TALK:
                return lang('complain_state_talk');
                break;
            case self::STATE_HANDLE:
                return lang('complain_state_handle');
                break;
            case self::STATE_FINISH:
                return lang('complain_state_finish');
                break;
            default:
                $this->error(lang('param_error'), '');
        }
    }

    /*
     * 获得投诉状态文本
     */
    private function get_complain_state_link($complain_state)
    {
        switch (intval($complain_state)) {
            case self::STATE_NEW:
                return 'complain/complain_new_list';
                break;
            case self::STATE_APPEAL:
                return 'complain/complain_appeal_list';
                break;
            case self::STATE_TALK:
                return 'complain/complain_talk_list';
                break;
            case self::STATE_HANDLE:
                return 'complain/complain_handle_list';
                break;
            case self::STATE_FINISH:
                return 'complain/complain_finish_list';
                break;
            default:
                $this->error(lang('param_error'));
        }
    }

    /*
     * 获得管理员id
     */
    private function get_admin_id()
    {
        $admin_info = $this->getAdminInfo();
        return $admin_info['admin_id'];
    }

    /*
     * 获得管理员name
     */
    private function get_admin_name()
    {
        $admin_info = $this->getAdminInfo();
        return $admin_info['admin_name'];
    }

    protected function getAdminItemList()
    {
        $menu_array = array(
            array(
                'name' => 'complain_new_list',
                'text' => lang('complain_new_list'),
                'url' => (string)url('complain/complain_new_list')
            ),
            array(
                'name' => 'complain_appeal_list',
                'text' => lang('complain_appeal_list'),
                'url' => (string)url('Complain/complain_appeal_list')
            ),
            array(
                'name' => 'complain_talk_list',
                'text' => lang('complain_talk_list'),
                'url' => (string)url('Complain/complain_talk_list')
            ),
            array(
                'name' => 'complain_handle_list',
                'text' => lang('complain_handle_list'),
                'url' => (string)url('Complain/complain_handle_list')
            ),
            array(
                'name' => 'complain_finish_list',
                'text' => lang('complain_finish_list'),
                'url' => (string)url('Complain/complain_finish_list')
            ),
            array(
                'name' => 'complain_subject_list',
                'text' => lang('complain_subject_list'),
                'url' => (string)url('Complain/complain_subject_list')
            ),
            array(
                'name' => 'complain_subject_add',
                'text' => lang('complain_subject_add'),
                'url' => (string)url('Complain/complain_subject_add')
            ),
            array(
                'name' => 'complain_setting',
                'text' => lang('complain_setting'),
                'url' => (string)url('Complain/complain_setting')
            )
        );

        if (request()->action() == 'complain_progress') {
            $menu_array[] = array(
                'name' => 'complain_progress',
                'text' => lang('complain_progress'),
                'url' => '###'
            );
        }
        return $menu_array;
    }
}
