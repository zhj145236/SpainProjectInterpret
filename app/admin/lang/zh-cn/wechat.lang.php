<?php

return [
    //公众号配置
    'wx_url' => 'URL(服务器地址)',
    'wx_token' => 'Token',
    'wx_appid' => 'AppID',
    'wx_AppSecret' => 'AppSecret',
    'wx_qrcode' => '二维码',
    'wx_name' => '公众号名称',
    'xcx_appid' => '小程序AppID',
    'xcx_AppSecret' => '小程序AppSecret',
    //菜单
    'menu_name' => '菜单名称',
    'menu_type' => '菜单类型',
    'menu_value' => '菜单值',
    'menu_sort' => '排序',
    'menu_type_1' => '链接',
    'menu_type_2' => '命令',
    'menu_type_3' => '自定义图文',
    'menu_p_name' => '选择上级菜单',
    'sort_error' => '排序只能为数字',
    'name_can_not_null' => '菜单名称不能为空',
    'type_can_not_null' => '类型不能为空',
    'value_can_not_null' => '链接类型必须输入URL地址',
    //关键字
    'keywords' => '关键字',
    'k_value' => '回复',
    'keywords_required' => '关键字不能为空',
    'k_value_required' => '请输入回复内容',
    'k_value_maxlength' => '回复内容最大值100个字',
    //推送
    'tomember' => '目标用户名',
    'totype' => '推送类型',
    'content' => '推送内容',
    'totime' => '推送时间',
    'state' => '状态',
    'wechat_menu_form_help1'=>'1.自定义菜单最多包括3个一级菜单，每个一级菜单最多包含5个二级菜单',
    'wechat_menu_form_help2'=>'2.一级菜单最多4个汉字，二级菜单最多7个汉字，多出来的部分将会以“...”代替。',
    'wechat_menu_form_help3'=>'3.创建自定义菜单后，菜单的刷新策略是，在用户进入公众号会话页或公众号profile页时，如果发现上一次拉取菜单的请求在5分钟以前，就会拉取一下菜单，如果菜单有更新，就会刷新客户端的菜单。测试时可以尝试取消关注公众账号后再次关注，则可以看到创建后的效果。',
    'wechat_menu_form_help4'=>'4.目前支持的菜单类型的命令：hot点击率高的商品 commend店铺推荐商品 sale销售量 colleect收藏量',
    //群发消息
    'sendgroup'=>'群发消息',
    'sendgroup_text'=>'群发内容',
    'sendgroup_text_required'=>'请输入群发类容',
    'wechat_sendgroup_help1'=>'1.服务号提供每个月,4条的群发权限。提示：每个月为自然月，',
    'wechat_sendgroup_help2'=>'2.用户每月只能接收4条，无论在公众平台网站上，还是使用接口群发，用户每月只能接收4条群发消息，多于4条的群发将对该用户发送失败；',
    'message_type'=>'消息类型',
    'message_type_text'=>'文本',
    'message_type_news'=>'图文',
    'message_type_news_add'=>'图文新增',
    'wechat_title'=>'标题',
    'wechat_digest'=>'摘要',
    'wechat_author'=>'作者',
    'wechat_content_source_url'=>'阅读原文链接',
    'wechat_file'=>'图文缩略图',
    'wechat_article_content'=>'内容',
    'wechat_bind_list'=>'绑定列表',
    'wechat_menu_pid_0'=>'顶级',
    'wechat_menu_sort_min'=>'顶级',
    'wechat_menu_sort_max'=>'顶级',
    
    'wechat_menu'=>'微信菜单',
    'wechat_menu_update'=>'更新菜单',
    'wechat_menu_help1'=>'一.自定义菜单最多包括3个一级菜单，每个一级菜单最多包含5个二级菜单',
    'wechat_menu_help2'=>'二.一级菜单最多4个汉字，二级菜单最多7个汉字，多出来的部分将会以“...”代替。',
    'wechat_menu_help3'=>'三.创建自定义菜单后，菜单的刷新策略是，在用户进入公众号会话页或公众号profile页时，如果发现上一次拉取菜单的请求在5分钟以前，就会拉取一下菜单，如果菜单有更新，就会刷新客户端的菜单。测试时可以尝试取消关注公众账号后再次关注，则可以看到创建后的效果。',
    'wechat_menu_help4'=>'四.目前支持的菜单类型的命令：hot点击率高的商品 commend店铺推荐商品 sale销售量 colleect收藏量',
    'wechat_menu_help5'=>'五.菜单添加完成后点击右上角更新菜单按钮同步菜单到公众号',
    
    'wechat_openid'=>'微信OpenId',
    'wechat_unionid'=>'微信UnionID',
    'wechat_member_name'=>'用户名',
    'wechat_bind_time'=>'绑定时间',
    'wechat_message_send'=>'消息推送',
    
    'issend_1'=>'已发送',
    'issend_0'=>'未发送',
    
    
    'top_menu_count_error'=>'顶级菜单只能有三个',
    'no_menu'=>'没有菜单可发布',
    'please_set_wechat_config'=>'请先在公众号配置添加公众号，才能进行文本回复管理',
    'issend_0'=>'未发送',
    'issend_0'=>'未发送',
    'issend_0'=>'未发送',
];
