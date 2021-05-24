<?php /*a:1:{s:79:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\mall\search\goods_hot.html";i:1616221225;}*/ ?>
<div class="dsh-module dsh-module-style01">
    <div class="title">
        <h3><?php echo htmlentities(lang('hot_recommendations')); ?></h3>
    </div>
    <div class="content">
        <?php if(!(empty($goods_list) || (($goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator ) && $goods_list->isEmpty()))): ?>
        <ul class="v_module_recommend">
            <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection || $goods_list instanceof \think\Paginator): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $key=>$value): ?>
            <li>
                <div class="goods-pic"><a href="<?php echo url('Goods/index',['goods_id'=>$value['goods_id']]); ?>" ><img alt="<?php echo htmlentities($value['goods_name']); ?>"  src="<?php echo goods_thumb($value); ?>"></a> </div>
                <dl class="goods-info">
                    <dt>
                    <a href="<?php echo url('Goods/index',['goods_id'=>$value['goods_id']]); ?>" title="<?php echo htmlentities($value['goods_name']); ?>" >
                        <?php if(config('ds_config.groupbuy_allow') && $value['goods_promotion_type'] == 1): ?>
                        <span><?php echo htmlentities(lang('snap_up_goods')); ?></span>
                        <?php elseif(config('ds_config.promotion_allow') && $value['goods_promotion_type'] == 2): ?>
                        <span><?php echo htmlentities(lang('limited_time_discount')); ?></span>
                        <?php endif; ?>

                        <?php echo htmlentities($value['goods_name']); ?>
                    </a>
                    </dt>
                    <dd class="goods-price"><?php echo htmlentities(lang('goods_class_index_store_goods_price')); ?>：<em><?php echo htmlentities(lang('currency')); ?><?php echo htmlentities($value['goods_promotion_price']); ?></em></dd>
                    <dd class="buy-btn"><a href="<?php echo url('Goods/index',['goods_id'=>$value['goods_id']]); ?>" ><?php echo htmlentities(lang('snap_up_immediately')); ?></a></dd>
                </dl>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
