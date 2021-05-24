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
class Sellerpromotionmansong extends BaseSeller {

    public function initialize() {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'home/lang/' . config('lang.default_lang') . '/sellerpromotionmansong.lang.php');

        //检查满就送是否开启
        if (intval(config('ds_config.promotion_allow')) !== 1) {
            $this->error(lang('promotion_unavailable'), 'seller/index');
        }
    }

    /**
     * 发布的满就送活动列表
     * */
    public function index() {
        $mansongquota_model = model('pmansongquota');
        $pmansong_model = model('pmansong');

        $isPlatformStore = check_platform_store() ? true : false;

        View::assign('isPlatformStore', $isPlatformStore);

        $current_mansong_quota = $mansongquota_model->getMansongquotaCurrent(session('store_id'));
        View::assign('current_mansong_quota', $current_mansong_quota);

        $condition = array();
        $condition[] = array('store_id', '=', session('store_id'));
        if ((input('param.mansong_name'))) {
            $condition[] = array('mansong_name', 'like', '%' . input('param.mansong_name') . '%');
        }
        if ((input('param.state'))) {
            $condition[] = array('mansong_state', '=', intval(input('param.state')));
        }
        $mansong_list = $pmansong_model->getMansongList($condition, 10, 'mansong_state desc, mansong_endtime desc');
        View::assign('mansong_list', $mansong_list);
        View::assign('show_page', $pmansong_model->page_info->render());
        View::assign('mansong_state_array', $pmansong_model->getMansongStateArray());
        $this->setSellerCurMenu('Sellerpromotionmansong');
        $this->setSellerCurItem('mansong_list');
        return View::fetch($this->template_dir . 'index');
    }

    /**
     * 添加满就送活动
     * */
    public function mansong_add() {
        $mansongquota_model = model('pmansongquota');
        $pmansong_model = model('pmansong');

        $start_time = $pmansong_model->getMansongNewStartTime(session('store_id'));

        $end_time = TIMESTAMP;
        $isPlatformStore = check_platform_store() ? true : false;
        View::assign('isPlatformStore', $isPlatformStore);

        if (!$isPlatformStore) {
            //检查当前套餐是否可用
            $current_mansong_quota = $mansongquota_model->getMansongquotaCurrent(session('store_id'));
            if (empty($current_mansong_quota)) {
                if (intval(config('ds_config.promotion_mansong_price')) != 0) {
                    $this->error(lang('mansong_quota_current_error'));
                } else {
                    $current_mansong_quota = array('mansongquota_starttime' => TIMESTAMP, 'mansongquota_endtime' => TIMESTAMP + 86400 * 30); //没有套餐时，最多一个月
                }
            }

            if (empty($start_time)) {
                $start_time = $current_mansong_quota['mansongquota_starttime'];
            }
            $end_time = $current_mansong_quota['mansongquota_endtime'];
        }

        if (empty($start_time))
            $start_time = TIMESTAMP;

        View::assign('start_time', $start_time);
        View::assign('end_time', $end_time);

        //输出导航
        $this->setSellerCurMenu('Sellerpromotionmansong');
        $this->setSellerCurItem('mansong_add');
        return View::fetch($this->template_dir . 'mansong_add');
    }

    /**
     * 保存添加的满就送活动
     * */
    public function mansong_save() {
        $mansong_name = trim(input('post.mansong_name'));
        $start_time = strtotime(input('post.start_time'));
        $end_time = strtotime(input('post.end_time'));

        $mansongquota_model = model('pmansongquota');
        $pmansong_model = model('pmansong');
        $mansongrule_model = model('pmansongrule');

        if ($start_time >= $end_time) {
            ds_json_encode(10001, lang('greater_than_start_time'));
        }
        if (empty($mansong_name)) {
            ds_json_encode(10001, lang('mansong_name_error'));
        }

        $start_time_limit = $pmansong_model->getMansongNewStartTime(session('store_id'));
        if (!empty($start_time_limit) && $start_time_limit > $start_time) {
            $start_time = $start_time_limit;
        }

        if (!check_platform_store()) {
            //检查当前套餐是否可用
            $current_mansong_quota = $mansongquota_model->getMansongquotaCurrent(session('store_id'));
            if (empty($current_mansong_quota)) {
                if (intval(config('ds_config.promotion_mansong_price')) != 0) {
                    ds_json_encode(10001, lang('mansong_quota_current_error'));
                } else {
                    $current_mansong_quota = array('mansongquota_starttime' => TIMESTAMP, 'mansongquota_endtime' => TIMESTAMP + 86400 * 30); //没有套餐时，最多一个月
                }
            }

            //验证输入
            $quota_start_time = intval($current_mansong_quota['mansongquota_starttime']);
            $quota_end_time = intval($current_mansong_quota['mansongquota_endtime']);

            if ($start_time < $quota_start_time) {
                ds_json_encode(10001, sprintf(lang('mansong_add_start_time_explain'), date('Y-m-d', $current_mansong_quota['mansongquota_starttime'])));
            }
            if ($end_time > $quota_end_time) {
                ds_json_encode(10001, sprintf(lang('mansong_add_end_time_explain'), date('Y-m-d', $current_mansong_quota['mansongquota_endtime'])));
            }
        }

        if (empty(input('post.mansong_rule/a'))) {
            ds_json_encode(10001, lang('mansong_rule_empty'));
        }

        $param = array();
        $param['mansong_name'] = $mansong_name;
        $param['mansong_starttime'] = $start_time;
        $param['mansong_endtime'] = $end_time;
        $param['store_id'] = session('store_id');
        $param['store_name'] = session('store_name');
        $param['member_id'] = session('member_id');
        $param['member_name'] = session('member_name');
        $param['mansongquota_id'] = isset($current_mansong_quota['mansongquota_id']) ? $current_mansong_quota['mansongquota_id'] : 0;
        $param['mansong_remark'] = trim(input('post.remark'));
        $mansong_id = $pmansong_model->addMansong($param);
        if ($mansong_id) {
            $mansong_rule_array = array();
            foreach (input('post.mansong_rule/a') as $value) {
                list($price, $discount, $goods_id) = explode(',', $value);
                $mansong_rule = array();
                $mansong_rule['mansong_id'] = $mansong_id;
                $mansong_rule['mansongrule_price'] = $price;
                $mansong_rule['mansongrule_discount'] = $discount;
                $mansong_rule['goods_id'] = $goods_id;
                $mansong_rule_array[] = $mansong_rule;
            }
            //生成规则
            $result = $mansongrule_model->addMansongruleArray($mansong_rule_array);

            $this->recordSellerlog('添加满即送活动，活动名称：' . $mansong_name);

            // 自动发布动态
            // mansong_name,start_time,end_time,store_id
            $data_array = array();
            $data_array['mansong_name'] = $param['mansong_name'];
            $data_array['mansong_starttime'] = $param['mansong_starttime'];
            $data_array['mansong_endtime'] = $param['mansong_endtime'];
            $data_array['store_id'] = session('store_id');
            $this->storeAutoShare($data_array, 'mansong');

            ds_json_encode(10000, lang('mansong_add_success'));
        } else {
            ds_json_encode(10001, lang('mansong_add_fail'));
        }
    }

    /**
     * 满就送活动详细信息
     * */
    public function mansong_detail() {
        $mansong_id = intval(input('param.mansong_id'));

        $pmansong_model = model('pmansong');
        $mansongrule_model = model('pmansongrule');

        $mansong_info = $pmansong_model->getMansongInfoByID($mansong_id, session('store_id'));
        if (empty($mansong_info)) {
            $this->error(lang('param_error'));
        }
        View::assign('mansong_info', $mansong_info);

        $param = array();
        $param['mansong_id'] = $mansong_id;
        $rule_list = $mansongrule_model->getMansongruleListByID($mansong_id);
        View::assign('rule_list', $rule_list);

        //输出导航
        $this->setSellerCurMenu('Sellerpromotionmansong');
        return View::fetch($this->template_dir . 'mansong_detail');
    }

    /**
     * 满就送活动删除
     * */
    public function mansong_del() {
        $mansong_id = intval(input('post.mansong_id'));

        $pmansong_model = model('pmansong');

        $mansong_info = $pmansong_model->getMansongInfoByID($mansong_id, session('store_id'));
        if (empty($mansong_info)) {
            ds_json_encode(10001, lang('param_error'));
        }

        $condition = array();
        $condition[] = array('mansong_id','=',$mansong_id);
        $result = $pmansong_model->delMansong($condition);

        if ($result) {
            $this->recordSellerlog('删除满即送活动，活动名称：' . $mansong_info['mansong_name']);
            ds_json_encode(10000, lang('ds_common_op_succ'));
        } else {
            ds_json_encode(10001, lang('ds_common_op_fail'));
        }
    }

    /**
     * 满就送套餐购买
     * */
    public function mansong_quota_add() {

        $this->setSellerCurMenu('Sellerpromotionmansong');
        $this->setSellerCurItem('mansong_quota_add');
        return View::fetch($this->template_dir . 'quota_add');
    }

    /**
     * 满就送套餐购买保存
     * */
    public function mansong_quota_add_save() {
        if (intval(config('ds_config.promotion_mansong_price')) == 0) {
            ds_json_encode(10001, lang('param_error'));
        }
        $mansong_quota_quantity = intval(input('post.mansong_quota_quantity'));

        if ($mansong_quota_quantity <= 0 || $mansong_quota_quantity > 12) {
            ds_json_encode(10001, lang('mansong_quota_quantity_error'));
        }

        //获取当前价格
        $current_price = intval(config('ds_config.promotion_mansong_price'));

        //获取该用户已有套餐
        $mansongquota_model = model('pmansongquota');
        $current_mansong_quota = $mansongquota_model->getMansongquotaCurrent(session('store_id'));
        $mansong_add_time = 86400 * 30 * $mansong_quota_quantity;
        if (empty($current_mansong_quota)) {
            //生成套餐
            $param = array();
            $param['member_id'] = session('member_id');
            $param['member_name'] = session('member_name');
            $param['store_id'] = session('store_id');
            $param['store_name'] = session('store_name');
            $param['mansongquota_starttime'] = TIMESTAMP;
            $param['mansongquota_endtime'] = TIMESTAMP + $mansong_add_time;
            $mansongquota_model->addMansongquota($param);
        } else {
            $param = array();
            $param['mansongquota_endtime'] = Db::raw('mansongquota_endtime+' . $mansong_add_time);
            $mansongquota_model->editMansongquota($param, array('mansongquota_id' => $current_mansong_quota['mansongquota_id']));
        }

        //记录店铺费用
        $this->recordStorecost($current_price * $mansong_quota_quantity, '购买满即送');

        $this->recordSellerlog('购买' . $mansong_quota_quantity . '份满即送套餐，单价' . $current_price . lang('ds_yuan'));

        ds_json_encode(10000, lang('mansong_quota_add_success'));
    }

    /**
     * 选择活动商品
     * */
    public function search_goods() {
        $goods_model = model('goods');
        $condition = array();
        $condition[] = array('store_id', '=', session('store_id'));
        $condition[] = array('goods_name', 'like', '%' . input('param.goods_name') . '%');
        $goods_list = $goods_model->getGeneralGoodsList($condition, '*', 8);

        View::assign('goods_list', $goods_list);
        View::assign('show_page', $goods_model->page_info->render());
        echo View::fetch($this->template_dir . 'mansong_goods');
    }

    /**
     * 用户中心右边，小导航
     *
     * @param string $menu_type 导航类型
     * @param string $name 当前导航的name
     * @param array $array 附加菜单
     * @return
     */
    protected function getSellerItemList() {
        $menu_array = array(
            array(
                'name' => 'mansong_list', 'text' => lang('promotion_active_list'),
                'url' => (string) url('Sellerpromotionmansong/index')
            ),
        );
        switch (request()->action()) {
            case 'mansong_add':
                $menu_array[] = array(
                    'name' => 'mansong_add', 'text' => lang('promotion_join_active'),
                    'url' => (string) url('Sellerpromotionmansong/mansong_add')
                );
                break;
            case 'mansong_quota_add':
                $menu_array[] = array(
                    'name' => 'mansong_quota_add', 'text' => lang('promotion_buy_product'),
                    'url' => (string) url('Sellerpromotionmansong/mansong_quota_add')
                );
                break;
            case 'mansong_detail':
                $menu_array[] = array(
                    'name' => 'mansong_detail', 'text' => lang('mansong_active_content'),
                    'url' => (string) url('Sellerpromotionmansong/mansong_detail', array('mansong_id' => input('param.mansong_id')))
                );
                break;
        }
        return $menu_array;
    }

}
