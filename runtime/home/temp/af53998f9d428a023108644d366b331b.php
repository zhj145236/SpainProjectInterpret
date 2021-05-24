<?php /*a:18:{s:83:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\store\default\store\index.html";i:1616221226;s:73:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\base_store.html";i:1616221224;s:71:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_top.html";i:1617186346;s:75:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\store_header.html";i:1616221225;s:88:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\store\default\store\store_info.html";i:1616221226;s:89:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\common.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\1.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\2.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\3.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\4.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\5.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\7.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\8.html";i:1616221224;s:84:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\9.html";i:1616221224;s:85:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\10.html";i:1616221224;s:85:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\editable_page_model\11.html";i:1616221224;s:74:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_server.html";i:1616221225;s:74:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_footer.html";i:1616221225;}*/ ?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo htmlentities((isset($html_title) && ($html_title !== '')?$html_title:config('ds_config.site_name'))); ?></title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand" />
        <meta name="keywords" content="<?php echo htmlentities((isset($seo_keywords) && ($seo_keywords !== '')?$seo_keywords:'')); ?>" />
        <meta name="description" content="<?php echo htmlentities((isset($seo_description) && ($seo_description !== '')?$seo_description:'')); ?>" />
        <link rel="stylesheet" href="<?php echo htmlentities(HOME_SITE_ROOT); ?>/css/common.css">
        <link rel="stylesheet" href="<?php echo htmlentities(HOME_SITE_ROOT); ?>/css/home_header.css">
        <script>
            var BASESITEROOT = "<?php echo htmlentities(BASE_SITE_ROOT); ?>";
            var HOMESITEROOT = "<?php echo htmlentities(HOME_SITE_ROOT); ?>";
            var BASESITEURL = "<?php echo htmlentities(BASE_SITE_URL); ?>";
            var HOMESITEURL = "<?php echo htmlentities(HOME_SITE_URL); ?>";
            var TIMESTAMP = "<?php echo htmlentities(TIMESTAMP); ?>";
        </script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery-2.1.4.min.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/common.js?v=20180117"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/js/jquery-ui/jquery.ui.datepicker-zh-CN.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.validate.min.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/additional-methods.min.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/layer/layer.js"></script>
        <script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
    </head>
    <body>
        <div id="append_parent"></div>
        <div id="ajaxwaitid"></div>
        <!-- <?php if($adv_top): ?>
        <div style="background:<?php echo htmlentities((isset($adv_top['adv_bgcolor']) && ($adv_top['adv_bgcolor'] !== '')?$adv_top['adv_bgcolor']:'')); ?>;">
            <div class="w1200">
                <a href="<?php echo url('Advclick/Advclick',['adv_id'=>$adv_top['adv_id']]); ?>"  title="<?php echo htmlentities($adv_top['adv_title']); ?>"><img src="<?php echo ds_get_pic(ATTACH_ADV,$adv_top['adv_code']); ?>" width="1200"/></a>
            </div>
        </div>
        <?php endif; ?> -->
        <div class="public-top">
            <div class="w1200">
                <span class="top-link">
                    <?php echo htmlentities(lang('welcome_to')); ?> <em><?php echo htmlentities(config('ds_config.site_name')); ?></em>
                </span>
                <ul class="login-regin">
                    <?php if(session('member_id')): ?>
                    <li class="line"> <a href="<?php echo url('Member/index'); ?>"><?php echo session('member_name'); ?></a></li>
                    <li> <a href="<?php echo url('Login/Logout'); ?>"><?php echo htmlentities(lang('exit')); ?></a></li>
                    <?php else: ?>
                    <li class="line"> <a href="<?php echo url('Login/login'); ?>"><?php echo htmlentities(lang('please_log')); ?></a></li>
                    <li> <a href="<?php echo url('Login/register'); ?>"><?php echo htmlentities(lang('free_registration')); ?></a></li>
                    <?php endif; ?>
                </ul>
                <ul class="quick_list">
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Member/index'); ?>"><?php echo htmlentities(lang('ds_user_center')); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="<?php echo url('Memberorder/index'); ?>"><?php echo htmlentities(lang('ds_buying_goods')); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo htmlentities(lang('ds_care_about')); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fslist'); ?>"><?php echo htmlentities(lang('ds_the_shop')); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Seller/index'); ?>"><?php echo htmlentities(lang('business_center')); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <?php if(session('seller_id')): ?>
                                <li><a href="<?php echo url('Seller/index'); ?>"><?php echo htmlentities(lang('ds_shop_overview')); ?></a></li>
                                <li><a href="<?php echo url('Sellerorder/index'); ?>"><?php echo htmlentities(lang('ds_member_path_store_order')); ?></a></li>
                                <li><a href="<?php echo url('Sellergoodsonline/index'); ?>"><?php echo htmlentities(lang('promotion_goods_manage')); ?></a></li>
                                <?php else: if(config('ds_config.store_joinin_open')!=0): ?>
                                <li><a href="<?php echo url('Showjoinin/index'); ?>"><?php echo htmlentities(lang('tenants')); ?></a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo url('Sellerlogin/login'); ?>"><?php echo htmlentities(lang('merchant_login')); ?></a></li>
                                <?php endif; ?>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo htmlentities(lang('ds_favorites')); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <li><a href="<?php echo url('Memberfavorites/fglist'); ?>"><?php echo htmlentities(lang('ds_merchandise_collection')); ?></a></li>
                                <li><a href="<?php echo url('Memberfavorites/fslist'); ?>"><?php echo htmlentities(lang('ds_store_collect')); ?></a></li>
                            </ol>
                        </div>
                    </li>
                    <!-- <li>
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)"><?php echo htmlentities(lang('ds_fast_nav')); ?><b></b></a>
                        <div class="dropdown-menu">
                            <ol>
                                <?php foreach($navs['header'] as $nav): ?>
                                <li>
                                    <a href="<?php echo htmlentities($nav['nav_url']); ?>" <?php if($nav['nav_new_open'] == 1): ?><?php endif; ?>><?php echo htmlentities($nav['nav_title']); ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </li> -->
                    <li class="moblie-qrcode">
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)"><?php echo htmlentities(lang('wechat_end')); ?></a>
                        <div class="dropdown-menu">
                            <img src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logowx')); ?>" width="90" height="90" />
                        </div>
                    </li>
                    <!--
                    <li class="app-qrcode">
                        <span class="outline"></span>
                        <span class="blank"></span>
                        <a href="javascript:void(0)">APP</a>
                        <div class="dropdown-menu">
                            <img width="90" height="90" src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logowx')); ?>" />
                            <h3>扫描二维码</h3>
                            <p>下载手机客户端</p>
                        </div>
                    </li>
                    -->
                </ul>
            </div>
        </div>
        
        
        
        <!--左侧导航栏-->
<div class="ds-appbar">
    <div class="ds-appbar-tabs" id="appBarTabs">
        <?php if(session('is_login')): ?>
        <div class="user" dstype="a-barUserInfo">
            <div class="avatar"><img src="<?php echo get_member_avatar(session('avatar')); ?>?<?php echo htmlentities(TIMESTAMP); ?>"/></div>
            <p><?php echo htmlentities(lang('sns_me')); ?></p>
        </div>
        <div class="user-info" dstype="barUserInfo" style="display:none;"><i class="arrow"></i>
            <div class="avatar"><img src="<?php echo get_member_avatar(session('avatar')); ?>?<?php echo htmlentities(TIMESTAMP); ?>"/></div>
            <dl>
                <dt>Hi, <?php echo session('member_nickname'); ?></dt>
                <dd><?php echo htmlentities(lang('ds_current_level')); ?>：<strong dstype="barMemberGrade"><?php echo session('level_name'); ?></strong></dd>
                <dd><?php echo htmlentities(lang('ds_current_experience')); ?>：<strong dstype="barMemberExp"><?php echo session('member_exppoints'); ?></strong></dd>
            </dl>
        </div>
       <?php else: ?>
        <div class="user TA_delay" dstype="a-barLoginBox">
            <div class="avatar TA"><img src="<?php echo get_member_avatar(session('avatar')); ?>?<?php echo htmlentities(TIMESTAMP); ?>"/></div>
            <p class="TA"><?php echo htmlentities(lang('login_notlogged')); ?></p>
        </div>
        <?php endif; ?>
        <ul class="tools">
            <?php if(config('ds_config.node_site_use') == '1'): ?>
            <li><a href="javascript:void(0);" id="chat_show_user" class="chat TA_delay"><span class="iconfont">&#xe71b;</span><span class="tit"><?php echo htmlentities(lang('ds_chat')); ?></span><i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
            <?php endif; ?>
            <li><a href="javascript:void(0);" onclick="toglle_bar('rtoolbar_cart')" id="rtoolbar_cart" class="cart TA_delay"><span class="iconfont">&#xe69a;</span><span class="tit"><?php echo htmlentities(lang('ds_cart')); ?></span><i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i></a></li>
            <!-- <li><a href="javascript:void(0);" onclick="toglle_bar('compare')" id="compare" class="compare TA_delay"><span class="iconfont">&#xe74a;</span><span class="tit"><?php echo htmlentities(lang('ds_comparison')); ?></span></a></li> -->
            <li>
                <a href="javascript:void(0);" id="qrcode" class="qrcode TA_delay"><span class="iconfont">&#xe72d;</span>
                    <span class="tit-box">
                        <?php echo htmlentities(lang('ds_mobile_shopping_better')); ?><br>
                        <!-- <img src="<?php echo htmlentities(HOME_SITE_URL); ?>/qrcode?url=<?php echo htmlentities(config('ds_config.h5_site_url')); ?>" width="110" height="110" /> -->
                        <img src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logowx')); ?>" width="110" height="110" />
                        <em class="tips_arrow"></em>
                    </span>
                </a>
            </li>
            <li><a href="javascript:void(0);" onclick="$('html,body').animate({scrollTop: '0px'}, 500)" id="gotop" class="gotop TA_delay" style="position: fixed;bottom: 0"><span class="iconfont">&#xe724;</span><span class="tit"><?php echo htmlentities(lang('ds_top')); ?></span></a></li>
        </ul>
        <div class="content-box" id="content-compare">
            <div class="top">
                <h3><?php echo htmlentities(lang('ds_comparison')); ?></h3>
                <a href="javascript:void(0);" class="close iconfont" title="<?php echo htmlentities(lang('ds_hidden')); ?>">&#xe73d;</a></div>
            <div id="comparelist"></div>
        </div>
        <div class="content-box" id="content-cart">
            <div class="top">
                <h3><?php echo htmlentities(lang('ds_my_shopping_cart')); ?></h3>
                <a href="javascript:void(0);" class="close iconfont" title="<?php echo htmlentities(lang('ds_hidden')); ?>">&#xe73d;</a></div>
            <div id="rtoolbar_cartlist"></div>
        </div>
    </div>
