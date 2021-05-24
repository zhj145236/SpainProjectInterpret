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
class Fleaclassindex extends AdminControl
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        Lang::load(base_path() . 'admin/lang/'.config('lang.default_lang').'/flea.lang.php');
    }
    /**
     * 设置
     */
    public function flea_class_index() {


        /**
         * 实例化商品分类模型
         */
        $fleaclass_model = model('fleaclass');
        $goods_class = $fleaclass_model->getTreeClassList(1);
        View::assign('goods_class', $goods_class);
        /**
         * 获取设置信息
         */
        $fc_index = $fleaclass_model->getFleaclassindex(array());
        if (is_array($fc_index) && !empty($fc_index)) {
            foreach ($fc_index as $value) {
                View::assign($value['fcindex_code'], $value);
            }
        }
        if (request()->isPost()) {
            $a = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'shuma', 'fcindex_id1' => input('post.shuma_cid1'), 'fcindex_id2' => input('post.shuma_cid2'), 'fcindex_id3' => input('post.shuma_cid3'), 'fcindex_id4' => input('post.shuma_cid4')));
            $b = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'zhuangban', 'fcindex_id1' => input('post.zhuangban_cid1'), 'fcindex_id2' => input('post.zhuangban_cid2'), '' => input('post.fcindex_id3'), 'fcindex_id4' => input('post.zhuangban_cid4')));
            $c = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'jujia', 'fcindex_id1' => input('post.jujia_cid1'), 'fcindex_id2' => input('post.jujia_cid2'), 'fcindex_id3' => input('post.jujia_cid3'), 'fcindex_id4' => input('post.jujia_cid4')));
            $d = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'xingqu', 'fcindex_id1' => input('post.xingqu_cid1'), 'fcindex_id2' => input('post.xingqu_cid2'), 'fcindex_id3' => input('post.xingqu_cid3'), 'fcindex_id4' => input('post.xingqu_cid4')));
            $e = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'muying', 'fcindex_id1' => input('post.muying_cid1'), 'fcindex_id2' => input('post.muying_cid2'), 'fcindex_id3' => input('post.muying_cid3'), 'fcindex_id4' => input('post.muying_cid4')));
            if ($a && $b && $c && $d && $e) {
                $a = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'shuma', 'fcindex_name1' => input('post.shuma_cname1'), 'fcindex_name2' => input('post.shuma_cname2'), 'fcindex_name3' => input('post.shuma_cname3'), 'fcindex_name4' => input('post.shuma_cname4')));
                $b = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'zhuangban', 'fcindex_name1' => input('post.zhuangban_cname1'), 'fcindex_name2' => input('post.zhuangban_cname2'), 'fcindex_name3' => input('post.zhuangban_cname3'), 'fcindex_name4' => input('post.zhuangban_cname4')));
                $c = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'jujia', 'fcindex_name1' => input('post.jujia_cname1'), 'fcindex_name2' => input('post.jujia_cname2'), 'fcindex_name3' => input('post.jujia_cname3'), 'fcindex_name4' => input('post.jujia_cname4')));
                $d = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'xingqu', 'fcindex_name1' => input('post.xingqu_cname1'), 'fcindex_name2' => input('post.xingqu_cname2'), 'fcindex_name3' => input('post.xingqu_cname3'), 'fcindex_name4' => input('post.xingqu_cname4')));
                $e = $fleaclass_model->setFleaclassindex(array('fcindex_code' => 'muying', 'fcindex_name1' => input('post.muying_cname1'), 'fcindex_name2' => input('post.muying_cname2'), 'fcindex_name3' => input('post.muying_cname3'), 'fcindex_name4' => input('post.muying_cname4')));
                if ($a && $b && $c && $d && $e) {
                    $this->success(lang('flea_class_setting_ok'));
                }
            } else {
                $this->error(lang('flea_class_setting_error'));
            }
        } else {
            $this->setAdminCurItem('flea_class_index');
            return View::fetch('flea_class_index');
        }
    }

    protected function getAdminItemList()
    {
        $menu_array = array(
            array(
                'name' => 'flea_class_index', 'text' => lang('flea_index_class_setting_info'), 'url' => (string)url('Fleaclassindex/flea_class_index')
            ),
        );
        return $menu_array;
    }
}