<?php /*a:9:{s:78:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_step1.html";i:1616221225;s:71:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_top.html";i:1617186346;s:78:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_fcode.html";i:1616221225;s:80:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_address.html";i:1616221225;s:80:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_payment.html";i:1617594741;s:80:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_invoice.html";i:1616221225;s:83:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_goods_list.html";i:1617594741;s:79:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_amount.html";i:1616221225;s:74:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_footer.html";i:1616221225;}*/ ?>
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
 

<link rel="stylesheet" href="<?php echo htmlentities(HOME_SITE_ROOT); ?>/css/home_cart.css">
<script src="<?php echo htmlentities(PLUGINS_SITE_ROOT); ?>/mlselection.js"></script>
<div class="dsc-header">
    <div class="logo">
        <a href="<?php echo htmlentities(HOME_SITE_URL); ?>"><img src="<?php echo ds_get_pic(ATTACH_COMMON,config('ds_config.site_logo')); ?>"/></a>
    </div>
    <ul class="dsc-flow">
        <li class=""><i class="iconfont">&#xe69a;</i>
            <p><?php echo htmlentities(lang('cart_index_ensure_order')); ?></p>
            <sub></sub>
            <div class="hr"></div>
        </li>
        <li class="current"><i class=" iconfont">&#xe731;</i>
            <p><?php echo htmlentities(lang('cart_index_ensure_info')); ?></p>
            <sub></sub>
            <div class="hr"></div>
        </li>
        <li class=""><i class="iconfont">&#xe64f;</i>
            <p><?php echo htmlentities(lang('cart_index_payment')); ?></p>
            <sub></sub>
            <div class="hr"></div>
        </li>
        <li class=""><i class="iconfont">&#xe67e;</i>
            <p><?php echo htmlentities(lang('cart_index_buy_finish')); ?></p>
            <sub></sub>
            <div class="hr"></div>
        </li>
    </ul>
</div>
<div class="dsc-line"></div>
<form method="post" id="order_form" name="order_form" action="<?php echo url('Buy/buy_step2'); ?>">
    
<!-- S fcode -->
<?php if(isset($store_cart_list[key($store_cart_list)][0]['is_goodsfcode'])&&$store_cart_list[key($store_cart_list)][0]['is_goodsfcode'] == 1): ?>

<div class="dsc-main">
  <div class="dsc-title">
    <h3><?php echo htmlentities(lang('f_code_goods_purchase')); ?></h3>
    <h5><?php echo htmlentities(lang('verify_pre_emption_rights')); ?></h5>
  </div>
  <div class="dsc-receipt-info">
    <div class="fcode-form ">
      <input name="fcode" type="text" class="text" id="fcode" placeholder="<?php echo htmlentities(lang('please_enter_f_code')); ?>" autocomplete="off" maxlength="20" />
      <input type="button" value="<?php echo htmlentities(lang('using_f_code')); ?>" id="fcode_submit" class="button" />
      <input value="" type="hidden" name="fcode_callback" id="fcode_callback">
      <input type="hidden" id="goods_commonid" name="goods_commonid" value="<?php echo $store_cart_list[key($store_cart_list)][0]['goods_commonid']; ?>">
    </div>
    <div class="fcode-hint" id="fcode_showmsg"></div>
  </div>
</div>
<!-- E fcode --> 
<script>
$(function(){
    $('#fcode_submit').on('click',function(){
        if ($('#fcode').val() == '') {
            layer.alert('<?php echo htmlentities(lang('using_f_code')); ?>');return false;
        }
        $('#fcode_callback').val('');
		$.get("<?php echo url('Buy/check_fcode'); ?>", {'fcode':$('#fcode').val(),'goods_commonid':$('#goods_commonid').val()}, function(data){
            if (data == '1') {
            	$('#fcode_callback').val('1');
            	$('#fcode_submit').hide();
            	$('#fcode').hide();
            	$('#fcode_showmsg').append('<i class="icon-ok-circle"></i>'+$('#fcode').val()+'<?php echo htmlentities(lang('complete_the_purchase_order')); ?>');
            } else {
                layer.alert('<?php echo htmlentities(lang('f_code_error')); ?>');
            }
        });
    });

});
</script>
<?php endif; ?>
 
    <div class="dsc-main">
        <div class="dsc-title">
            <h3><?php echo htmlentities(lang('cart_index_ensure_info')); ?></h3>
            <h5><?php echo htmlentities(lang('check_information')); ?></h5>
        </div>
        <div class="dsc-receipt-info">
    <div class="dsc-receipt-info-title">
        <h3><?php echo htmlentities(lang('consignee_information')); ?></h3>
        <a href="javascript:void(0)" ds_type="buy_edit" id="edit_reciver">[<?php echo htmlentities(lang('modification')); ?>]</a></div>
    <div id="addr_list" class="dsc-candidate-items">
        <ul>
            <li>
                <span class="true-name"><?php echo htmlentities($address_info['address_realname']); ?></span>
                <span class="phone"><i class="iconfont">&#xe60e;</i><?php if($address_info['address_mob_phone']): ?><?php echo htmlentities($address_info['address_mob_phone']); else: ?><?php echo htmlentities($address_info['address_tel_phone']); ?><?php endif; ?></span>
                <span class="address"><?php if($address_info['chain_id']): ?>[<?php echo htmlentities(lang('self_service_station')); ?>]<?php endif; ?><?php echo htmlentities($address_info['area_info']); ?><?php echo htmlentities($address_info['address_detail']); ?></span>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
//隐藏收货地址列表
    function hideAddrList(addr_id, true_name, address, phone) {
        $('#edit_reciver').show();
        $("#address_id").val(addr_id);
        $("#addr_list").html('<ul><li><span class="true-name">' + true_name + '</span><span class="address">' + address + '</span><span class="phone"><i class="iconfont">&#xe60e;</i>' + phone + '</span></li></ul>');
        $('.current_box').removeClass('current_box');
        ableOtherEdit();
        $('#edit_payment').click();
    }
//加载收货地址列表
    $('#edit_reciver').on('click', function() {
        $(this).hide();
        disableOtherEdit('<?php echo htmlentities(lang('save_consignee_information')); ?> ');
        $(this).parent().parent().addClass('current_box');
        var url = HOMESITEURL + '/Buy/load_addr.html';
        $('#addr_list').load(url);
    });
    