</div>
        
<script type="text/javascript">

    //动画显示边条内容区域
    $(function() {
        $(".close").click(function(){
            close_bar();
        });
        // 右侧bar用户信息
        $('div[dstype="a-barUserInfo"]').click(function(){
            $('div[dstype="barUserInfo"]').toggle();
        });
        // 右侧bar登录
        $('div[dstype="a-barLoginBox"]').click(function(){
            login_dialog();
        });

        <?php if($cart_goods_num > 0): ?>
            $('#rtoobar_cart_count').html(<?php echo htmlentities($cart_goods_num); ?>).show();
        <?php endif; ?>
    });
    function toglle_bar(item){
           var member_id = "<?php echo session('member_id'); ?>";
              if(member_id == ''){
                   login_dialog();
                  return;
              }
        //判断侧边栏是否已拉出
        if(parseInt($('.ds-appbar').css('width')) == 36){
            $('.ds-appbar').css('width','306px');
        }
        //判断选中项是否已显示
        if(!$("#"+item).hasClass('active')){
            $('.tools li > a').removeClass('active');
            $("#"+item).addClass('active');
            $('.content-box').removeClass('active');
            
            switch(item){
                case 'rtoolbar_cart':
                    $("#rtoolbar_cartlist").load("<?php echo url('Cart/ajax_load',['type'=>'html']); ?>");
                    $("#content-cart").addClass('active');
                    break;
                case 'compare':   
                    loadCompare(false);
                    $("#content-compare").addClass('active');
                    break;
            }
        }else{
            //关闭
            close_bar();
            $(".chat-list").css("display",'none');
        }
        
    }
    function close_bar(){
        $('.tools li > a').removeClass('active');
        $('.content-box').removeClass('active');
        $('.ds-appbar').css('width','36px');
    }
</script> 

        <link rel="stylesheet" href="<?php echo htmlentities(BASE_SITE_ROOT); ?>/static/home/default/store/styles/default/css/base.css">
        <link rel="stylesheet" href="<?php echo htmlentities(BASE_SITE_ROOT); ?>/static/home/default/store/styles/default/css/shop.css">
        <div class="header">
            <div class="w1200">
                    <div class="logo store_logo_wrap">
                        <a href="<?php echo url('Index/index'); ?>">
                            <img src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logo')); ?>"/>
                        </a>
                        <a class="store_logo" href="<?php echo url('Store/index',['store_id'=>$store_info['store_id']]); ?>">
                            <img src="<?php echo get_store_logo($store_info['store_avatar'],'store_avatar'); ?>" alt="<?php echo htmlentities($store_info['store_name']); ?>" title="<?php echo htmlentities($store_info['store_name']); ?>" />
                        </a>
                        <div class="shop_info">
                            <div class="shop_name"><?php echo htmlentities($store_info['store_name']); ?></div>
                            <div class="shop_main">
                                    <ul >
                                        <?php if(!(empty($store_info['store_credit']) || (($store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator ) && $store_info['store_credit']->isEmpty()))): if(is_array($store_info['store_credit']) || $store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator): if( count($store_info['store_credit'])==0 ) : echo "" ;else: foreach($store_info['store_credit'] as $key=>$value): ?>
                                        <li>
                                            <p><?php echo htmlentities($value['text']); ?></p><span class="credit"><?php echo htmlentities($value['credit']); ?> <?php echo htmlentities(lang('credit_unit')); ?></span>
                                        </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php endif; ?>
                                    </ul>
                            </div>
                            <div class="triangle"><i></i></div>
                            <div class="extra-info clearfix">
                                <div class="left">
                                    <div class="shop-collect">
                                        <div class="shop_logo"> <img src="<?php echo get_store_logo($store_info['store_avatar'],'store_avatar'); ?>" alt="<?php echo htmlentities($store_info['store_name']); ?>" title="<?php echo htmlentities($store_info['store_name']); ?>" /></div>
                                        <a class="collect-btn" href="javascript:collect_store('<?php echo htmlentities($store_info['store_id']); ?>','count','store_collect')" ><?php echo htmlentities(lang('ds_collect')); ?></a>
                                    </div>
                                    <div class="shop-qr-code">
                                        <img src="<?php echo htmlentities(HOME_SITE_URL); ?>/qrcode?url=<?php echo htmlentities(config('ds_config.h5_site_url')); ?>/home/storedetail?id=<?php echo htmlentities($store_info['store_id']); ?>">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="dss-detail-rate">
                                        <h4><?php echo htmlentities(lang('ds_dynamic_evaluation')); ?></h4>
                                        <ul>
                                            <?php if(!(empty($store_info['store_credit']) || (($store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator ) && $store_info['store_credit']->isEmpty()))): if(is_array($store_info['store_credit']) || $store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator): if( count($store_info['store_credit'])==0 ) : echo "" ;else: foreach($store_info['store_credit'] as $key=>$value): ?>
                                            <li> <?php echo htmlentities($value['text']); ?>：<span class="credit"><?php echo htmlentities($value['credit']); ?> <?php echo htmlentities(lang('credit_unit')); ?></span>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="extend ">
                                        <h4><?php echo htmlentities(lang('shop_service')); ?></h4>
                                        <dl class="no-border">
                                            <dt class="fl"><span class="t_adjust"><?php echo htmlentities(lang('seller_name')); ?></span><span>：</span></dt>
                                            <dd class="fl"><?php echo htmlentities($store_info['seller_name']); ?></dd>
                                        </dl>
                                        <dl class="no-border">
                                            <dt class="fl"><span class="t_adjust"><?php echo htmlentities(lang('company_name')); ?></span><span>：</span></dt>
                                            <dd class="fl"><?php echo htmlentities($store_info['store_company_name']); ?></dd>
                                        </dl>
                                        <dl class="no-border">
                                            <dt class="fl"><span class="t_adjust"><?php echo htmlentities(lang('ds_srore_location')); ?></span><span>：</span></dt>
                                            <dd class="fl"><?php echo htmlentities($store_info['area_info']); ?></dd>
                                        </dl>
                                        <?php if(!(empty($store_info['store_phone']) || (($store_info['store_phone'] instanceof \think\Collection || $store_info['store_phone'] instanceof \think\Paginator ) && $store_info['store_phone']->isEmpty()))): ?>
                                        <dl class="no-border">
                                            <dt class="fl"><span class="t_adjust"><?php echo htmlentities(lang('phone_space')); ?></span><span>：</span></dt>
                                            <dd class="fl"><?php echo htmlentities($store_info['store_phone']); ?></dd>
                                        </dl>
                                        <?php endif; ?>
                                        <dl>
                                            <dt class="fl"><span class="t_adjust"><?php echo htmlentities(lang('business_licence_number_electronic')); ?></span><span>：</span></dt>
                                            <dd class="fl">
                                                <?php if(!$store_info['is_platform_store']): if($store_info['business_licence_number_electronic']): ?>
                                                <a href="<?php echo htmlentities($store_info['business_licence_number_electronic']); ?>" ><?php echo htmlentities(lang('ds_view')); ?></a>
                                                <?php endif; else: if(config('ds_config.business_licence')): ?>
                                                <a href="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.business_licence')); ?>" ><?php echo htmlentities(lang('ds_view')); ?></a>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </dd>
                                        </dl>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="search" class="head-search-bar">
                        <form class="search-form" id="store_search_form" method="get" action="<?php echo url('Store/goods_all'); ?>">
                            <input type="hidden" value="<?php echo htmlentities(app('request')->param('store_id')); ?>" name="store_id">
                            <input placeholder="<?php echo htmlentities(lang('search_merchandise_keywords')); ?>" name="inkeyword" id="keyword" type="text" class="input-text" value="<?php echo htmlentities(app('request')->param('inkeyword')); ?>" maxlength="60" />
                            <a href="javascript:$('#store_search_form').submit()" class="input-submit shop"><?php echo htmlentities(lang('search_shop')); ?></a>
                            <a href="javascript:void(0)" class="input-submit all"><?php echo htmlentities(lang('search_all')); ?></a>
                        </form>
                    </div>
            </div>
        </div>
        <div class="banner" style="background-image: url(<?php if($store_info['store_banner']): ?><?php echo get_store_logo($store_info['store_banner'],'store_banner'); else: ?><?php echo htmlentities(BASE_SITE_ROOT); ?>/static/home/default/store/styles/default/images/header.jpg<?php endif; ?>)">
            <div class="w1200"></div>
        </div>
        <div class="dss-nav">
            <div class="w1200">
                <ul>
                    <li><a href="<?php echo url('Store/index',['store_id'=>$store_info['store_id']]); ?>"><span><?php echo htmlentities(lang('ds_store_index')); ?><i></i></span></a></li>
                    <li><a href="<?php echo url('Store/goods_all',['store_id'=>$store_info['store_id']]); ?>"><span><?php echo htmlentities(lang('ds_whole_goods')); ?><i></i></span></a></li>
                    <li><a href="<?php echo url('Storesnshome/index',['sid'=>$store_info['store_id']]); ?>"><span><?php echo htmlentities(lang('ds_store_the_dynamic')); ?><i></i></span></a></li>
                    <?php if(!(empty($store_navigation_list) || (($store_navigation_list instanceof \think\Collection || $store_navigation_list instanceof \think\Paginator ) && $store_navigation_list->isEmpty()))): if(is_array($store_navigation_list) || $store_navigation_list instanceof \think\Collection || $store_navigation_list instanceof \think\Paginator): if( count($store_navigation_list)==0 ) : echo "" ;else: foreach($store_navigation_list as $key=>$value): if($value['storenav_url'] != ''): ?>
                    <li class=""><a href="<?php echo htmlentities($value['storenav_url']); ?>"><span><?php echo htmlentities($value['storenav_title']); ?><i></i></span></a></li>
                    <?php else: ?>
                    <li class=""><a href="<?php echo url('Store/article',['store_id'=>$store_info['store_id'],'storenav_id'=>$value['storenav_id']]); ?>"><span><?php echo htmlentities($value['storenav_title']); ?><i></i></span></a></li>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        

        
        <!--面包屑导航 BEGIN-->
        <?php if(!(empty($nav_link_list) || (($nav_link_list instanceof \think\Collection || $nav_link_list instanceof \think\Paginator ) && $nav_link_list->isEmpty()))): ?>
        <div class="dsh-breadcrumb-layout">
            <div class="dsh-breadcrumb w1200"><i class="iconfont">&#xe6ff;</i>
                <?php foreach($nav_link_list as $nav_link): if(empty($nav_link['link']) || (($nav_link['link'] instanceof \think\Collection || $nav_link['link'] instanceof \think\Paginator ) && $nav_link['link']->isEmpty())): ?>
                <span><?php echo htmlentities($nav_link['title']); ?></span>
                <?php else: ?>
                <span><a href="<?php echo htmlentities($nav_link['link']); ?>"><?php echo htmlentities($nav_link['title']); ?></a></span><span class="arrow">></span>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <!--面包屑导航 END-->
        <script>
            $(".head-search-bar .all").click(function(){
                var url = HOMESITEURL+"/Search/index";
                $("#store_search_form").attr('action',url);
                $("#store_search_form").submit();
            })
        </script>

        






