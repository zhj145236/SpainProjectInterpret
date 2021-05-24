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
class Pointorder extends AdminControl {

    public function initialize() {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'admin/lang/'.config('lang.default_lang').'/pointorder.lang.php');
    }

    /**
     * 积分兑换列表
     */
    public function pointorder_list() {
        $pointorder_model = model('pointorder');
        //获取兑换订单状态
        $pointorderstate_arr = $pointorder_model->getPointorderStateBySign();
        $where = array();
        //兑换单号
        $pordersn = trim(input('param.pordersn'));
        if ($pordersn) {
            $where[]=array('point_ordersn','like', "%{$pordersn}%");
        }
        //兑换会员名称
        $pbuyname = trim(input('param.pbuyname'));
        if (trim(input('param.pbuyname'))) {
            $where[]=array('point_buyername','like', "%{$pbuyname}%");
        }
        //订单状态
        if (trim(input('param.porderstate'))) {
            $where[]=array('point_orderstate','=',$pointorderstate_arr[input('param.porderstate')][0]);
        }
        //查询兑换订单列表
        $order_list = $pointorder_model->getPointorderList($where, '*', 10, 0, 'point_orderid desc');

        //信息输出
        View::assign('pointorderstate_arr', $pointorderstate_arr);
        View::assign('order_list', $order_list);
        View::assign('show_page', $pointorder_model->page_info->render());
        $this->setAdminCurItem('pointorder_list');
        return View::fetch();
    }

    /**
     * 删除兑换订单信息
     */
    public function order_drop() {
        $data = model('pointorder')->delPointorderByOrderID(input('param.order_id'));
        if ($data['state']) {
            ds_json_encode(10000, lang('admin_pointorder_del_success'));
        } else {
            ds_json_encode(10001, $data['msg']);
        }
    }

    /**
     * 取消兑换
     */
    public function order_cancel() {
        $pointorder_model = model('pointorder');
        //取消订单
        $data = $pointorder_model->cancelPointorder(input('param.id'));
        if ($data['state']) {
            ds_json_encode(10000, lang('admin_pointorder_cancel_success'));
        } else {
            ds_json_encode(10001, $data['msg']);
        }
    }

    /**
     * 发货
     */
    public function order_ship() {
        $order_id = intval(input('param.id'));
        if ($order_id <= 0) {
            $this->error(lang('admin_pointorder_parameter_error'),(string)url('Pointorder/pointorder_list'));
        }
        $pointorder_model = model('pointorder');
        //获取订单状态
        $pointorderstate_arr = $pointorder_model->getPointorderStateBySign();

        //查询订单信息
        $where = array();
        $where[]=array('point_orderid','=',$order_id);
        $where[]=array('point_orderstate','in', array($pointorderstate_arr['waitship'][0], $pointorderstate_arr['waitreceiving'][0])); //待发货和已经发货状态
        $order_info = $pointorder_model->getPointorderInfo($where);
        if (!$order_info) {
            $this->error(lang('admin_pointorderd_record_error'),(string)url('Pointorder/pointorder_list'));
        }
        if (request()->isPost()) {
            $data = [
                'shippingcode' => input('post.shippingcode')
            ];
            $point_validate = ds_validate('point');
            if (!$point_validate->scene('order_ship')->check($data)) {
                $this->error($point_validate->getError());
            }

            //发货
            $data = $pointorder_model->shippingPointorder($order_id, input('post.'), $order_info);
            if ($data['state']) {
                dsLayerOpenSuccess(lang('ds_common_op_succ'));
            } else {
                $this->error($data['msg'],(string)url('Pointorder/pointorder_list'));
            }
        } else {
            $express_list = model('express')->getExpressList();
            View::assign('express_list', $express_list);
            View::assign('order_info', $order_info);
            return View::fetch();
        }
    }

    /**
     * 兑换信息详细
     */
    public function order_info() {
        $order_id = intval(input('param.order_id'));
        if ($order_id <= 0) {
            $this->error(lang('admin_pointorder_parameter_error'));
        }
        //查询订单信息
        $pointorder_model = model('pointorder');
        $order_info = $pointorder_model->getPointorderInfo(array('point_orderid' => $order_id));
        if (!$order_info) {
            $this->error(lang('admin_pointorderd_record_error'));
        }
        $orderstate_arr = $pointorder_model->getPointorderState($order_info['point_orderstate']);
        $order_info['point_orderstatetext'] = $orderstate_arr[1];

        //查询兑换订单收货人地址
        $orderaddress_info = $pointorder_model->getPointorderAddressInfo(array('pointoa_orderid' => $order_id));
        View::assign('orderaddress_info', $orderaddress_info);

        //兑换商品信息
        $prod_list = $pointorder_model->getPointordergoodsList(array('pointog_orderid' => $order_id));
        View::assign('prod_list', $prod_list);

        //物流公司信息
        if ($order_info['point_shipping_ecode'] != '') {
            $data = model('express')->getExpressInfoByECode($order_info['point_shipping_ecode']);
            if ($data['state']) {
                $express_info = $data['data']['express_info'];
            }
            View::assign('express_info', $express_info);
        }

        View::assign('order_info', $order_info);
        return View::fetch();
    }

    protected function getAdminItemList() {
        $menu_array = array(
            array(
                'name' => 'pointorder_list', 'text' => lang('admin_pointorder_list_title'), 'url' => (string)url('Pointorder/pointorder_list')
            ),
        );
        return $menu_array;
    }

}
