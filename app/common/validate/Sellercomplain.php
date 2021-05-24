<?php

namespace app\common\validate;


use think\Validate;
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
 * 验证器
 */
class  Sellercomplain extends Validate
{
    protected $rule = [
        'appeal_message'=>'require|length:1,255',
    ];
    protected $message = [
        'appeal_message.require'=>'投诉内容不能为空且必须小于100个字符|投诉内容不能为空且必须小于100个字符',
        'appeal_message.length'=>'投诉内容不能为空且必须小于100个字符|投诉内容不能为空且必须小于100个字符',
    ];
    protected $scene = [
        'appeal_save' => ['appeal_message'],
    ];
}