<?php if(!isset($editable_page)): ?>
<div class="w1200 mt20">
    <div class="ds_side">
        <div class="dss-info">
    <div class="title">
        <h4><?php if($store_info['is_platform_store']): ?><em><?php echo htmlentities(lang('platform_store')); ?></em><?php else: ?><img src="<?php echo htmlentities(HOME_SITE_ROOT); ?>/images/store_grade/<?php echo htmlentities($store_info['grade_id']); ?>.png" class="pngFix"><?php endif; ?>&nbsp;<a href="<?php echo url('Store/index',['store_id'=>$store_info['store_id']]); ?>" ><?php echo htmlentities($store_info['store_name']); ?></a>
        <span member_id="<?php echo htmlentities($store_info['member_id']); ?>"></span>
        <?php if(isset($store_info['member_id']) || !empty($store_info['store_qq']) || !empty($store_info['store_ww'])): if(!(empty($store_info['store_qq']) || (($store_info['store_qq'] instanceof \think\Collection || $store_info['store_qq'] instanceof \think\Paginator ) && $store_info['store_qq']->isEmpty()))): ?>
                <a  href="<?php echo htmlentities(HTTP_TYPE); ?>wpa.qq.com/msgrd?v=3&uin=<?php echo htmlentities($store_info['store_qq']); ?>&site=qq&menu=yes" title="QQ: <?php echo htmlentities($store_info['store_qq']); ?>"><img border="0" src="<?php echo htmlentities(HTTP_TYPE); ?>wpa.qq.com/pa?p=2:<?php echo htmlentities($store_info['store_qq']); ?>:52" style=" vertical-align: middle;"/></a>
                <?php endif; if(!(empty($store_info['store_ww']) || (($store_info['store_ww'] instanceof \think\Collection || $store_info['store_ww'] instanceof \think\Paginator ) && $store_info['store_ww']->isEmpty()))): ?>
                <a  href="http://amos.im.alisoft.com/msg.aw?v=2&amp;uid=<?php echo htmlentities($store_info['store_ww']); ?>&site=cntaobao&s=1" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo htmlentities($store_info['store_ww']); ?>&site=cntaobao&s=2" alt="<?php echo htmlentities(lang('ds_message_me')); ?>" style=" vertical-align: middle;"/></a>
                <?php endif; ?>
        <?php endif; ?>        
        </h4>
    </div>
    <div class="content">
        <dl class="all-rate">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('comprehensive_score')); ?></span><span>：</span></dt>
            <dd>
                <div class="rating"><span style="width: <?php echo htmlentities($store_info['store_credit_percent']); ?>%"></span></div>
                <em><?php echo htmlentities($store_info['store_credit_average']); ?></em><?php echo htmlentities(lang('credit_unit')); ?></dd>
        </dl>
        <div class="dss-detail-rate">
            <h5><?php echo htmlentities(lang('ds_dynamic_evaluation')); ?>：</h5>
            <ul>
                <?php if(!(empty($store_info['store_credit']) || (($store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator ) && $store_info['store_credit']->isEmpty()))): if(is_array($store_info['store_credit']) || $store_info['store_credit'] instanceof \think\Collection || $store_info['store_credit'] instanceof \think\Paginator): if( count($store_info['store_credit'])==0 ) : echo "" ;else: foreach($store_info['store_credit'] as $key=>$value): ?>
                <li> <?php echo htmlentities($value['text']); ?><span class="credit"><?php echo htmlentities($value['credit']); ?> <?php echo htmlentities(lang('credit_unit')); ?></span>
                    <?php if(isset($value['percent_class'])): ?>
                    <span class="<?php echo htmlentities($value['percent_class']); ?>"><i></i><?php echo htmlentities($value['percent_text']); ?><em><?php echo htmlentities($value['percent']); ?></em></span> </li>
                <?php endif; ?>
               <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </ul>
        </div>
        
        <!--只有实名认证实体店认证后才显示保障体系-->
          <?php if($store_info['store_baozh']): ?>
        <dl class="messenger">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('merchant_guarantee')); ?></span><span>：</span></dt>
            <dd>
                <!--新加的保障-->
                <?php if($store_info['store_shiti']): ?>
                <span id="certMatershiti" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('physical_certification')); ?>"></span>
                <?php endif; if($store_info['store_qtian']): ?>
                <span id="certMaterqtian" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('physical_filming')); ?>"></span>
                <?php endif; if($store_info['store_zhping']): ?>
                <span id="certMaterzhping" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('genuine_protection')); ?>"></span>
                <?php endif; if($store_info['store_erxiaoshi']): ?>
                <span id="certMatererxiaoshi" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('delivery_within_hours')); ?>"></span>
                <?php endif; if($store_info['store_tuihuo']): ?>
                <span id="certMatertuihuo" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('return_commitment')); ?>"></span>
                <?php endif; if($store_info['store_shiyong']): ?>
                <span id="certMatershiyong" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('trial_center')); ?>"></span>
                <?php endif; if($store_info['store_xiaoxie']): ?>
                <span id="certMaterxiaoxie" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('consumer_protection')); ?>"></span>
                <?php endif; if($store_info['store_huodaofk']): ?>
                <span id="certMaterhuodaofk" class="text-hidden fl ml5" title="<?php echo htmlentities(lang('support_cash_delivery')); ?>"></span>
                <?php endif; ?>
                <!--新加的保障-->
            </dd>
        </dl>
        <?php endif; ?>
        <!--保证金金额-->
        <?php if($store_info['store_avaliable_deposit'] > 0): ?>
        <dl class="messenger">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('guaranteed_amount')); ?></span><span>：</span></dt>
            <dd style="width: 100px;"><?php echo htmlentities($store_info['store_avaliable_deposit']); ?>
            </dd>
        </dl>
       <?php endif; ?>

        <dl class="no-border">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('company_name')); ?></span><span>：</span></dt>
            <dd><?php echo htmlentities($store_info['store_company_name']); ?></dd>
        </dl>
        <dl class="no-border">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('ds_srore_location')); ?></span><span>：</span></dt>
            <dd><?php echo htmlentities($store_info['area_info']); ?></dd>
        </dl>
        <?php if(!(empty($store_info['store_phone']) || (($store_info['store_phone'] instanceof \think\Collection || $store_info['store_phone'] instanceof \think\Paginator ) && $store_info['store_phone']->isEmpty()))): ?>
        <dl class="no-border">
            <dt><span class="t_adjust"><?php echo htmlentities(lang('phone_space')); ?></span><span>：</span></dt>
            <dd><?php echo htmlentities($store_info['store_phone']); ?></dd>
        </dl>
        <?php endif; ?>
        <dl>
            <dt><span class="t_adjust"><?php echo htmlentities(lang('business_licence_number_electronic')); ?></span><span>：</span></dt>
            <dd>
                <?php if(!$store_info['is_platform_store']): if($store_info['business_licence_number_electronic']): ?>
                <a href="<?php echo htmlentities($store_info['business_licence_number_electronic']); ?>" ><?php echo htmlentities(lang('ds_view')); ?></a>
                <?php endif; else: if(config('ds_config.business_licence')): ?>
                <a href="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.business_licence')); ?>" ><?php echo htmlentities(lang('ds_view')); ?></a>
                <?php endif; ?>
                <?php endif; ?>
            </dd>
        </dl>
        <div class="shop-other" id="shop-other">
            <div class="goto">
                <a href="javascript:collect_store('<?php echo htmlentities($store_info['store_id']); ?>','count','store_collect')" ><i class="iconfont">&#xe6e4;</i><?php echo htmlentities(lang('ds_collect')); ?></a>
                <a href="<?php echo url('Storesnshome/index',['sid'=>$store_info['store_id']]); ?>" ><i class="iconfont">&#xe635;</i><?php echo htmlentities(lang('ds_dynamics')); ?></a>
            </div>
            <div class="shop_btn">
                <?php if($store_info['store_longitude'] != ""): ?>
                <div class="dss-info-btn-map iconfont">&#xe720;
                    <div class="dss-info-map" id="map_container" style="width:208px;height:208px;"></div>
                </div>
                <?php endif; ?>
                <div class="dss-info-btn-qrcode iconfont" >&#xe72d;
                    <div class="dss-info-qrcode"><img src="<?php echo store_qrcode($store_info['store_id']); ?>" title="<?php echo htmlentities(lang('shop_primitive')); ?><?php echo url('Store/goods_all',['store_id'=>$store_info['store_id']]); ?>" style="width:208px;height:208px"></div>
                </div>
                
                
            </div>
            
        </div>
    </div>
</div>
<!--店铺基本信息 E-->
<script type="text/javascript">
    var BASESITEROOT = "<?php echo htmlentities(BASE_SITE_ROOT); ?>";
    var BASESITEURL = "<?php echo htmlentities(BASE_SITE_URL); ?>";
    var HOMESITEURL = "<?php echo htmlentities(HOME_SITE_URL); ?>";
    var cityName = "<?php echo htmlentities($store_info['store_address']); ?>";
    var address = "<?php echo htmlentities($store_info['area_info']); ?>";
    var store_name = "<?php echo htmlentities($store_info['store_company_name']); ?>";
    var store_longitude = "<?php echo htmlentities($store_info['store_longitude']); ?>";
    var store_latitude = "<?php echo htmlentities($store_info['store_latitude']); ?>"
    function initialize() {
        var map = new BMap.Map("map_container");          // 创建地图实例
        if(store_longitude != "" && store_latitude != ""){
                    var point = new BMap.Point(store_longitude,store_latitude);  // 创建点坐标
                    map.centerAndZoom(point, 15);
                    map.enableScrollWheelZoom(true);
                    map.clearOverlays(); 
                    var new_point = new BMap.Point(store_longitude,store_latitude);
                    var marker = new BMap.Marker(new_point);
                    map.addOverlay(marker);
                    map.panTo(new_point);
		}
    }
    function loadScript() {
        var script = document.createElement("script");
        script.src = "<?php echo htmlentities(HTTP_TYPE); ?>api.map.baidu.com/api?v=2.0&callback=initialize";
        document.body.appendChild(script);
    }

    // 当鼠标放在店铺地图上再加载百度地图。
    $(function(){
        $('.dss-info-btn-map').one('mouseover',function(){
            loadScript();
        });
        $('.dss-info-btn-map').one('click',function(){
            loadScript();
        });
    });
</script>