//异步显示每个店铺运费 city_id计算运费area_id计算是否支持货到付款
    function showShippingPrice(city_id, area_id) {
        $('#buy_city_id').val('');
        $('#buy_city_id').val(city_id);
        var url = HOMESITEURL + '/Buy/change_addr.html';
        $.post(url, {'freight_hash': '<?php echo htmlentities($freight_hash); ?>',city_id: city_id, 'area_id': area_id}, function(data) {
            if (data.state == 'success') {
                $('#buy_city_id').val(city_id);
                $('#allow_offpay').val(data.allow_offpay);
                if (data.allow_offpay_batch) {
                    var arr = new Array();
                    $.each(data.allow_offpay_batch, function(k, v) {
                        arr.push('' + k + ':' + (v ? 1 : 0));
                    });
                    $('#allow_offpay_batch').val(arr.join(";"));
                }
                $('#offpay_hash').val(data.offpay_hash);
                $('#offpay_hash_batch').val(data.offpay_hash_batch);
                var content = data.content;
                var amount = 0;
                for (var i in content) {
                    $('#eachStoreFreight_' + i).attr('data-freight',content[i])
                    amount = amount + parseFloat(content[i]);
                }
                calcOrder();
            }

        }, 'json');
    }
    //异步获取商品自提点
    function showChainList(area_id){
        $('*[ds_chain_goods]').each(function(){
            var goods_id=$(this).attr('ds_chain_goods')
            var num=$(this).attr('ds_num')
            var url = HOMESITEURL + '/Buy/chain_list.html';
            var obj=$(this)
            obj.find('select').val(0)
            $.post(url, {goods_id: goods_id,num:num, 'area_id': area_id}, function(data) {
                var chain_list=data.result.chain_list
                if(data.code==10000 && chain_list.length){
                    if($('*[ds_chain_goods]').length>1){
                        obj.html('<div class="dsc-receipt-info-title"><a href="javascript:goChain('+goods_id+','+num+')">当前地区可以使用自提点</a></div>')
                    }else{
                        var html='<option value="0">可选自提点</option>'
                        for(var i in chain_list){
                            html+='<option value="'+chain_list[i].chain_id+'">'+chain_list[i].chain_addressname+'('+chain_list[i].chain_area_info+chain_list[i].chain_address+')'+'</option>'
                        }
                        obj.find('select').html(html)
                    }
                    obj.show()
                }else{
                    obj.hide()
                }
            }, 'json');
        })
    }
    function goChain(goods_id,num){
        document.write("<form action='<?php echo url('Buy/buy_step1'); ?>' id='buynow_form' method='post' style='display:none'>");
        document.write("<input type='hidden' name='cart_id[]' value='"+goods_id+"|"+num+"'/>");
        document.write("</form>");
        $("#buynow_form").submit();
    }
    $(function() {
        <?php if(!(empty($address_info['address_id']) || (($address_info['address_id'] instanceof \think\Collection || $address_info['address_id'] instanceof \think\Paginator ) && $address_info['address_id']->isEmpty()))): ?>
            showShippingPrice(<?php echo htmlentities($address_info['city_id']); ?>,<?php echo htmlentities($address_info['area_id']); ?>);
            showChainList(<?php echo htmlentities($address_info['area_id']); ?>)
        <?php else: ?>
            $('#edit_reciver').click();
        <?php endif; ?>
    });
    
</script>
        <div class="dsc-receipt-info" >
    <div class="dsc-receipt-info-title">
        <h3><?php echo htmlentities(lang('payment_method')); ?></h3>
        
    </div>
    <!-- <div class="dsc-candidate-items">
        <ul>
            <li><?php echo htmlentities(lang('cart_step2_online_pay')); ?></li>
        </ul>
    </div> -->
    <div id="payment_list" class="dsc-candidate-items" >
        <ul>
            <?php if(empty($payment_list)): ?>
            <li>
                <input type="radio" value="online" name="payment_type" id="payment_type_online">
                <label for="payment_type_online"><?php echo htmlentities(lang('cart_step2_online_pay')); ?></label>
            </li>
            <?php else: if(is_array($payment_list) || $payment_list instanceof \think\Collection || $payment_list instanceof \think\Paginator): if( count($payment_list)==0 ) : echo "" ;else: foreach($payment_list as $key=>$row): ?>
            <li>
                <input type="radio" value="<?php echo htmlentities($row['payment_code']); ?>" name="payment_type" <?php if($row['payment_code']=='bankpay'): ?>checked<?php endif; ?>>
                <label for="payment_type_<?php echo htmlentities($row['payment_code']); ?>"><?php echo htmlentities($row['payment_name']); ?></label>
                <label class="tips" style="margin-left: <?php if($row['payment_code']=='bankpay'): ?>70<?php else: ?>100<?php endif; ?>px;">
                    <?php if($row['payment_code']=='bankpay'): ?>
                    <?php echo htmlentities(lang('cart_step1_bankpay')); ?><?php echo htmlentities($row['payment_desc']); ?><?php echo htmlentities(lang('cart_step1_bankpay_tips')); else: ?>
                    <?php echo htmlentities($row['payment_desc']); ?>
                    <?php endif; ?>
                </label>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </ul>
        <!-- <div class="hr16"> <a href="javascript:void(0);" class="dsc-btn dsc-btn-red" id="hide_payment_list"><?php echo htmlentities(lang('save_payment_method')); ?></a></div> -->
    </div>
    <div id="dsc-payment-showgoods-list" class="dsc-payment-showgoods-list">
        <dl>
            <?php if(!(empty($pay_goods_list['offline']) || (($pay_goods_list['offline'] instanceof \think\Collection || $pay_goods_list['offline'] instanceof \think\Paginator ) && $pay_goods_list['offline']->isEmpty()))): ?>
            <dt data-hideshow="offline"><?php echo htmlentities(lang('cart_step2_arrival_pay')); ?></dt>
            <dd data-hideshow="offline" data-cod2-type="offline">
                <?php if(is_array($pay_goods_list['offline']) || $pay_goods_list['offline'] instanceof \think\Collection || $pay_goods_list['offline'] instanceof \think\Paginator): if( count($pay_goods_list['offline'])==0 ) : echo "" ;else: foreach($pay_goods_list['offline'] as $key=>$value): ?>
                <div class="goods-thumb" data-cod2-store="<?php echo htmlentities($value['store_id']); ?>"><span><img src="<?php echo goods_thumb($value); ?>"></span></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dd>
            <?php endif; ?>
            <dt data-hideshow="online"><?php echo htmlentities(lang('cart_step2_online_pay')); ?></dt>
            <dd data-hideshow="online" data-cod2-type="online">
                <?php if(isset($pay_goods_list['online'])): if(is_array($pay_goods_list['online']) || $pay_goods_list['online'] instanceof \think\Collection || $pay_goods_list['online'] instanceof \think\Paginator): if( count($pay_goods_list['online'])==0 ) : echo "" ;else: foreach($pay_goods_list['online'] as $key=>$value): ?>
                <div class="goods-thumb" data-cod2-store="<?php echo htmlentities($value['store_id']); ?>"><span><img src="<?php echo goods_thumb($value); ?>"></span></div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </dd>
        </dl>
    </div>
