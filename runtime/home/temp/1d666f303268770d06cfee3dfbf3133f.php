<?php /*a:3:{s:78:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\member\buy\buy_step2.html";i:1616221225;s:71:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_top.html";i:1617186346;s:74:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\base\mall_footer.html";i:1616221225;}*/ ?>
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
        <li class=""><i class="iconfont">&#xe731;</i>
            <p><?php echo htmlentities(lang('cart_index_ensure_info')); ?></p>
            <sub></sub>
            <div class="hr"></div>
        </li>
        <li class="current"><i class="iconfont">&#xe64f;</i>
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
<div class="dsc-main">
  <div class="dsc-title">
    <h3><?php echo htmlentities(lang('cart_index_payment')); ?></h3>
    <h5><?php echo htmlentities(lang('order_details_can_viewed')); ?><a href="<?php echo url('Memberorder/index'); ?>" ><?php echo htmlentities(lang('my_order')); ?></a><?php echo htmlentities(lang('carry_out_check')); ?>。</h5>
  </div>
  <form action="<?php echo url('Payment/real_order'); ?>" method="POST" id="buy_form">
    <input type="hidden" name="pay_sn" value="<?php echo htmlentities($pay_info['pay_sn']); ?>">
    <!-- <input type="hidden" id="payment_code" name="payment_code" value=""> -->
    <div class="dsc-receipt-info">
      <div class="dsc-receipt-info-title">
        <h3>
            <?php echo htmlentities($order_remind); if($pay_amount_online > 0): ?>
            <?php echo htmlentities(lang('online_payment_amount')); ?>：<strong>￥<?php echo htmlentities($pay_amount_online); ?></strong>
            <?php endif; ?>
          </h3>
      </div>
      <table class="dsc-table-style">
        <thead>
          <tr>
            <th class="w50"></th>
            <th class="w200 tl"><?php echo htmlentities(lang('order_number')); ?></th>
            <th class="tl w150"><?php echo htmlentities(lang('payment_method')); ?></th>
            <th class="tl"><?php echo htmlentities(lang('amount_of')); ?></th>
            <th class="w150"><?php echo htmlentities(lang('logistics')); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php if(count($order_list)>1): ?>
          <tr>
            <th colspan="20"><?php echo htmlentities(lang('different_businesses')); ?><?php echo count($order_list); ?><?php echo htmlentities(lang('different_suborder_deliveries')); ?></th>
          </tr>
          <?php endif; if(is_array($order_list) || $order_list instanceof \think\Collection || $order_list instanceof \think\Paginator): if( count($order_list)==0 ) : echo "" ;else: foreach($order_list as $key=>$order): ?>
          <tr>
            <td></td>
            <td class="tl"><?php echo htmlentities($order['order_sn']); ?></td>
            <td class="tl"><?php echo htmlentities($order['payment_state']); ?></td>
            <td class="tl">￥<?php echo htmlentities($order['order_amount']); ?></td>
            <td><?php echo htmlentities(lang('courier')); ?></td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
    </div>
    
      <!--  支付方式信息提示 -->
      <?php if(!empty($pay_amount_online)): ?>
      <div id="pd_panel">
          <div class="pd-account" colspan="6">
              <div class="dsc-pd-account" style="text-align: center;">
                  <?php if(is_array($order_list) || $order_list instanceof \think\Collection || $order_list instanceof \think\Paginator): if( count($order_list)==0 ) : echo "" ;else: foreach($order_list as $key=>$row): ?>
                  <div class="mt5 mb5">
                      <label>
                          <?php if($row['payment_code']=='bankpay'): ?>
                          <?php echo htmlentities(lang('cart_step1_bankpay')); ?><?php echo htmlentities($row['payment_desc']); ?><?php echo htmlentities(lang('cart_step1_bankpay_tips')); ?>
                          <?php endif; ?>
                      </label>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
          </div>
      </div>
      <?php endif; ?>
      <!-- 填写备注信息 -->
    <div class="dsc-receipt-info">
      <?php if(empty($payment_tradeno)): ?>
      <div class="dsc-receipt-info-title">
        <h3><?php echo htmlentities(lang('submit_payment_tradeno')); ?></h3>
      </div>
      <div class="dsc-payment-tradeno">
          <label>
          <?php echo htmlentities(lang('cart_step1_bankpay_tradeno')); ?>：
          <input class="text w300" type="text" name="tradeno" id="tradeno" placeholder="<?php echo htmlentities(lang('payment_tradeno_placeholder')); ?>" title="<?php echo htmlentities(lang('payment_tradeno_placeholder')); ?>"  maxlength="150" />
          </label>
      </div>
      <?php else: ?>
      <div class="nopay"><?php echo htmlentities(lang('submit_payment_tradeno_notice')); ?></div>
      <?php endif; ?>
    </div>
    <?php if($pay_amount_online > 0 && empty($payment_tradeno)): ?>
    <div class="dsc-bottom tc mb50"><a href="javascript:void(0);" id="next_button" class="dsc-btn dsc-btn-green"><i class="iconfont">&#xe6f0;</i><?php echo htmlentities(lang('confirm_submit_payment')); ?></a></div>
    <?php endif; ?>
  </form>
</div>
<script type="text/javascript">
$(function(){
    $('.dsc-payment-list > li').on('click',function(){
    	$('.dsc-payment-list > li').removeClass('using');
        $(this).addClass('using');
        $('#payment_code').val($(this).attr('payment_code'));
        if($(this).attr('sub_payment_code')!=''){
            $('#'+$(this).attr('payment_code')+'_sub_payment_code').val($(this).attr('sub_payment_code'));
        }
    });
    $('#next_button').on('click',function(){
        // if ($('#payment_code').val() == '') {
        //     layer.alert('<?php echo htmlentities(lang('cart_step2_choose_pay_method')); ?>');return false;
        // }
        if ($('#tradeno').val() == '') {
            layer.alert('<?php echo htmlentities(lang('payment_tradeno_placeholder')); ?>');return false;
        }
        $('#buy_form').submit();
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
</script>


<style>
    .pd-account { background-color: #FFAA01; padding: 2px;}

</style>

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