<script>
    $(function(){
        var store_id = "<?php echo htmlentities($store_info['store_id']); ?>";
        var goods_id = "<?php echo htmlentities(app('request')->param('goods_id')); ?>";
        var controller = "<?php echo htmlentities(app('request')->controller()); ?>";
        var action  = "<?php echo app('request')->action()?app('request')->action() : 'index'; ?>";
        $.getJSON("<?php echo url('Store/ajax_flowstat_record'); ?>",{store_id:store_id,goods_id:goods_id,controller_param:controller,action_param:action});
    });
</script>
        <div class="common_module dss-search">
            <div class="common_title">
                <h2><?php echo htmlentities(lang('ds_goods_class')); ?></h2>
            </div>
            <ul class="dss-submenu">
      <li><span class="ico-none"></span><a href="<?php echo url('Store/goods_all',['store_id'=>$store_info['store_id']]); ?>"><?php echo htmlentities(lang('ds_whole_goods')); ?></a></li>
      <?php if(!(empty($goods_class_list) || (($goods_class_list instanceof \think\Collection || $goods_class_list instanceof \think\Paginator ) && $goods_class_list->isEmpty()))): if(is_array($goods_class_list) || $goods_class_list instanceof \think\Collection || $goods_class_list instanceof \think\Paginator): if( count($goods_class_list)==0 ) : echo "" ;else: foreach($goods_class_list as $key=>$value): if(!(empty($value['children']) || (($value['children'] instanceof \think\Collection || $value['children'] instanceof \think\Paginator ) && $value['children']->isEmpty()))): ?>
      <li><span class="ico-none" onclick="class_list(this);" span_id="<?php echo htmlentities($value['storegc_id']); ?>" style="cursor: pointer;"></span><a href="<?php echo url('Store/goods_all',['store_id'=>$store_info['store_id'],'storegc_id'=>$value['storegc_id']]); ?>"><?php echo htmlentities($value['storegc_name']); ?></a>
        <ul id="stc_<?php echo htmlentities($value['storegc_id']); ?>" class="class_child">
          <?php if(is_array($value['children']) || $value['children'] instanceof \think\Collection || $value['children'] instanceof \think\Paginator): if( count($value['children'])==0 ) : echo "" ;else: foreach($value['children'] as $key=>$value1): ?>
          <li><a href="<?php echo url('Store/goods_all',['store_id'=>$store_info['store_id'],'storegc_id'=>$value1['storegc_id']]); ?>"><?php echo htmlentities($value1['storegc_name']); ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
      <?php else: ?>
      <li> <span class="ico-none"></span><a href="<?php echo url('Store/goods_all',['store_id'=>$store_info['store_id'],'storegc_id'=>$value['storegc_id']]); ?>"><?php echo htmlentities($value['storegc_name']); ?></a></li>
      <?php endif; ?>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <?php endif; ?>
    </ul>
        </div>
        <div class="common_module">
            <div class="common_title">
                <h2><?php echo htmlentities(lang('commodity_ranking')); ?></h2>
            </div>
            <div class="common_content">
                <ul>
                    <?php if(is_array($hot_sales) || $hot_sales instanceof \think\Collection || $hot_sales instanceof \think\Paginator): if( count($hot_sales)==0 ) : echo "" ;else: foreach($hot_sales as $key=>$val): ?>
                    <li>
                        <div class="p_img">
                            <a href="<?php echo url('Goods/index',['goods_id'=>$val['goods_id']]); ?>"><img src="<?php echo goods_thumb($val, 240); ?>" width="85" height="85"></a>
                        </div>
                        <div class="p_num <?php if($key < 3): ?>active<?php endif; ?>"><?php echo $key+1; ?></div>
                        <div class="p_info">
                            <div class="p_name">
                                <a href="<?php echo url('Goods/index',['goods_id'=>$val['goods_id']]); ?>"><?php echo htmlentities($val['goods_name']); ?></a>
                            </div>
                            <div class="p_price"><?php echo htmlentities(lang('currency')); ?><em><?php echo htmlentities($val['goods_promotion_price']); ?></em></div>
                            <div class="p_sales"><?php echo htmlentities(lang('ds_sell_out')); ?><strong><?php echo htmlentities($val['goods_salenum']); ?></strong><?php echo htmlentities(lang('ds_bi')); ?></div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="common_module">
            <div class="common_title">
                <h2><?php echo htmlentities(lang('merchandise_collection')); ?></h2>
            </div>
            <div class="common_content">
                <ul>
                    <?php if(is_array($hot_collect) || $hot_collect instanceof \think\Collection || $hot_collect instanceof \think\Paginator): if( count($hot_collect)==0 ) : echo "" ;else: foreach($hot_collect as $key=>$val): ?>
                    <li>
                        <div class="p_img">
                            <a href="<?php echo url('Goods/index',['goods_id'=>$val['goods_id']]); ?>"><img src="<?php echo goods_thumb($val, 240); ?>" width="85" height="85"></a>
                        </div>
                        <div class="p_num <?php if($key < 3): ?>active<?php endif; ?>"><?php echo $key+1; ?></div>
                        <div class="p_info">
                            <div class="p_name">
                                <a href="<?php echo url('Goods/index',['goods_id'=>$val['goods_id']]); ?>"><?php echo htmlentities($val['goods_name']); ?></a>
                            </div>
                            <div class="p_price"><?php echo htmlentities(lang('currency')); ?><em><?php echo htmlentities($val['goods_promotion_price']); ?></em></div>
                            <div class="p_sales"><?php echo htmlentities(lang('ds_collection_popularity')); ?><?php echo htmlentities(lang('ds_colon')); ?><strong><?php echo htmlentities($val['goods_collect']); ?></strong></div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        
    </div>
    
    
    <div class="ds_main">
        <?php if(!(empty($store_slide) || (($store_slide instanceof \think\Collection || $store_slide instanceof \think\Paginator ) && $store_slide->isEmpty()))): ?>
        <div class="storeslider">
            <ul class="slides">
                <?php $__FOR_START_1890454670__=0;$__FOR_END_1890454670__=5;for($i=$__FOR_START_1890454670__;$i < $__FOR_END_1890454670__;$i+=1){ if(!(empty($store_slide[$i]) || (($store_slide[$i] instanceof \think\Collection || $store_slide[$i] instanceof \think\Paginator ) && $store_slide[$i]->isEmpty()))): ?>
                <li><a href="<?php echo htmlentities($store_slide_url[$i]); ?>"><img src="<?php echo ds_get_pic(ATTACH_SLIDE,$store_slide[$i]); ?>" width="940" height="400"></a></li>
                <?php endif; } ?>
            </ul>
            <a class="ctrl prev" href="javascript:void(0)">&lt;</a>
            <a class="ctrl next" href="javascript:void(0)">&gt;</a>
        </div>
        <?php endif; ?>
        <div class="recommend-goods">
            
            <div class="dss-grid-list">
                <?php if(!(empty($recommended_goods_list) || (($recommended_goods_list instanceof \think\Collection || $recommended_goods_list instanceof \think\Paginator ) && $recommended_goods_list->isEmpty()))): ?>
                <ul>
                    <?php if(is_array($recommended_goods_list) || $recommended_goods_list instanceof \think\Collection || $recommended_goods_list instanceof \think\Paginator): if( count($recommended_goods_list)==0 ) : echo "" ;else: foreach($recommended_goods_list as $key=>$value): ?>
                    <li class="grid-items">
                        <a class="thumb" href="<?php echo url('Goods/index',['goods_id'=>$value['goods_id']]); ?>" >
                            <p class="grid-img">
                                <img alt="<?php echo htmlentities($value['goods_name']); ?>" src="<?php echo goods_thumb($value, 240); ?>">
                            </p>
                            <div class="grid-title"><?php echo htmlentities($value['goods_name']); ?></div>
                            <p class="grid-desc"><?php echo htmlentities($value['goods_advword']); ?></p>
                            <p class="grid-price"><?php echo htmlentities(lang('currency')); ?><?php echo htmlentities($value['goods_promotion_price']); ?></p>
                            <p class="grid-tips">
                                <em class="thumb"><span><?php echo htmlentities(lang('show_store_index_recommend')); ?></span></em>
                            </p>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear"></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="new-goods">
            <div class="dss-grid-list">
                <?php if(!(empty($new_goods_list) || (($new_goods_list instanceof \think\Collection || $new_goods_list instanceof \think\Paginator ) && $new_goods_list->isEmpty()))): ?>
                <ul>
                    <?php if(is_array($new_goods_list) || $new_goods_list instanceof \think\Collection || $new_goods_list instanceof \think\Paginator): if( count($new_goods_list)==0 ) : echo "" ;else: foreach($new_goods_list as $key=>$value): ?>
                    <li class="grid-items">
                        <a class="thumb" href="<?php echo url('Goods/index',['goods_id'=>$value['goods_id']]); ?>" >
                            <p class="grid-img">
                                <img alt="<?php echo htmlentities($value['goods_name']); ?>" src="<?php echo goods_thumb($value, 240); ?>">
                            </p>
                            <div class="grid-title"><?php echo htmlentities($value['goods_name']); ?></div>
                            <p class="grid-desc"><?php echo htmlentities($value['goods_advword']); ?></p>
                            <p class="grid-price"><?php echo htmlentities(lang('currency')); ?><?php echo htmlentities($value['goods_promotion_price']); ?></p>
                            <p class="grid-tips">
                                <em class="thumb"><span><?php echo htmlentities(lang('show_store_index_new_goods')); ?></span></em>
                            </p>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.SuperSlide.2.1.1.js"></script>
<script>
    jQuery(".storeslider").slide({mainCell: ".slides ", autoPlay: true, delayTime: 3000});
</script>

<?php else: ?>
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.SuperSlide.2.1.1.js"></script>
<script>
    var EDITABLE_PAGE_URL='<?php echo htmlentities(HOME_SITE_URL); ?>/seller_editable_page'
</script>
<link rel="stylesheet" href="<?php echo htmlentities(HOME_SITE_ROOT); ?>/css/editable_page.css">
<?php if($editable_page['if_edit']): ?>
<link rel="stylesheet" href="<?php echo htmlentities(ADMIN_SITE_ROOT); ?>/css/admin.css">
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.ajaxContent.pack.js"></script>
<script type="text/javascript" src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/ajaxfileupload.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/mlselection.js" charset="utf-8"></script>

<div class="model-wrapper active">
    <div class="model-title"><span class="title"><?php echo htmlentities(lang('model_list')); ?></span><span class="desc"><?php echo htmlentities(lang('model_list_tips')); ?></span></div>
    <div class="model-list"><div id="model_list"></div></div>
    <div class="model-btn"><span style="display: none" id="current_model_page">1</span><span style="display: none" id="total_model_page">1</span><a href="javascript:void(0)" id="model_page_prev" class="iconfont disable">&#xe738;</a><a href="javascript:void(0)" id="model_page_next" class="iconfont">&#xe73a;</a></div>