</div>

<!-- 在线支付和货到付款组合时，显示弹出确认层内容 -->
<div id="confirm_offpay_goods_list" style="display: none;">
    <dl class="dsc-offpay-list" data-hideshow="offline">
        <dt><?php echo htmlentities(lang('following_commodity_support')); ?><strong><?php echo htmlentities(lang('cart_step2_arrival_pay')); ?></strong></dt>
        <dd>
            <?php if(!(empty($pay_goods_list['offline']) || (($pay_goods_list['offline'] instanceof \think\Collection || $pay_goods_list['offline'] instanceof \think\Paginator ) && $pay_goods_list['offline']->isEmpty()))): ?>
            <ul data-cod-type="offline">
                <?php if(is_array($pay_goods_list['offline']) || $pay_goods_list['offline'] instanceof \think\Collection || $pay_goods_list['offline'] instanceof \think\Paginator): if( count($pay_goods_list['offline'])==0 ) : echo "" ;else: foreach($pay_goods_list['offline'] as $key=>$value): ?>
                <li data-cod-store="<?php echo htmlentities($value['store_id']); ?>"><span title="<?php echo htmlentities($value['goods_name']); ?>"><img src="<?php echo goods_thumb($value); ?>"></span></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php endif; ?>
            <label>
                <input type="radio" value="" checked="checked">
                <?php echo htmlentities(lang('cart_step2_arrival_pay')); ?>
            </label>
        </dd>
    </dl>
    <dl class="dsc-offpay-list" data-hideshow="online">
        <dt><?php echo htmlentities(lang('following_commodity_support')); ?><strong><?php echo htmlentities(lang('cart_step2_online_pay')); ?></strong></dt>
        <dd>
            <ul data-cod-type="online">
                <?php if(isset($pay_goods_list['online'])): if(is_array($pay_goods_list['online']) || $pay_goods_list['online'] instanceof \think\Collection || $pay_goods_list['online'] instanceof \think\Paginator): if( count($pay_goods_list['online'])==0 ) : echo "" ;else: foreach($pay_goods_list['online'] as $key=>$value): ?>
                <li data-cod-store="<?php echo htmlentities($value['store_id']); ?>"><span title="<?php echo htmlentities($value['goods_name']); ?>"><img src="<?php echo goods_thumb($value); ?>"></span></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </ul>
            <label>
                <input type="radio" value="" checked="checked">
                <?php echo htmlentities(lang('cart_step2_online_pay')); ?>
            </label>
        </dd>
    </dl>

    <div class="tc mt10 mb10"><a href="javascript:void(0);" class="dsc-btn dsc-btn-orange" id="close_confirm_button"><?php echo htmlentities(lang('confirm_payment_method')); ?></a></div>
