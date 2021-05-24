<?php
namespace app\home\controller;
use think\facade\View;
use think\facade\Lang;
use think\facade\Db;
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
class Memberinviter extends BaseMember {

    public function initialize() {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'home/lang/'.config('lang.default_lang').'/memberinviter.lang.php');
        if(!config('ds_config.inviter_open')){
            $this->error(lang('inviter_not_open'));
        }
    }

    public function add(){
        //判断是否已是分销员
        $inviter_model=model('inviter');
        $inviter_info=$inviter_model->getInviterInfo('i.inviter_id='.session('member_id'));
        
        if($inviter_info && $inviter_info['inviter_state']==0){
            $this->error(lang('inviter_view'));
        }
        if($inviter_info && $inviter_info['inviter_state']==2){
            $this->error(lang('inviter_close'));
        }
        if($inviter_info && $inviter_info['inviter_state']==1){
            $this->redirect('home/Memberinviter/index');
        }
        //是否有分销门槛
        if(config('ds_config.inviter_condition')){
            //检查消费金额
            $order_amount=Db::name('order')->where('buyer_id='.session('member_id').' AND order_state='.ORDER_STATE_SUCCESS.' AND lock_state=0')->sum('order_amount-refund_amount');
            if($order_amount<config('ds_config.inviter_condition_amount')){
                $this->error(sprintf(lang('inviter_condition_amount'),$order_amount,config('ds_config.inviter_condition_amount')));
            }
            
        }
        $inviter_model->addInviter(array(
            'inviter_id'=>session('member_id'),
            'inviter_state'=>config('ds_config.inviter_view')?0:1,
            'inviter_applytime'=>TIMESTAMP,
        ));
        if(config('ds_config.inviter_view')){
            $this->redirect('home/Memberinviter/add');
        }else{
            $this->redirect('home/Memberinviter/index');
        }
        
    }
    /**
     * 推广海报【会员推广】
     *
     * @param
     * @return
     */
    public function index() {
        $member_info = $this->member_info;
        View::assign('inviter_url',HOME_SITE_URL.'/Login/register.html?inviter_id=' . $member_info['member_id']);
        
        //生成微信推广二维码
        $inviter_model=model('inviter');
        $qrcode_weixin = $inviter_model->qrcode_weixin($member_info);
        View::assign('wx_error_msg',$qrcode_weixin['wx_error_msg']);
        View::assign('refer_qrcode_weixin',$qrcode_weixin['refer_qrcode_weixin']);
        
        //生成URL推广二维码
        $inviter_model->qrcode_logo($member_info);
        

        View::assign('refer_qrcode_logo',UPLOAD_SITE_URL. '/' . ATTACH_INVITER . '/' . $member_info['member_id'] . '_poster.png');
        /* 设置买家当前菜单 */
        $this->setMemberCurMenu('inviter_poster');
        /* 设置买家当前栏目 */
        $this->setMemberCurItem('poster');
        return View::fetch($this->template_dir . 'index');
    }
    public function user(){
        /* 设置买家当前菜单 */
        $this->setMemberCurMenu('inviter_user');
        /* 设置买家当前栏目 */
        $this->setMemberCurItem('user');
        $member_model = model('member');
        $condition=array();
        $condition[]=array('inviter_id','=',$this->member_info['member_id']);
        if(input('param.member_name')){
            $condition[]=array('member_name','like','%'.input('param.member_name').'%');
        }
        $member_list=$member_model->getMemberList($condition, 'member_id,member_name,member_avatar,member_addtime,member_logintime', 10, 'member_id desc');
        if(is_array($member_list)){
            foreach($member_list as $key => $val){
                $member_list[$key]['member_addtime'] = $val['member_addtime'] ? date('Y-m-d H:i:s', $val['member_addtime']) : '';
                $member_list[$key]['member_logintime'] = $val['member_logintime'] ? date('Y-m-d H:i:s', $val['member_logintime']) : '';
                //该会员的2级内推荐会员
                $member_list[$key]['inviters']=array();

                
            }
        }
        View::assign('member_list', $member_list);
        View::assign('show_page', $member_model->page_info->render());
        return View::fetch($this->template_dir . 'user');
    }
    
    public function order(){
        /* 设置买家当前菜单 */
        $this->setMemberCurMenu('inviter_order');
        /* 设置买家当前栏目 */
        $this->setMemberCurItem('order');

        $condition=array();
        $condition[]=array('orderinviter_member_id','=', $this->member_info['member_id']);
        if(input('param.orderinviter_order_sn')){
            $condition[]=array('orderinviter_order_sn','like','%'.input('param.orderinviter_order_sn').'%');
        }
        $orderinviter_list = Db::name('orderinviter')->where($condition)->order('orderinviter_id desc')->paginate(10);
        $page = $orderinviter_list->render();
        View::assign('show_page', $page);
        View::assign('orderinviter_list', $orderinviter_list);
        return View::fetch($this->template_dir . 'order');
    }
    /**
     * 用户中心右边，小导航
     *
     * @param string $menu_type 导航类型
     * @param string $menu_key 当前导航的menu_key
     * @return
     */
    public function getMemberItemList() {
        $menu_array = array(
            array(
                'name' => 'poster',
                'text' => lang('inviter_poster'),
                'url' => (string)url('Memberinviter/index')
            ),
            array(
                'name' => 'user',
                'text' => lang('inviter_user'),
                'url' => (string)url('Memberinviter/user')
            ),
            array(
                'name' => 'order',
                'text' => lang('inviter_order'),
                'url' => (string)url('Memberinviter/order')
            ),
        );

        return $menu_array;
    }

}