</div>
<style>
    .model-wrapper{position: fixed;top:80px;left:-180px;z-index: 100000;width:227px;background: #fff}
    .model-wrapper.active{left:0;}
    .model-wrapper .model-title{cursor: move}
</style>
<script>
    function modelShow(obj){
        if($('.model-wrapper').hasClass('active')){
            $('.model-wrapper').removeClass('active')
            obj.text('展开')
        }else{
            $('.model-wrapper').addClass('active')
            obj.text('收起')
        }
    }
    window.UEDITOR_HOME_URL='<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/ueditor/'
    $(function(){
        $('.model-wrapper').draggable({ handle: ".model-title" })
        $.ajax({ url:EDITABLE_PAGE_URL+'/model_add?editable_page_id=<?php echo htmlentities($editable_page['editable_page_id']); ?>',success: function(res){
        $('#model_list').html(res)
        if($('.model-item-list .model-item-wrapper').length<=4){
            $('#model_page_next').addClass('disable')
        }
        var total=$('.model-item-wrapper').length;
       if(total){
            $('#total_model_page').text(Math.ceil(total/4))
       }
        show_page(4,1)
        $('#model_page_prev').click(function(){
            var current_model_page=parseInt($('#current_model_page').text());
            var total_model_page=parseInt($('#total_model_page').text());
            if(current_model_page>1){
                show_page(4,current_model_page-1)
            }
            if((current_model_page-1)<=1){
                $('#model_page_prev').addClass('disable')
            }else{
                $('#model_page_prev').removeClass('disable')
            }
            if((current_model_page-1)<total_model_page){
                $('#model_page_next').removeClass('disable')
            }
        })
        $('#model_page_next').click(function(){
            var current_model_page=parseInt($('#current_model_page').text());
            var total_model_page=parseInt($('#total_model_page').text());
            if(current_model_page<total_model_page){
                show_page(4,current_model_page+1)
            }
            if((current_model_page+1)>=total_model_page){
                $('#model_page_next').addClass('disable')
            }else{
                $('#model_page_next').removeClass('disable')
            }
            if((current_model_page+1)>1){
                $('#model_page_prev').removeClass('disable')
            }
        })
    }})
        $('a').attr('href','javascript:void(0)')
        $('a').removeAttr('target')
        addDialogEvent()
        var model_index
        $('.edit-mode').sortable({
            placeholder: "ui-state-highlight",
            cursor: "move",
            items:".editable-page-model",
            revert: true,
            start: function( event, ui ) {
              model_index=ui.item.index()
            },
            update: function( event, ui ) {
              var action=ui.item.attr('data-action')
              if(action=='add'){
                  var model_id=ui.item.attr('data-id')  
                  var config_id=ui.item.prev().attr('data-id')
                  if(!config_id){
                      config_id=0
                  }
                  ui.item.remove()
                  submit_model_add(model_id,config_id)
              }else{
              var config_id=ui.item.attr('data-id')  
              var index=ui.item.index()  
              if((index-model_index)>0){
                  var o_config_id=ui.item.prev().attr('data-id')
                  sortModel(config_id,1,o_config_id)
              }else{
                  var o_config_id=ui.item.next().attr('data-id')
                  sortModel(config_id,0,o_config_id)
              }
              
              
            }
            }
          });


    })
    
    function sortModel(config_id,direction,o_config_id){
        var index = layer.load()
        $.getJSON(EDITABLE_PAGE_URL+'/model_sort?config_id='+config_id+'&o_config_id='+o_config_id+'&direction='+direction,function(res){
                layer.close(index);
                if(res.code!=10000){
                    layer.msg(res.message)
                }
            })
    }

    function moveModel(config_id,direction){
        var obj = $('.editable-page-model[data-id='+config_id+']');
        var o_config_id
        if(direction){
            o_config_id=obj.next().attr('data-id')
            obj.next().after(obj); //下移动
        }else{
            o_config_id=obj.prev().attr('data-id')
            obj.prev().before(obj);
        }
        sortModel(config_id,direction,o_config_id)
        }
    function dropModel(config_id){
        var index = layer.confirm('<?php echo htmlentities(lang('ds_ensure_del')); ?>', {
            title: false,
        }, function () {
            $.getJSON(EDITABLE_PAGE_URL+'/model_del?config_id='+config_id+'&editable_page_id=<?php echo htmlentities($editable_page['editable_page_id']); ?>',function(res){
                if(res.code!=10000){
                    layer.msg(res.message)
                }else{
                    $('.editable-page-model[data-id='+config_id+']').remove();
                    layer.close(index)
                    if($('.edit-mode .editable-page-model').length==0){
                        var html=    '<div class="no_results">';
                            html+=            '<span><?php echo htmlentities(lang('add_model_notice')); ?></span>';
                            html+=            "<div class='editable-page-model mt10'>";
                            html+=            '</div>';
                            html+=        '</div>';
                            $('*[data-type=editable_page]').append(html);
                            addDialogEvent()
                    }
                }
            })
        });
        
    }
    function addDialogEvent(){

        $('*[data-type="editable_model"]').each(function(){
            var config_id=$(this).attr('data-id')
            //var model_width=$(this).attr('data-width')
            var content_obj=$(this).find('.editable-page-content')
            content_obj.prepend('<div class="editable_model_handle_list"><a href="javascript:void(0)" class="handle_edit"><?php echo htmlentities(lang('ds_edit')); ?></a><a href="javascript:moveModel('+config_id+',0)" class="handle_move_up"><?php echo htmlentities(lang('ds_move_up')); ?></a><a href="javascript:moveModel('+config_id+',1)" class="handle_move_down"><?php echo htmlentities(lang('ds_move_down')); ?></a><a href="javascript:dropModel('+config_id+')" class="handle_drop"><?php echo htmlentities(lang('ds_delete')); ?></a></div>')
            content_obj.find('.handle_edit').attr('ds_type','dialog').attr('dialog_id','editable_model').attr('dialog_title','<?php echo htmlentities(lang('ds_edit')); ?>').attr('dialog_width',400)
            content_obj.find('.handle_edit').attr('uri',EDITABLE_PAGE_URL+'/model_edit?config_id='+config_id)
            
            
            content_obj.find('*[data-type]').each(function(){
                var model_type_list=$(this).attr('data-type')
                model_type_list=model_type_list.split(',')
                var item_id_list=$(this).attr('data-id')
                item_id_list=item_id_list.split(',')
                $(this).prepend('<div class="editable-page-handle"></div>')
                var obj=$(this).find('.editable-page-handle')
                for(var j in item_id_list){
                var item_id=item_id_list[j]
                for(var i in model_type_list){
                var model_type=model_type_list[i]
                var model_width=400
                var title
                switch(model_type){
                  case 'brand':
                    title='品牌'
                    model_width=800
                    break
                  case 'cate':
                    title='分类'
                    break
                  case 'voucher':
                    title='代金券'
                    break  
                  case 'text':
                    title='文字'
                    break 
                  case 'link':
                    title='链接'
                    break  
                  case 'goods':
                    title='商品'
                    model_width=800
                    break
                  case 'store':
                    title='店铺'
                    model_width=800
                    break
                  case 'editor':
                    title='富文本'
                    model_width=800
                    break
                  case 'image':
                    title='图片'
                    model_width=420
                    break
                }
                  obj.append('<div class="handel-'+model_type+'" data-id="'+item_id+'">'+title+'</div>');
                  obj.find('.handel-'+model_type+'[data-id='+item_id+']').attr('ds_type','dialog').attr('dialog_id','editable_model').attr('dialog_title','设置'+title).attr('dialog_width',model_width)
                  obj.find('.handel-'+model_type+'[data-id='+item_id+']').attr('uri',EDITABLE_PAGE_URL+'/model_'+model_type+'?config_id='+config_id+'&item_id='+item_id)
                }
                }
            })
            $(this).removeAttr('data-type')
        })
        
        
        $('*[ds_type="dialog"]').click(function(){
            var id = $(this).attr('dialog_id');
            var title = $(this).attr('dialog_title') ? $(this).attr('dialog_title') : '';
            var url = $(this).attr('uri');
            var width = $(this).attr('dialog_width');
            CUR_DIALOG = ajax_form(id, title, url, width,0);
            return false;
        });
    }
    function addEditableModel(model_id,config_id){
        var index=layer.load()
        $.getJSON(EDITABLE_PAGE_URL+'/model_add?editable_page_id=<?php echo htmlentities($editable_page['editable_page_id']); ?>&model_id='+model_id+'&config_id='+config_id,function(res){
            layer.close(index)
            if(res.code!=10000){
                layer.msg(res.message)
            }else{
                $('.dialog_close_button').click()
                if(!config_id || $('.editable-page-model[data-id='+config_id+']').length==0){
                    $('*[data-type="editable_page"] .no_results').remove()
                    $('*[data-type="editable_page"]').prepend(res.result.model_html)
                }else{
                    $('.editable-page-model[data-id='+config_id+']').after(res.result.model_html)
                }
                
                addDialogEvent()
                initSlide()
            }
        })
    }


function submitEditableModelForm(){
    var _form = $("#editable_model_form");
    $.ajax({
        type: "POST",
        url: _form.attr('action'),
        data: _form.serialize(),
        dataType:"json",
        success: function (res) {
                if (res.code == 10000) {
                    $('.dialog_close_button').click()
                    $('.editable-page-model[data-id='+res.result.config_id+']').replaceWith(res.result.model_html)
                    addDialogEvent()
                    initSlide()
                }else{
                    layer.msg(res.message)
                }
        }
    });
}
</script>
<?php endif; ?>

<div data-type="editable_page" <?php if($editable_page['if_edit']): ?>class="edit-mode"<?php endif; ?> style="background-color:<?php echo htmlentities((isset($editable_page['editable_page_theme_config']['back_color']) && ($editable_page['editable_page_theme_config']['back_color'] !== '')?$editable_page['editable_page_theme_config']['back_color']:'unset')); ?>">
    <?php if(!(empty($editable_page_config_list) || (($editable_page_config_list instanceof \think\Collection || $editable_page_config_list instanceof \think\Paginator ) && $editable_page_config_list->isEmpty()))): if(is_array($editable_page_config_list) || $editable_page_config_list instanceof \think\Collection || $editable_page_config_list instanceof \think\Paginator): if( count($editable_page_config_list)==0 ) : echo "" ;else: foreach($editable_page_config_list as $key=>$page_config): switch($page_config['editable_page_model_id']): case "1": ?><div class="editable-page-model editable-page-model-1" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
  <div class="editable-page-content" style="width:<?php echo htmlentities($page_config['editable_page_config_content']['width']); ?>;height:<?php echo htmlentities($page_config['editable_page_config_content']['height']); ?>;padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
    <div class="content-wrapper" data-type="image,link" data-id="0">
    <div class="bd">
        <ul>
            <?php $__FOR_START_1418144747__=0;$__FOR_END_1418144747__=$page_config['editable_page_config_content']['image'][0]['count'];for($i=$__FOR_START_1418144747__;$i < $__FOR_END_1418144747__;$i+=1){ ?>
            <li style="background-image: url(<?php if(isset($page_config['editable_page_config_content']['image'][0]['list'][$i])): ?><?php echo htmlentities($page_config['editable_page_config_content']['image'][0]['list'][$i]['path']); else: ?><?php echo goods_thumb(); ?><?php endif; ?>" >
                <a href="<?php if(isset($page_config['editable_page_config_content']['link'][0]['list'][$i])): ?><?php echo htmlentities($page_config['editable_page_config_content']['link'][0]['list'][$i]['content']); ?><?php endif; ?>">&nbsp;</a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php if($page_config['editable_page_config_content']['image'][0]['count']>1): ?>
    <div class="hd">
        <ul>
            <?php $__FOR_START_205491782__=0;$__FOR_END_205491782__=$page_config['editable_page_config_content']['image'][0]['count'];for($i=$__FOR_START_205491782__;$i < $__FOR_END_205491782__;$i+=1){ ?>
            <li class=""></li>
            <?php } ?>
        </ul>
    </div>
    <a class="ctrl prev" href="javascript:void(0)">&lt;</a>
    <a class="ctrl next" href="javascript:void(0)">&gt;</a>
    <?php endif; ?>
  </div>
  </div>  
</div>


<?php break; case "2": ?><div class="editable-page-model editable-page-model-2" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="width:<?php echo htmlentities($page_config['editable_page_config_content']['width']); ?>;height:<?php echo htmlentities($page_config['editable_page_config_content']['height']); ?>;padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;"><div class="content-wrapper" data-type="editor" data-id="0"><?php echo htmlspecialchars_decode($page_config['editable_page_config_content']['editor'][0]); ?></div></div>
</div>


<?php break; case "3": ?><div class="editable-page-model editable-page-model-3" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class='pr' data-type="goods" data-id="0">
            <div class='goods-list'>
                <?php if(is_array($page_config['goods_list'][0]) || $page_config['goods_list'][0] instanceof \think\Collection || $page_config['goods_list'][0] instanceof \think\Paginator): if( count($page_config['goods_list'][0])==0 ) : echo "" ;else: foreach($page_config['goods_list'][0] as $key=>$goods): ?>
                <div class="goods-item">
                    <a href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>">
                    <div class="goods-image" style="background-image:url(<?php echo goods_thumb($goods, 240); ?>)"></div>
                    <div class='goods-name'>
                        <div class='p strong'><?php echo htmlentities($goods['goods_name']); ?></div>
                        <div class='p'><?php echo htmlentities($goods['goods_advword']); ?></div>
                    </div>
                    <div class="goods-info">
                        <div class="goods-price">￥<span class="strong"><?php echo htmlentities($goods['goods_price']); ?></span></div>
                        <div class="red-btn"><?php echo htmlentities(lang('buy_now')); ?></div>
                    </div>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; if(empty($page_config['goods_list'][0])): ?>
                <div class="no_results">
                    <span><?php echo htmlentities(lang('no_record')); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php break; case "4": ?><div class="editable-page-model editable-page-model-4" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class='content-wrapper'>
            <div class='image' data-type="image" data-id="0" style='background-image:url(<?php if(isset($page_config['editable_page_config_content']['image'][0]['list'][0])): ?><?php echo htmlentities($page_config['editable_page_config_content']['image'][0]['list'][0]['path']); else: ?><?php echo goods_thumb(); ?><?php endif; ?>) '>
            </div> 
            <div class="goods-item" data-type="goods" data-id="0">
                <?php if(isset($page_config['goods_list'][0][0])): ?>
                <a class='goods-wrapper' href="<?php echo url('goods/index',['goods_id'=>$page_config['goods_list'][0][0]['goods_id']]); ?>">
                    <div class="goods-image" style="background-image:url(<?php echo goods_thumb($page_config['goods_list'][0][0], 240); ?>)"></div>
                    <div class='goods-name'>
                        <div class='p strong'><?php echo htmlentities($page_config['goods_list'][0][0]['goods_name']); ?></div>
                        <div class='p'><?php echo htmlentities($page_config['goods_list'][0][0]['goods_advword']); ?></div>
                    </div>
                    <div class="goods-info">
                        <div class="goods-price">￥<span class="strong"><?php echo htmlentities($page_config['goods_list'][0][0]['goods_price']); ?></span></div>
                        <div class="red-btn"><?php echo htmlentities(lang('buy_now')); ?></div>
                    </div>
                </a>
                <?php else: ?>
                <div class="no_results">
                    <span><?php echo htmlentities(lang('no_record')); ?></span>
                </div>
                <?php endif; ?>
            </div>
    </div>
</div>
</div>

<?php break; case "5": ?><div class="editable-page-model editable-page-model-5" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class='pr' data-type="goods" data-id="0">
            <div class='goods-list'>
                <?php if(is_array($page_config['goods_list'][0]) || $page_config['goods_list'][0] instanceof \think\Collection || $page_config['goods_list'][0] instanceof \think\Paginator): if( count($page_config['goods_list'][0])==0 ) : echo "" ;else: foreach($page_config['goods_list'][0] as $key=>$goods): ?>
                <div class="goods-item">
                    <a href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>">
                    <div class="goods-image" style="background-image:url(<?php echo goods_thumb($goods, 240); ?>)"></div>
                    <div class='goods-wrapper'>
                        <div class='goods-name'>
                            <div class='p strong'><?php echo htmlentities($goods['goods_name']); ?></div>
                            <div class='p'><?php echo htmlentities($goods['goods_advword']); ?></div>
                        </div>
                        <div class="goods-info">
                            <div class="goods-price">￥<span class="strong"><?php echo htmlentities($goods['goods_price']); ?></span></div>
                            <div class="red-btn"><?php echo htmlentities(lang('buy_now')); ?></div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; if(empty($page_config['goods_list'][0])): ?>
                <div class="no_results">
                    <span><?php echo htmlentities(lang('no_record')); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php break; case "7": ?><div class="editable-page-model editable-page-model-7" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class='content-wrapper'>
            <div class="goods-item" data-type="goods" data-id="0">
                <?php if(isset($page_config['goods_list'][0][0])): ?>
                <a class='goods-wrapper' href="<?php echo url('goods/index',['goods_id'=>$page_config['goods_list'][0][0]['goods_id']]); ?>">
                    <div class="goods-image" style="background-image:url(<?php echo goods_thumb($page_config['goods_list'][0][0], 240); ?>)"></div>
                    <div class="goods-content">
                        <div class='goods-name'>
                            <div class='p strong'><?php echo htmlentities($page_config['goods_list'][0][0]['goods_name']); ?></div>
                            <div class='p'><?php echo htmlentities($page_config['goods_list'][0][0]['goods_advword']); ?></div>
                        </div>
                        <div class="goods-info">
                            <div class="goods-price">￥<span class="strong"><?php echo htmlentities($page_config['goods_list'][0][0]['goods_price']); ?></span></div>
                            <div class="red-btn"><?php echo htmlentities(lang('buy_now')); ?></div>
                        </div>
                    </div>
                </a>
                <?php else: ?>
                <div class="no_results">
                    <span><?php echo htmlentities(lang('no_record')); ?></span>
                </div>
                <?php endif; ?>
            </div>
    </div>
</div>
</div>
<?php break; case "8": ?><div class="editable-page-model editable-page-model-8" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class="content-wrapper">
            <div class="category-list" data-type="image,cate" data-id="0">
                <?php if(is_array($page_config['cate_list'][0]) || $page_config['cate_list'][0] instanceof \think\Collection || $page_config['cate_list'][0] instanceof \think\Paginator): if( count($page_config['cate_list'][0])==0 ) : echo "" ;else: foreach($page_config['cate_list'][0] as $key=>$category_item): if($key<5): ?>
                <div class="category-item">
                    <div class="tab_head_item">
                        <div class="tab_head_item_inner">
                            <i class="item_icon"<?php if(isset($page_config['editable_page_config_content']['image'][0]['list'][$key])): ?> style="background-image:url(<?php echo htmlentities($page_config['editable_page_config_content']['image'][0]['list'][$key]['path']); ?>)"<?php endif; ?>></i>
                            <a class="item_title" href="<?php echo url('Search/index',['cate_id'=>$category_item['gc_id']]); ?>" ><?php echo htmlentities($category_item['gc_name']); ?></a>
                            <div class="item_children">
                            <?php if(is_array($category_item['children']) || $category_item['children'] instanceof \think\Collection || $category_item['children'] instanceof \think\Paginator): if( count($category_item['children'])==0 ) : echo "" ;else: foreach($category_item['children'] as $key1=>$child1): if($key1<3): ?>
                            <a class="item_children_item<?php if($key1==0): ?> first<?php endif; ?>" href="<?php echo url('Search/index',['cate_id'=>$child1['gc_id']]); ?>" ><?php echo htmlentities($child1['gc_name']); ?></a>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab_body_item">
                        <div class="fresh_fs_nav_cate cate">
                            <?php if(is_array($category_item['children']) || $category_item['children'] instanceof \think\Collection || $category_item['children'] instanceof \think\Paginator): if( count($category_item['children'])==0 ) : echo "" ;else: foreach($category_item['children'] as $key1=>$child1): ?>
                            <dl class="cate_item">
                                <dt class="cate_tit">
                                    <a class="cate_tit_lk" href="<?php echo url('Search/index',['cate_id'=>$child1['gc_id']]); ?>" ><?php echo htmlentities($child1['gc_name']); ?><i class="cate_tit_arrow">&gt;</i></a>
                                </dt>
                                <dd class="cate_con">
                                <?php if(is_array($child1['children']) || $child1['children'] instanceof \think\Collection || $child1['children'] instanceof \think\Paginator): if( count($child1['children'])==0 ) : echo "" ;else: foreach($child1['children'] as $key2=>$child2): ?>
                                    <a class="cate_con_lk" href="<?php echo url('Search/index',['cate_id'=>$child2['gc_id']]); ?>" ><?php echo htmlentities($child2['gc_name']); ?></a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </dd>
                            </dl>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>

                </div>
                <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <div class="slide-wrapper" data-type="image,link" data-id="1">
                <div class="bd">
                    <ul>
                        <?php $__FOR_START_44448559__=0;$__FOR_END_44448559__=$page_config['editable_page_config_content']['image'][1]['count'];for($i=$__FOR_START_44448559__;$i < $__FOR_END_44448559__;$i+=1){ ?>
                        <li style="background-image: url(<?php if(isset($page_config['editable_page_config_content']['image'][1]['list'][$i])): ?><?php echo htmlentities($page_config['editable_page_config_content']['image'][1]['list'][$i]['path']); else: ?><?php echo goods_thumb(); ?><?php endif; ?>" >
                            <a href="<?php if(isset($page_config['editable_page_config_content']['link'][1]['list'][$i])): ?><?php echo htmlentities($page_config['editable_page_config_content']['link'][1]['list'][$i]['content']); ?><?php endif; ?>">&nbsp;</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php if($page_config['editable_page_config_content']['image'][1]['count']>1): ?>
                <div class="hd">
                    <ul>
                        <?php $__FOR_START_756985840__=0;$__FOR_END_756985840__=$page_config['editable_page_config_content']['image'][1]['count'];for($i=$__FOR_START_756985840__;$i < $__FOR_END_756985840__;$i+=1){ ?>
                        <li class=""></li>
                        <?php } ?>
                    </ul>
                </div>
                <a class="ctrl prev" href="javascript:void(0)">&lt;</a>
                <a class="ctrl next" href="javascript:void(0)">&gt;</a>
                <?php endif; ?>
            </div>


            <div class="fresh_fs_side">
                <div class="fresh_fs_toutiao">
                    <div class="fresh_fs_toutiao_title">
                        <i class="fresh_fs_toutiao_title_l"></i>
                        <span class="fresh_fs_toutiao_title_text" data-type="text" data-id="2"><em><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][2]['list'][0]['content']) && ($page_config['editable_page_config_content']['text'][2]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['text'][2]['list'][0]['content']:'')); ?></em><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][2]['list'][1]['content']) && ($page_config['editable_page_config_content']['text'][2]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['text'][2]['list'][1]['content']:'')); ?></span>
                        <i class="fresh_fs_toutiao_title_r"></i>
                    </div>
                    <div class="fresh_fs_toutiao_list" data-type="text,link" data-id="3">
                        <a class="fresh_fs_toutiao_item" href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][3]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][3]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][3]['list'][0]['content']:'')); ?>" ><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][3]['list'][0]['content']) && ($page_config['editable_page_config_content']['text'][3]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['text'][3]['list'][0]['content']:'')); ?></a>
                        <a class="fresh_fs_toutiao_item" href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][3]['list'][1]['content']) && ($page_config['editable_page_config_content']['link'][3]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['link'][3]['list'][1]['content']:'')); ?>" ><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][3]['list'][1]['content']) && ($page_config['editable_page_config_content']['text'][3]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['text'][3]['list'][1]['content']:'')); ?></a>
                        <a class="fresh_fs_toutiao_item" href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][3]['list'][2]['content']) && ($page_config['editable_page_config_content']['link'][3]['list'][2]['content'] !== '')?$page_config['editable_page_config_content']['link'][3]['list'][2]['content']:'')); ?>" ><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][3]['list'][2]['content']) && ($page_config['editable_page_config_content']['text'][3]['list'][2]['content'] !== '')?$page_config['editable_page_config_content']['text'][3]['list'][2]['content']:'')); ?></a>
                    </div>
                </div>
                <a data-type="image,link" data-id="4" class="fresh_fs_act" href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][4]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][4]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][4]['list'][0]['content']:'')); ?>" ><img class="fresh_fs_act_img lazyload" data-original="<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][4]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][4]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][4]['list'][0]['path']:goods_thumb())); ?>" /></a>
            </div>

            <div class="fresh_fs_shadow"></div>
        </div>
    </div>  