</div>
<script type="text/javascript">
    $(function(){

        var hybrid = <?php if($ifshow_offpay === true && isset($pay_goods_list['online'])): ?>1<?php else: ?>0<?php endif; ?>;

        var failInPage = false;

// 重新调整在线支付/到付的商品展示
        var setCodGoodsShow = function() {
            var j = $('#allow_offpay_batch').val();
            var arr = {};
            if (j) {
                $.each(j.split(';'), function(k, v) {
                    vv = v.split(':');
                    arr[vv[0]] = vv[1] == '1' ? true : false;
                });
            }

            $.each(arr, function(k, v) {
                //console.log(''+k+':'+v);
                if (v) {
                    $("[data-cod-type='online'] [data-cod-store='"+k+"']").appendTo("[data-cod-type='offline']");
                    $("[data-cod-type='online'] [data-cod-store='"+k+"']").remove();

                    $("[data-cod2-type='online'] [data-cod2-store='"+k+"']").appendTo("[data-cod2-type='offline']");
                    $("[data-cod2-type='online'] [data-cod2-store='"+k+"']").remove();
                } else {
                    $("[data-cod-type='offline'] [data-cod-store='"+k+"']").appendTo("[data-cod-type='online']");
                    $("[data-cod-type='offline'] [data-cod-store='"+k+"']").remove();

                    $("[data-cod2-type='offline'] [data-cod2-store='"+k+"']").appendTo("[data-cod2-type='online']");
                    $("[data-cod2-type='offline'] [data-cod2-store='"+k+"']").remove();
                }
            });

            var off = $("[data-cod2-type='offline'] [data-cod2-store]").length;
            var on = $("[data-cod2-type='online'] [data-cod2-store]").length;

            $("[data-hideshow='offline']")[off ? 'show' : 'hide']();
            $("[data-hideshow='online']")[on ? 'show' : 'hide']();

            $("span[data-cod-nums='offline']").html(off);
            $("span[data-cod-nums='online']").html(on);

            failInPage = ! off;
            hybrid = off && on;

        };

        //点击修改支付方式
        $('#edit_payment').on('click',function(){
            $('#edit_payment').parent().next().remove();
            $(this).hide();
            $('#paymentCon').addClass('current_box');
            $('#payment_list').show();
            disableOtherEdit('<?php echo htmlentities(lang('save_first_payment_method')); ?>');
        });
        //保存支付方式
        $('#hide_payment_list').on('click',function(){
            var payment_type = $('input[name="payment_type"]:checked').val();
            if ($('input[name="payment_type"]:checked').size() == 0) return;

            setCodGoodsShow();

            //判断该地区(县ID)是否能货到付款
            if (payment_type == 'offline' && ($('#allow_offpay').val() == '0' || failInPage)) {
                layer.alert('<?php echo htmlentities(lang('area_not_supported_delivery')); ?>');return;
            }
            $('#payment_list').hide();
            $('#edit_payment').show();
            $('.current_box').removeClass('current_box');
            var content = (payment_type == 'online' ? '<?php echo htmlentities(lang('cart_step2_online_pay')); ?>' : '<?php echo htmlentities(lang('cart_step2_arrival_pay')); ?>');
            $('#pay_name').val(payment_type);

            if (payment_type == 'offline'){
                //如果混合支付（在线+货到付款）
                if (hybrid) {
                    content = $('#show_goods_list').clone().html();
                    $('#edit_payment').parent().after('<div class="dsc-candidate-items"><ul><li><?php echo htmlentities(lang('payment_options')); ?><br/><a href="javsacript:void(0);" id="show_goods_list" class="dsc-payment-showgoods">'+content+'</a></li></ul></div>');
                    $('#show_goods_list').hover(function(){showPayGoodsList(this)},function(){$('#dsc-payment-showgoods-list').fadeOut()});
                } else {
                    $('#edit_payment').parent().after('<div class="dsc-candidate-items"><ul><li>'+content+'</li></ul></div>');
                    $('input[name="pd_pay"]').prop('checked',false);
                    $('#pd_panel').hide();
                }
            }else{
                $('#edit_payment').parent().after('<div class="dsc-candidate-items"><ul><li>'+content+'</li></ul></div>');
                $('#pd_panel').show();
            }
            ableOtherEdit();
        });
        $('#show_goods_list').hover(function(){showPayGoodsList(this)},function(){$('#dsc-payment-showgoods-list').fadeOut()});
        function showPayGoodsList(item){
            var pos = $(item).position();
            var pos_x = pos.left+0;
            var pos_y = pos.top+25;
            $("#dsc-payment-showgoods-list").css({'left' : pos_x, 'top' : pos_y,'position' : 'absolute','display' : 'block'});
            $('#dsc-payment-showgoods-list').addClass('dsc-payment-showgoods-list').fadeIn();
        }
        // $('input[name="payment_type"]').on('change',function(){
        //     if ($(this).val() == 'online'){
        //         $('#show_goods_list').hide();
        //     } else {

        //         setCodGoodsShow();

        //         //判断该地区(县ID)是否能货到付款
        //         if (($('#allow_offpay').val() == '0') || failInPage) {
        //             $('#payment_type_online').prop('checked',true);
        //             layer.alert('<?php echo htmlentities(lang('area_not_supported_delivery')); ?>');return;
        //         }
        //         html_form('confirm_pay_type', '<?php echo htmlentities(lang('please_confirm_payment_method')); ?>', $('#confirm_offpay_goods_list').html(), 500,1);
        //         $('#show_goods_list').show();
        //     }
        // });
        var default_payment_type = $('input[name="payment_type"]:checked').val();
        if(default_payment_type=='predeposit'){
            $('input[name="pd_pay"]').prop('checked',true);
            $("#pd_password").show();
        }
        $('input[name="payment_type"]').on('change',function(){
            if ($(this).val() != 'predeposit'){
                $('#pd_panel').hide();
                $('input[name="pd_pay"]').prop('checked',false);
            } else {
                $('#pd_panel').show();
                $('input[name="pd_pay"]').prop('checked',true);
            }
        });

        $('body').on('click','#close_confirm_button',function(){
            DialogManager.close('confirm_pay_type');
        });
    })
</script>
        <!-- <div class="dsc-receipt-info"><div class="dsc-receipt-info-title">
        <h3><?php echo htmlentities(lang('invoice_information')); ?></h3>
        <a href="javascript:void(0)" ds_type="buy_edit" id="edit_invoice">[<?php echo htmlentities(lang('modification')); ?>]</a></div>
    <div id="invoice_list" class="dsc-candidate-items">
        <ul>
            <li><?php echo htmlentities($inv_info['content']); ?></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
//隐藏发票列表
    function hideInvList(content) {
        $('#edit_invoice').show();
        $("#invoice_list").html('<ul><li>' + content + '</li></ul>');
        $('.current_box').removeClass('current_box');
        ableOtherEdit();
        //重新定位到顶部
        $("html, body").animate({scrollTop: 0}, 0);
    }
//加载发票列表
    $('#edit_invoice').on('click', function() {
        $(this).hide();
        disableOtherEdit('<?php echo htmlentities(lang('save_invoice_information')); ?>');
        $(this).parent().parent().addClass('current_box');
        var url = HOMESITEURL + '/Buy/load_inv.html';
        $('#invoice_list').load(url);
    });
</script> -->
        <style>
.dsc-table-style tbody tr.item_disabled td{background: none repeat scroll 0 0 #F9F9F9;height: 30px;padding: 10px 0;text-align: center;}
</style>
<div class="dsc-receipt-info">
  <div class="dsc-receipt-info-title">
    <h3><?php echo htmlentities(lang('list_of_items')); ?></h3>
    <?php if(!(empty($ifcart) || (($ifcart instanceof \think\Collection || $ifcart instanceof \think\Paginator ) && $ifcart->isEmpty()))): ?>
    <a href="<?php echo url('Cart/index'); ?>"><?php echo htmlentities(lang('cart_step1_back_to_cart')); ?></a>
    <?php endif; ?>
  </div>
  <table class="dsc-table-style">
    <thead>
      <tr>
        <th class="w20"></th>
        <th></th>
        <th><?php echo htmlentities(lang('cart_index_store_goods')); ?></th>
        <th class="w120"><?php echo htmlentities(lang('cart_index_price')); ?>(<?php echo htmlentities(lang('ds_yuan')); ?>)</th>
        <th class="w120"><?php echo htmlentities(lang('cart_index_amount')); ?></th>
        <th class="w120"><?php echo htmlentities(lang('cart_index_sum')); ?>(<?php echo htmlentities(lang('ds_yuan')); ?>)</th>
      </tr>
    </thead>
    <?php foreach($store_cart_list as $store_id => $cart_list) {?>
    <tbody>
      <tr>
        <th colspan="6"><strong><?php echo htmlentities(lang('cart_step1_store')); ?>：<a href="<?php echo url('Store/index',['store_id'=>$store_id]); ?>"><?php echo htmlentities($cart_list[0]['store_name']); ?></a></strong><span member_id="<?php echo htmlentities($store_list[$store_id]['member_id']); ?>"></span>
          <div class="store-sale">
            <?php if(!empty($cancel_calc_sid_list[$store_id])): ?>
            <em><i class="iconfont">&#xe753;</i><?php echo htmlentities(lang('ore_activities_free_freight')); ?></em><?php echo htmlentities($cancel_calc_sid_list[$store_id]['desc']); ?>
            <?php endif; if(!empty($store_mansong_rule_list[$store_id])): ?>
            <em><i class="iconfont">&#xe753;</i><?php echo htmlentities(lang('store_activities_free_demand')); ?></em><?php echo $store_mansong_rule_list[$store_id]['desc']; if(isset($store_premiums_list[$store_id])): foreach ($store_premiums_list[$store_id] as $goods_info) { ?>
            <a href="<?php echo url('Goods/index',['goods_id'=>$goods_info['goods_id']]); ?>"  class="dsc-store-gift" title="<?php echo htmlentities($goods_info['goods_name']); ?>"><img src="<?php echo goods_thumb($goods_info,240); ?>" alt="<?php echo htmlentities($goods_info['goods_name']); ?>" /></a>
            <?php } ?>
            <?php endif; ?>
            <?php endif; ?>
          </div></th>
      </tr>
      <?php foreach($cart_list as $cart_info) {?>
      <tr id="cart_item_<?php echo htmlentities($cart_info['cart_id']); ?>" class="shop-list <?php if($cart_info['state'] && $cart_info['storage_state']): else: ?>item_disabled<?php endif; ?>">
          <td>
              <?php if($cart_info['state'] && $cart_info['storage_state']): ?>
              <input type="hidden" value="<?php echo htmlentities($cart_info['cart_id']); ?>|<?php echo htmlentities($cart_info['goods_num']); ?>" name="cart_id[]">
              <?php endif; ?>
          </td>
          <?php if($cart_info['bl_id'] == '0'): ?>
          <td class="w60"><a href="<?php echo url('Goods/index',['goods_id'=>$cart_info['goods_id']]); ?>"  class="dsc-goods-thumb"><img src="<?php echo goods_thumb($cart_info,240); ?>" alt="<?php echo htmlentities($cart_info['goods_name']); ?>" /></a></td>
          <?php endif; ?>
        <td class="tl" <?php if($cart_info['bl_id'] != '0'): ?>colspan="2"<?php endif; ?>><dl class="dsc-goods-info">
            <dt>
                <a href="<?php echo url('Goods/index',['goods_id'=>$cart_info['goods_id']]); ?>" ><?php echo htmlentities($cart_info['goods_name']); ?></a>
                <div ds_chain_goods="<?php echo htmlentities($cart_info['goods_id']); ?>" ds_num="<?php echo htmlentities($cart_info['goods_num']); ?>" style="display:none">
                    <select name="chain_goods[0_<?php echo htmlentities($cart_info['goods_id']); ?>]" onchange="calcOrder()">
                        <option value="0">可选自提点</option>
                    </select>
                </div>
            </dt>
            <?php if(!(empty($cart_info['xianshi_info']) || (($cart_info['xianshi_info'] instanceof \think\Collection || $cart_info['xianshi_info'] instanceof \think\Paginator ) && $cart_info['xianshi_info']->isEmpty()))): ?>
            <dd> <span class="xianshi"><?php echo htmlentities(lang('ds_mansong_flag')); ?><strong><?php echo htmlentities($cart_info['xianshi_info']['xianshigoods_lower_limit']); ?></strong><?php echo htmlentities(lang('unit_price_down')); ?><em>￥<?php echo htmlentities($cart_info['xianshi_info']['down_price']); ?></em></span> </dd>
            <?php endif; if(isset($cart_info['ifgroupbuy'])): ?>
            <dd> <span class="groupbuy"><?php echo htmlentities(lang('ds_groupbuy')); ?></span></dd>
            <?php endif; if($cart_info['bl_id'] != '0'): ?>
            <dd> <span class="buldling"><?php echo htmlentities(lang('single_set_vertical_drop')); ?><em>￥<?php echo htmlentities($cart_info['down_price']); ?></em></span></dd>
            <?php endif; if(!(empty($cart_info['gift_list']) || (($cart_info['gift_list'] instanceof \think\Collection || $cart_info['gift_list'] instanceof \think\Paginator ) && $cart_info['gift_list']->isEmpty()))): ?>
            <dd><span class="dsc-goods-gift"><?php echo htmlentities(lang('a_gift')); ?></span>
              <ul class="dsc-goods-gift-list">
                <?php if(is_array($cart_info['gift_list']) || $cart_info['gift_list'] instanceof \think\Collection || $cart_info['gift_list'] instanceof \think\Paginator): if( count($cart_info['gift_list'])==0 ) : echo "" ;else: foreach($cart_info['gift_list'] as $key=>$goods_info): ?>
                <li ds_group="<?php echo htmlentities($cart_info['cart_id']); ?>"><a href="<?php echo url('Goods/index',['goods_id'=>$goods_info['gift_goodsid']]); ?>"  class="thumb" ><img src="<?php echo goods_cthumb($goods_info['gift_goodsimage'],240,$store_id); ?>" alt="<?php echo htmlentities($goods_info['gift_goodsname']); ?>"/></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </dd>
            <?php endif; ?>
          </dl></td>
          <td class="w120">
              <em><?php echo htmlentities($cart_info['goods_price']); ?></em>
              <!--<?php if($cart_info['goods_price']<$cart_info['goods_original_price']): ?>-->
              <div><del><?php echo htmlentities($cart_info['goods_original_price']); ?></del></div>
              <!--<?php endif; ?>-->
          </td>
        <td class="w60"><?php if($cart_info['state']): ?><?php echo htmlentities($cart_info['goods_num']); ?><?php endif; ?></td>
        <td class="w120">
          <?php if($cart_info['state'] && $cart_info['storage_state']): ?>
          <em id="item<?php echo htmlentities($cart_info['cart_id']); ?>_subtotal" ds_type="eachGoodsTotal"><?php echo htmlentities($cart_info['goods_total']); ?></em>
          <?php elseif(!$cart_info['storage_state']): ?>
          <span style="color: #F00;"><?php echo htmlentities(lang('cart_add_too_much')); ?></span>
          <?php elseif(!$cart_info['state']): ?>
          <span style="color: #F00;"><?php echo htmlentities(lang('has_been_off_shelves')); ?></span>
          <?php endif; ?>
        </td>
      </tr>

      <!-- S bundling goods list -->
      <?php if(!(empty($cart_info['bl_goods_list']) || (($cart_info['bl_goods_list'] instanceof \think\Collection || $cart_info['bl_goods_list'] instanceof \think\Paginator ) && $cart_info['bl_goods_list']->isEmpty()))): if(is_array($cart_info['bl_goods_list']) || $cart_info['bl_goods_list'] instanceof \think\Collection || $cart_info['bl_goods_list'] instanceof \think\Paginator): if( count($cart_info['bl_goods_list'])==0 ) : echo "" ;else: foreach($cart_info['bl_goods_list'] as $key=>$goods_info): ?>
      <tr class="shop-list <?php if($cart_info['state'] && $cart_info['storage_state']): else: ?>item_disabled<?php endif; ?>">
        <td></td>
        <td class="w60"><a href="<?php echo url('Goods/index',['goods_id'=>$goods_info['goods_id']]); ?>"  class="dsc-goods-thumb"><img src="<?php echo goods_thumb($goods_info,240); ?>" alt="<?php echo htmlentities($goods_info['goods_name']); ?>" /></a></td>
        <td class="tl"><dl class="dsc-goods-info">
            <dt>
                <a href="<?php echo url('Goods/index',['goods_id'=>$goods_info['goods_id']]); ?>" ><?php echo htmlentities($goods_info['goods_name']); ?></a> 
                <div style="display:none" ds_chain_goods="<?php echo htmlentities($cart_info['goods_id']); ?>" ds_num="<?php echo htmlentities($cart_info['goods_num']); ?>">
                    <select name="chain_goods[<?php echo htmlentities($cart_info['bl_id']); ?>_<?php echo htmlentities($cart_info['goods_id']); ?>]" onchange="calcOrder()">
                        <option value="0">可选自提点</option>
                    </select>
                </div>
            </dt>
          </dl>
        </td>
        <td>
            <em><?php echo htmlentities($goods_info['blgoods_price']); ?></em>
            <!--<?php if($goods_info['blgoods_price']<$cart_info['goods_original_price']): ?>-->
              <div><del><?php echo htmlentities($goods_info['goods_original_price']); ?></del></div>
            <!--<?php endif; ?>-->
        </td>
        <td></td>
        <td></td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <?php endif; ?>
      <!-- E bundling goods list -->

      <?php } ?>
      <tr>
        <td class="w10"></td>
        <td class="tl" colspan="2"><?php echo htmlentities(lang('buyer_message')); ?>：
          <textarea  name="pay_message[<?php echo htmlentities($store_id); ?>]" class="dsc-msg-textarea" placeholder="<?php echo htmlentities(lang('transaction_statement')); ?>" title="<?php echo htmlentities(lang('transaction_statement')); ?>"  maxlength="150"></textarea></td>
        <td class="tl" colspan="3"><div class="dsc-form-default"> </div></td>
      </tr>
      <tr>
        <td class="tr" colspan="6"><div class="dsc-store-account">
            <dl class="freight">
              <dt><?php echo htmlentities(lang('cart_index_freight')); ?>：</dt>
              <dd><em id="eachStoreFreight_<?php echo htmlentities($store_id); ?>">0.00</em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
            </dl>
            <dl>
              <dt><?php echo htmlentities(lang('amount_of_goods')); ?>：</dt>
              <dd><em><?php echo htmlentities($store_goods_original_total[$store_id]); ?></em><em id="eachStoreGoodsTotal_<?php echo htmlentities($store_id); ?>" style="display: none"><?php echo htmlentities($store_goods_total[$store_id]); ?></em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
            </dl>
            <!--<?php if($store_goods_discount_total[$store_id]>0): ?>-->    
            <dl class="mansong">
              <dt><?php echo htmlentities(lang('amount_of_discount')); ?>：</dt>
              <dd><em><?php echo htmlentities($store_goods_discount_total[$store_id]); ?></em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
            </dl>  
            <!--<?php endif; ?>-->    
                <?php if(!empty($store_mansong_rule_list[$store_id]['discount'])): ?>
                <dl class="mansong">
                    <dt><?php echo htmlentities(lang('ds_mansong')); ?>-<?php echo $store_mansong_rule_list[$store_id]['desc']; ?>：</dt>
                    <dd><em id="eachStoreManSong_<?php echo htmlentities($store_id); ?>">-<?php echo htmlentities($store_mansong_rule_list[$store_id]['discount']); ?></em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
                </dl>
                <?php endif; ?>

            <!-- S voucher list -->
            <?php if(!(empty($store_voucher_list[$store_id]) || (($store_voucher_list[$store_id] instanceof \think\Collection || $store_voucher_list[$store_id] instanceof \think\Paginator ) && $store_voucher_list[$store_id]->isEmpty()))): ?>
            <dl class="voucher">
              <dt>
                <select dstype="voucher" name="voucher[<?php echo htmlentities($store_id); ?>]">
                  <option value="<?php echo htmlentities((isset($voucher['vouchertemplate_id']) && ($voucher['vouchertemplate_id'] !== '')?$voucher['vouchertemplate_id']:'')); ?>|<?php echo htmlentities($store_id); ?>|0.00"><?php echo htmlentities(lang('cart_step1_select_voucher')); ?></option>
                  <?php if(is_array($store_voucher_list[$store_id]) || $store_voucher_list[$store_id] instanceof \think\Collection || $store_voucher_list[$store_id] instanceof \think\Paginator): if( count($store_voucher_list[$store_id])==0 ) : echo "" ;else: foreach($store_voucher_list[$store_id] as $key=>$voucher): ?>
                  <option value="<?php echo htmlentities($voucher['vouchertemplate_id']); ?>|<?php echo htmlentities($store_id); ?>|<?php echo htmlentities($voucher['voucher_price']); ?>"><?php echo htmlentities($voucher['desc']); ?></option>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>：
              </dt>
              <dd><em id="eachStoreVoucher_<?php echo htmlentities($store_id); ?>">-0.00</em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
            </dl>
            <?php endif; ?>

            <!-- E voucher list -->

            <dl class="total">
              <dt><?php echo htmlentities(lang('our_total')); ?>：</dt>
              <dd><em store_id="<?php echo htmlentities($store_id); ?>" ds_type="eachStoreTotal"></em><?php echo htmlentities(lang('ds_yuan')); ?></dd>
            </dl>
          </div></td>
      </tr>
      <?php }?>

      <!-- S 预存款 & 充值卡 -->
      <?php if(!empty($available_pd_amount) || !empty($available_rcb_amount)): ?>
      <tr id="pd_panel" style="display:none;">
          <td class="pd-account" colspan="6"><div class="dsc-pd-account">
                  <?php if(!(empty($available_rcb_amount) || (($available_rcb_amount instanceof \think\Collection || $available_rcb_amount instanceof \think\Paginator ) && $available_rcb_amount->isEmpty()))): ?>
                  <div class="mt5 mb5">
                      <label>
                          <input type="checkbox" class="vm mr5" value="1" name="rcb_pay">
                          <?php echo htmlentities(lang('use_top_up_cards')); ?>：<em><?php echo htmlentities($available_rcb_amount); ?></em><?php echo htmlentities(lang('ds_yuan')); ?>
                      </label>
                  </div>
                  <?php endif; if(!(empty($available_pd_amount) || (($available_pd_amount instanceof \think\Collection || $available_pd_amount instanceof \think\Paginator ) && $available_pd_amount->isEmpty()))): ?>
                  <div class="mt5 mb5">
                      <label>
                          <input type="checkbox" class="vm mr5" value="1" name="pd_pay">
                          <?php echo htmlentities(lang('pre_deposit')); ?>：<em><?php echo htmlentities($available_pd_amount); ?></em><?php echo htmlentities(lang('ds_yuan')); ?>）</label>
                  </div>
                  <?php endif; if(!empty($available_pd_amount) && !empty($available_rcb_amount)): ?>
                  <div class="mt5 mb5"><?php echo htmlentities(lang('system_priority')); ?>&nbsp;&nbsp;</div>
                  <?php endif; ?>
                  <div id="pd_password" style="display: block"><?php echo htmlentities(lang('pay_the_password')); ?>（<?php echo htmlentities(lang('pay_the_password_tips')); ?>）：
                      <input type="password" class="text w120" value="" name="password" id="pay-password" maxlength="35" autocomplete="off">
                      <input type="hidden" value="" name="password_callback" id="password_callback">
                      <a class="dsc-btn-mini dsc-btn-orange" id="pd_pay_submit" href="javascript:void(0)"><?php echo htmlentities(lang('use')); ?></a>
                      <?php if(!$member_paypwd): ?>
                      <?php echo htmlentities(lang('no_payment_password_set')); ?>，<a href="<?php echo url('Membersecurity/auth',['type'=>'modify_paypwd']); ?>" ><?php echo htmlentities(lang('set_up_immediately')); ?></a>
                      <?php endif; ?>
                  </div>
              </div>
          </td>
      </tr>
      <?php endif; ?>
      <!-- E 预存款 -->


    </tbody>
    <tfoot>
      <tr>
        <td colspan="6"><div class="dsc-all-account"><?php echo htmlentities(lang('total_order_amount')); ?>：<em id="orderTotal"></em><?php echo htmlentities(lang('ds_yuan')); ?></div></td>
      </tr>
    </tfoot>
  </table>