</div>

<?php break; case "9": ?>
<div class="editable-page-model editable-page-model-9" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class="fresh_category_body">
            <div class="fresh_category_acts">
                <div class="fresh_category_act1" data-type="image,cate,text" data-id="0" style="background: url(<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][0]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][0]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][0]['list'][0]['path']:goods_thumb())); ?>) 0 0 no-repeat;">
                    <h4 class="fresh_category_title"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][0]['list'][0]['content']) && ($page_config['editable_page_config_content']['text'][0]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['text'][0]['list'][0]['content']:'')); ?></h4>
                    <p class="fresh_category_subtitle"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][0]['list'][1]['content']) && ($page_config['editable_page_config_content']['text'][0]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['text'][0]['list'][1]['content']:'')); ?></p>
                    <div class="fresh_category_keys">
                        <?php if(is_array($page_config['cate_list'][0]) || $page_config['cate_list'][0] instanceof \think\Collection || $page_config['cate_list'][0] instanceof \think\Paginator): if( count($page_config['cate_list'][0])==0 ) : echo "" ;else: foreach($page_config['cate_list'][0] as $key=>$category_item): if($key<6): ?>
                        <a class="fresh_category_keys_item" href="<?php echo url('Search/index',['cate_id'=>$category_item['gc_id']]); ?>" ><?php echo htmlentities($category_item['gc_name']); ?></a>
                        <?php endif; ?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="fresh_category_act2" data-type="image,link" data-id="1">
                    <div>
                        <a href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][1]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][1]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][1]['list'][0]['content']:'')); ?>" ><img class="fresh_category_act2_img lazyload" data-original="<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][1]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][1]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][1]['list'][0]['path']:goods_thumb())); ?>" alt="" title="" /></a>
                    </div>
                </div>
                <a class="fresh_category_act3" data-type="image,link" data-id="2" href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][2]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][2]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][2]['list'][0]['content']:'')); ?>" ><img class="fresh_category_act3_img lazyload" data-original="<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][2]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][2]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][2]['list'][0]['path']:goods_thumb())); ?>" alt="" title="" /></a>
            </div>
            <div class="fresh_category_goods goods" data-type="goods" data-id="3">
                <?php if(is_array($page_config['goods_list'][3]) || $page_config['goods_list'][3] instanceof \think\Collection || $page_config['goods_list'][3] instanceof \think\Paginator): if( count($page_config['goods_list'][3])==0 ) : echo "" ;else: foreach($page_config['goods_list'][3] as $key=>$goods): ?>
                <div class="goods_item">
                    <a class="goods_item_link" href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>" ><img class="goods_item_img lazyload" width="150" height="150" data-original="<?php echo goods_thumb($goods, 240); ?>" /><p class="goods_item_name"><?php echo htmlentities($goods['goods_name']); ?></p></a>
                    <p class="goods_item_price">￥<?php echo htmlentities($goods['goods_price']); ?></p>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="fresh_category_brands brands" data-type="brand" data-id="4">
              <?php if(is_array($page_config['brand_list'][4]) || $page_config['brand_list'][4] instanceof \think\Collection || $page_config['brand_list'][4] instanceof \think\Paginator): if( count($page_config['brand_list'][4])==0 ) : echo "" ;else: foreach($page_config['brand_list'][4] as $key=>$brand): ?>
                <a class="brands_item" href="<?php echo url('Brand/brand_goods',array('brand_id'=>$brand['brand_id'])); ?>" >
                <img class="brands_item_img lazyload" data-original="<?php echo brand_image($brand['brand_pic']); ?>" />
                </a>
              <?php endforeach; endif; else: echo "" ;endif; ?>  
            </div>
        </div>
    </div>  