</div>

        <div class="dsc-bottom"> <a href="javascript:void(0)" id='submitOrder' class="dsc-btn dsc-btn-acidblue fr"><?php echo htmlentities(lang('cart_index_submit_order')); ?></a> </div>
<script>
    function submitNext() {
        if (!SUBMIT_FORM)
            return;
        if ($('input[name="cart_id[]"]').size() == 0) {
            layer.msg('<?php echo htmlentities(lang('commodity_is_invalid')); ?>');
            return;
        }
        if ($('#address_id').val() == '') {
            layer.msg('<?php echo htmlentities(lang('cart_step1_please_set_address')); ?>');
            return;
        }
        if ($('#buy_city_id').val() == '') {
            layer.msg('<?php echo htmlentities(lang('reselect_the_item')); ?>');
            return;
        }
        var payment_type = $('input[name="payment_type"]:checked').val();
        $('#pay_name').val(payment_type);
        if(payment_type=='predeposit'){
            if ((!$('input[name="pd_pay"]').prop('checked') || !$('input[name="rcb_pay"]').prop('checked')) && $('#password_callback').val() != '1') {
                layer.msg('<?php echo htmlentities(lang('enter_payment_password')); ?>');
                return;
            }
        }
     //    if ($('input[name="fcode"]').size() == 1 && $('#fcode_callback').val() != '1') {
     //        layer.alert('<?php echo htmlentities(lang('enter_f_code')); ?>');
     //        return;
	    // }
        SUBMIT_FORM = false;
        $('#order_form').submit();
    }
    $(function() {
        $(document).keydown(function(e) {
            if (e.keyCode == 13) {
                submitNext();
                return false;
            }
        });
        $('#submitOrder').on('click', function() {
            submitNext()
        });
        calcOrder();
    });
</script>
        <!-- 订单来源1为PC 2为手机 -->
        <input value="1" type="hidden" name="order_from">
        <!-- 来源于购物车标志 -->
        <input value="<?php echo htmlentities($ifcart); ?>" type="hidden" name="ifcart">
        <!-- offline/online -->
        <input value="" name="pay_name" id="pay_name" type="hidden">
        <!-- 是否保存增值税发票判断标志 -->
        <input value="<?php echo htmlentities($vat_hash); ?>" name="vat_hash" type="hidden">
        <!-- 收货地址ID -->
        <input value="<?php echo htmlentities($address_info['address_id']); ?>" name="address_id" id="address_id" type="hidden">
        <!-- 城市ID(运费) -->
        <input value="" name="buy_city_id" id="buy_city_id" type="hidden">
        
        <!-- 记录所选地区是否支持货到付款 第一个前端JS判断 第二个后端PHP判断 -->
        <input value="" id="allow_offpay" name="allow_offpay" type="hidden">
        <input value="" id="allow_offpay_batch" name="allow_offpay_batch" type="hidden">
        <input value="" id="offpay_hash" name="offpay_hash" type="hidden">
        <input value="" id="offpay_hash_batch" name="offpay_hash_batch" type="hidden">

        <input value="<?php if(isset($inv_info['invoice_id'])): ?><?php echo htmlentities($inv_info['invoice_id']); ?><?php endif; ?>" name="invoice_id" id="invoice_id" type="hidden">
    </div>