</div>

<?php break; case "10": ?><div class="editable-page-model editable-page-model-10" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class="content-wrapper">
            <div class="fresh_categorys_col one">
                <div class="fresh_category_acts">
                    <div class="fresh_category_act1" data-type="image,cate,text" data-id="0" style="background: url(<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][0]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][0]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][0]['list'][0]['path']:goods_thumb())); ?>) 0 0 no-repeat;">
                        <h4 class="fresh_category_title"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][0]['list'][0]['content']) && ($page_config['editable_page_config_content']['text'][0]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['text'][0]['list'][0]['content']:'')); ?></h4>
                        <p class="fresh_category_subtitle"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][0]['list'][1]['content']) && ($page_config['editable_page_config_content']['text'][0]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['text'][0]['list'][1]['content']:'')); ?></p>
                        <div class="fresh_category_keys">
                            <?php if(is_array($page_config['cate_list'][0]) || $page_config['cate_list'][0] instanceof \think\Collection || $page_config['cate_list'][0] instanceof \think\Paginator): if( count($page_config['cate_list'][0])==0 ) : echo "" ;else: foreach($page_config['cate_list'][0] as $key=>$category_item): if($key<6): ?>
                            <a class="fresh_category_keys_item" href="<?php echo url('Search/index',['cate_id'=>$category_item['gc_id']]); ?>" ><?php echo htmlentities($category_item['gc_name']); ?></a>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="fresh_category_act3" data-type="image,link" data-id="1">
                    <a href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][1]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][1]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][1]['list'][0]['content']:'')); ?>" ><img class="fresh_category_act3_img lazyload" data-original="<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][1]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][1]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][1]['list'][0]['path']:goods_thumb())); ?>" alt="" title="" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="fresh_category_goods goods" data-type="goods" data-id="3">
                    <?php if(is_array($page_config['goods_list'][3]) || $page_config['goods_list'][3] instanceof \think\Collection || $page_config['goods_list'][3] instanceof \think\Paginator): if( count($page_config['goods_list'][3])==0 ) : echo "" ;else: foreach($page_config['goods_list'][3] as $key=>$goods): ?>
                    <div class="goods_item">
                        <a class="goods_item_link" href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>" ><img class="goods_item_img lazyload" width="150" height="150" data-original="<?php echo goods_thumb($goods, 240); ?>" /><p class="goods_item_name"><?php echo htmlentities($goods['goods_name']); ?></p></a>
                        <p class="goods_item_price">￥<?php echo htmlentities($goods['goods_price']); ?></p>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="clearfix"></div>
                <div class="fresh_category_brands brands" data-type="brand" data-id="4">
                    <?php if(is_array($page_config['brand_list'][4]) || $page_config['brand_list'][4] instanceof \think\Collection || $page_config['brand_list'][4] instanceof \think\Paginator): if( count($page_config['brand_list'][4])==0 ) : echo "" ;else: foreach($page_config['brand_list'][4] as $key=>$brand): ?>
                      <a class="brands_item" href="<?php echo url('Brand/brand_goods',array('brand_id'=>$brand['brand_id'])); ?>" >
                      <img class="brands_item_img lazyload" data-original="<?php echo brand_image($brand['brand_pic']); ?>" />
                      </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>  
                </div>
            </div>
            <div class="fresh_categorys_col two">
                <div class="fresh_category_acts">
                    <div class="fresh_category_act1" data-type="image,cate,text" data-id="5" style="background: url(<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][5]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][5]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][5]['list'][0]['path']:goods_thumb())); ?>) 0 0 no-repeat;">
                        <h4 class="fresh_category_title"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][5]['list'][0]['content']) && ($page_config['editable_page_config_content']['text'][5]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['text'][5]['list'][0]['content']:'')); ?></h4>
                        <p class="fresh_category_subtitle"><?php echo htmlentities((isset($page_config['editable_page_config_content']['text'][5]['list'][1]['content']) && ($page_config['editable_page_config_content']['text'][5]['list'][1]['content'] !== '')?$page_config['editable_page_config_content']['text'][5]['list'][1]['content']:'')); ?></p>
                        <div class="fresh_category_keys">
                            <?php if(is_array($page_config['cate_list'][5]) || $page_config['cate_list'][5] instanceof \think\Collection || $page_config['cate_list'][5] instanceof \think\Paginator): if( count($page_config['cate_list'][5])==0 ) : echo "" ;else: foreach($page_config['cate_list'][5] as $key=>$category_item): if($key<6): ?>
                            <a class="fresh_category_keys_item" href="<?php echo url('Search/index',['cate_id'=>$category_item['gc_id']]); ?>" ><?php echo htmlentities($category_item['gc_name']); ?></a>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="fresh_category_act3" data-type="image,link" data-id="6">
                    <a href="<?php echo htmlentities((isset($page_config['editable_page_config_content']['link'][6]['list'][0]['content']) && ($page_config['editable_page_config_content']['link'][6]['list'][0]['content'] !== '')?$page_config['editable_page_config_content']['link'][6]['list'][0]['content']:'')); ?>" ><img class="fresh_category_act3_img lazyload" data-original="<?php echo htmlentities((isset($page_config['editable_page_config_content']['image'][6]['list'][0]['path']) && ($page_config['editable_page_config_content']['image'][6]['list'][0]['path'] !== '')?$page_config['editable_page_config_content']['image'][6]['list'][0]['path']:goods_thumb())); ?>" alt="" title="" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="fresh_category_goods goods" data-type="goods" data-id="7">
                    <?php if(is_array($page_config['goods_list'][7]) || $page_config['goods_list'][7] instanceof \think\Collection || $page_config['goods_list'][7] instanceof \think\Paginator): if( count($page_config['goods_list'][7])==0 ) : echo "" ;else: foreach($page_config['goods_list'][7] as $key=>$goods): ?>
                    <div class="goods_item">
                        <a class="goods_item_link" href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>" ><img class="goods_item_img lazyload" width="150" height="150" data-original="<?php echo goods_thumb($goods, 240); ?>" /><p class="goods_item_name"><?php echo htmlentities($goods['goods_name']); ?></p></a>
                        <p class="goods_item_price">￥<?php echo htmlentities($goods['goods_price']); ?></p>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="clearfix"></div>
                <div class="fresh_category_brands brands" data-type="brand" data-id="8">
                    <?php if(is_array($page_config['brand_list'][8]) || $page_config['brand_list'][8] instanceof \think\Collection || $page_config['brand_list'][8] instanceof \think\Paginator): if( count($page_config['brand_list'][8])==0 ) : echo "" ;else: foreach($page_config['brand_list'][8] as $key=>$brand): ?>
                      <a class="brands_item" href="<?php echo url('Brand/brand_goods',array('brand_id'=>$brand['brand_id'])); ?>" >
                      <img class="brands_item_img lazyload" data-original="<?php echo brand_image($brand['brand_pic']); ?>" />
                      </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>  
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>  
</div>
<?php break; case "11": ?><div class="editable-page-model editable-page-model-11" data-load="0" data-type="editable_model" data-id="<?php echo htmlentities($page_config['editable_page_config_id']); ?>" style="background-color:<?php echo htmlentities($page_config['editable_page_config_content']['back_color']); ?>;">
    <div class="editable-page-content" style="padding-top:<?php echo htmlentities($page_config['editable_page_config_content']['margin_top']); ?>;padding-bottom:<?php echo htmlentities($page_config['editable_page_config_content']['margin_bottom']); ?>;">
        <div class="tab_head" data-type="image" data-id="0">
            <?php if(is_array($page_config['editable_page_config_content']['image'][0]['list']) || $page_config['editable_page_config_content']['image'][0]['list'] instanceof \think\Collection || $page_config['editable_page_config_content']['image'][0]['list'] instanceof \think\Paginator): if( count($page_config['editable_page_config_content']['image'][0]['list'])==0 ) : echo "" ;else: foreach($page_config['editable_page_config_content']['image'][0]['list'] as $key=>$image): if($key<$page_config['editable_page_config_content']['image'][0]['count']): ?>
            <div class="tab_head_item <?php if($key==0): ?>on<?php endif; ?>">
                <span class="tab_head_item_inner"><i class="mod_iconfont" style="background-image:url(<?php echo htmlentities($image['path']); ?>)"></i></span>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="tab_body">
            
            
            <div class="handle-holder" data-type="goods" data-id="<?php $__FOR_START_1017410459__=0;$__FOR_END_1017410459__=$page_config['editable_page_config_content']['image'][0]['count'];for($i=$__FOR_START_1017410459__;$i < $__FOR_END_1017410459__;$i+=1){ if($i!=0): ?>,<?php endif; ?><?php echo htmlentities($i); } ?>"></div>
            
            
            <div class="tab_body_list">
            <?php $__FOR_START_284470176__=0;$__FOR_END_284470176__=$page_config['editable_page_config_content']['image'][0]['count'];for($i=$__FOR_START_284470176__;$i < $__FOR_END_284470176__;$i+=1){ ?>
            <div class="tab_body_item"<?php if($i!=0): ?> style="display: none;"<?php endif; ?>>
                <?php if(isset($page_config['goods_list'][$i])): if(is_array($page_config["goods_list"][$i]) || $page_config["goods_list"][$i] instanceof \think\Collection || $page_config["goods_list"][$i] instanceof \think\Paginator): if( count($page_config["goods_list"][$i])==0 ) : echo "" ;else: foreach($page_config["goods_list"][$i] as $key=>$goods): ?>
                <a class="goods_item" href="<?php echo url('goods/index',['goods_id'=>$goods['goods_id']]); ?>" ><img class="goods_item_img lazyload" width="180" height="180" data-original="<?php echo goods_thumb($goods, 240); ?>" /><p class="goods_item_tag"><?php if($goods['goods_advword']): ?>“<?php echo htmlentities($goods['goods_advword']); ?>”<?php endif; ?></p><p class="goods_item_name"><?php echo htmlentities($goods['goods_name']); ?></p>
                    <div class="goods_item_priceg">
                        <span class="goods_item_price">￥<?php echo htmlentities($goods['goods_price']); ?></span>
                        <span class="goods_item_g">￥<?php echo htmlentities($goods['goods_marketprice']); ?></span>
                        
                    </div>
                </a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>  
</div>
<?php break; ?>
    <?php endswitch; ?>
    <?php endforeach; endif; else: echo "" ;endif; else: if($editable_page['if_edit']): ?>
    <div class="no_results">
        <span><?php echo htmlentities(lang('add_model_notice')); ?></span>
        <div class='editable-page-model mt10'>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
<script>
$(function(){
  initSlide()
})
function initSlide(){
$('.editable-page-model-1[data-load=0]').each(function(){
  $(this).slide({mainCell: ".bd ul", autoPlay: true, delayTime: 500, interTime: 5000})
  $(this).removeAttr('data-load')
})
$('.editable-page-model-8[data-load=0]').each(function(){
  $(this).slide({mainCell: ".bd ul", autoPlay: true, delayTime: 500, interTime: 5000})
  $(this).removeAttr('data-load')
})
$('.editable-page-model-11[data-load=0]').each(function(){
  $(this).slide({mainCell: ".tab_body_list",titCell:".tab_head_item"})
  $(this).removeAttr('data-load')
})
}
</script>
<?php endif; ?>

<div class="server">
    <div class="ensure">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
    </div>
    <div class="mall_desc">
        <?php if(!(empty($article_list) || (($article_list instanceof \think\Collection || $article_list instanceof \think\Paginator ) && $article_list->isEmpty()))): if(is_array($article_list) || $article_list instanceof \think\Collection || $article_list instanceof \think\Paginator): $_607464f9b79c1 = is_array($article_list) ? array_slice($article_list,0,4, true) : $article_list->slice(0,4, true); if( count($_607464f9b79c1)==0 ) : echo "" ;else: foreach($_607464f9b79c1 as $key=>$art): ?>
        <dl> 
            <dt><?php echo htmlentities($art['ac_name']); ?></dt>
            <dd>
                <?php if(!(empty($art['list']) || (($art['list'] instanceof \think\Collection || $art['list'] instanceof \think\Paginator ) && $art['list']->isEmpty()))): if(is_array($art['list']) || $art['list'] instanceof \think\Collection || $art['list'] instanceof \think\Paginator): if( count($art['list'])==0 ) : echo "" ;else: foreach($art['list'] as $key=>$list): ?>
                <a href="<?php if($list['article_url'] !=''): ?><?php echo htmlentities($list['article_url']); else: ?><?php echo url('Article/show',['article_id'=>$list['article_id']]); ?><?php endif; ?>"><?php echo htmlentities($list['article_title']); ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </dd>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
        <dl class="mall_mobile">
            <dt><?php echo htmlentities(lang('ds_mobile_mall')); ?></dt>
            <dd>
                <a href="#" class="join">
                    <!-- <img src="<?php echo htmlentities(HOME_SITE_URL); ?>/qrcode?url=<?php echo htmlentities(config('ds_config.h5_site_url')); ?>" width="105" height="105" > -->
                    <img src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logowx')); ?>" width="105" height="105" >
                </a>
            </dd> 
        </dl>
    </div>
</div>






<?php if(config('ds_config.node_site_use') == '1' && !isset($wait) && request()->controller() != 'Payment' && request()->controller() != 'Showgroupbuy'): ?>
<?php echo get_chat(); ?>
<?php endif; ?>
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.cookie.js"></script>
<script src="<?php echo htmlentities(HOME_SITE_ROOT); ?>/js/compare.js"></script>
<link rel="stylesheet" href="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/perfect-scrollbar.min.css">
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/js/qtip/jquery.qtip.min.js"></script>
<link href="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/jquery.lazyload.min.js"></script>
<script>
    //懒加载
    $("img.lazyload").lazyload({
//        placeholder : "<?php echo htmlentities(HOME_SITE_ROOT); ?>/images/loading.gif",
        effect: "fadeIn",
        skip_invisible : false,
        threshold : 200,
    });
</script>
<div class="footer-info">
    <!-- <div class="links w1200">
        <?php foreach($navs['footer'] as $nav): ?>
        <a href="<?php echo htmlentities($nav['nav_url']); ?>" <?php if($nav['nav_new_open'] == 1): ?><?php endif; ?>><?php echo htmlentities($nav['nav_title']); ?></a>|
        <?php endforeach; ?>
    </div> -->
    <p class="copyright"><?php echo htmlentities(config('ds_config.flow_static_code')); ?></p>
</div>