</form>


<script>
var SUBMIT_FORM = true;
//计算总运费和每个店铺小计
function calcOrder() {
    var allTotal = 0;
    $('em[ds_type="eachStoreTotal"]').each(function(){
        store_id = $(this).attr('store_id');
        var eachTotal = 0;
        if ($('#eachStoreFreight_'+store_id).length > 0) {
                    if($('*[ds_chain_goods]').length==1 && $('*[ds_chain_goods]').find('select').val()>0){
                        $('#eachStoreFreight_' + store_id).html('0.00');
                    }else{
                        $('#eachStoreFreight_' + store_id).html(number_format($('#eachStoreFreight_' + store_id).attr('data-freight'), 2));
                    }
        	eachTotal += parseFloat($('#eachStoreFreight_'+store_id).html());
	    }
        if ($('#eachStoreGoodsTotal_'+store_id).length > 0) {
        	eachTotal += parseFloat($('#eachStoreGoodsTotal_'+store_id).html());
	    }
        if ($('#eachStoreManSong_'+store_id).length > 0) {
        	eachTotal += parseFloat($('#eachStoreManSong_'+store_id).html());
	    }
        if ($('#eachStoreVoucher_'+store_id).length > 0) {
        	eachTotal += parseFloat($('#eachStoreVoucher_'+store_id).html());
        }
        $(this).html(number_format(eachTotal,2));
        allTotal += eachTotal;
    });
    $('#orderTotal').html(number_format(allTotal,2));
}
$(function(){
    $.ajaxSetup({
        async : false
    });
    $('select[dstype="voucher"]').on('change',function(){
        if ($(this).val() == '') {
        	$('#eachStoreVoucher_'+items[1]).html('-0.00');
        } else {
            var items = $(this).val().split('|');
            $('#eachStoreVoucher_'+items[1]).html('-'+number_format(items[2],2));
        }
        calcOrder();
    });
    
    <?php if(!empty($available_pd_amount) || !empty($available_rcb_amount)): ?>
    function showPaySubmit() {
        if ($('input[name="pd_pay"]').prop('checked') || $('input[name="rcb_pay"]').prop('checked')) {
        	$('#pay-password').val('');
        	$('#password_callback').val('');
        	$('#pd_password').show();
        } else {
        	$('#pd_password').hide();
        }
    }

    $('#pd_pay_submit').on('click',function(){
        if ($('#pay-password').val() == '') {
                layer.alert('<?php echo htmlentities(lang('enter_payment_password')); ?>');return;
        }
        $('#password_callback').val('');
        var url = HOMESITEURL+'/Buy/check_pd_pwd.html'
	   $.post(url, {'password':$('#pay-password').val()}, function(data){
            if (data == '1') {
            	$('#password_callback').val('1');
            	$('#pd_password').hide();
            } else {
            	$('#pay-password').val('');
                layer.alert('<?php echo htmlentities(lang('payment_password_error')); ?>');return;
            }
        });
    });
    <?php endif; if(!empty($available_rcb_amount)): ?>
    $('input[name="rcb_pay"]').on('change',function(){
    	showPaySubmit();
    	if ($(this).prop('checked') && !$('input[name="pd_pay"]').prop('checked')) {
        	if (<?php echo htmlentities($available_rcb_amount); ?> >= parseFloat($('#orderTotal').html())) {
            	$('input[name="pd_pay"]').prop('checked',false).prop('disabled',true);
        	}
    	} else {
    		$('input[name="pd_pay"]').prop('disabled',false);
    	}
    });
    <?php endif; if(!empty($available_pd_amount)): ?>
    $('input[name="pd_pay"]').on('change',function(){
    	showPaySubmit();
    	if ($(this).prop('checked') && !$('input[name="rcb_pay"]').prop('checked')) {
        	if (<?php echo htmlentities($available_pd_amount); ?> >= parseFloat($('#orderTotal').html())) {
            	$('input[name="rcb_pay"]').prop('checked',false).prop('disabled',true);
        	}
    	} else {
    		$('input[name="rcb_pay"]').prop('disabled',false);
    	}    	
    });
    <?php endif; ?>

});
    function disableOtherEdit(showText) {
        $('a[ds_type="buy_edit"]').each(function() {
            if ($(this).css('display') != 'none') {
                $(this).after('<font color="#B0B0B0">' + showText + '</font>');
                $(this).hide();
            }
        });
        disableSubmitOrder();
    }
    function ableOtherEdit() {
        $('a[ds_type="buy_edit"]').show().next('font').remove();
        ableSubmitOrder();
    }
    function ableSubmitOrder() {
        $('#submitOrder').on('click', function() {
            submitNext()
        }).css('cursor', '').addClass('dsc-btn-acidblue');
    }
    function disableSubmitOrder() {
        $('#submitOrder').unbind('click').css('cursor', 'not-allowed').removeClass('dsc-btn-acidblue');
    }
</script>
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
