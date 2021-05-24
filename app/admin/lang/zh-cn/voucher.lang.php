<?php
$lang['admin_voucher_unavailable']    = 'Los cupones y puntosdebenactivarse. Saltar a la página de configuración...';
$lang['admin_voucher_quotastate_activity']	= 'Normal';
$lang['admin_voucher_quotastate_cancel']    = 'Cancelar';
$lang['admin_voucher_quotastate_expire']    = 'Terminar';
$lang['admin_voucher_templatestate_usable']	= 'Válido';
$lang['admin_voucher_templatestate_disabled']= 'No válido';
//菜单
$lang['admin_voucher_quota_manage']= 'Administrarpaquete';
$lang['admin_voucher_template_manage']= 'Cupón de tienda';
$lang['admin_voucher_template_edit']= 'Editarcupones';
$lang['admin_voucher_setting']		= 'Configurar';
$lang['admin_voucher_pricemanage']		= 'Ajuste de la denominación';
$lang['admin_voucher_priceadd']		= 'Agregardenominación';
$lang['admin_voucher_styletemplate']	= 'Plantilla de estilo';
/**
 * 设置
 */
$lang['admin_voucher_setting_price_error']		= 'El precio de compra debe ser un número entero mayor que 0';
$lang['admin_voucher_setting_storetimes_error']	= 'El número de actividadesmensuales debe ser un número entero mayor que 0';
$lang['admin_voucher_setting_buyertimes_error']	= 'La cantidadmáxima a recibir debe ser un número entero mayor que 0 y menorque 100';
$lang['admin_voucher_setting_price']			= 'Preciounitario de compra (yuanes / mes)';
$lang['admin_voucher_setting_price_tip']		= 'El costo de las actividades de compra de cupones. Después de la compra, el vendedorpuedepublicarpromociones de cuponesdentro del período de compra';
$lang['admin_voucher_setting_storetimes']		= 'Número de actividadesmensuales';
$lang['admin_voucher_setting_storetimes_tip']	= 'El número máximo de promociones de cuponesque se puedenemitirpormes';
$lang['admin_voucher_setting_buyertimes']		= 'Cantidadmáxima de reclamaciones del comprador';
$lang['admin_voucher_setting_buyertimes_tip']	= 'El comprador solo puedetener la cantidadmáxima de cupones de compraque no se hayanutilizado para el consumo en la mismatienda';
/**
 * 代金券面额
 */
$lang['admin_voucher_price_error']   		= 'El valor nominal del bono debe ser un número entero mayor que 0';
$lang['admin_voucher_price_describe_error'] = 'La descripción no puedeestarvacía';
$lang['admin_voucher_price_describe_lengtherror'] = 'La descripción del cupón no puedeestarvacía y no puedesuperar los 255 caracteres';
$lang['admin_voucher_price_points_error']   = 'El número predeterminado de puntoscanjeados debe ser un número entero mayor que 0';
$lang['admin_voucher_price_exist']    		= 'La denominación del cupón ya existe';
$lang['admin_voucher_price_title']    		= 'Denominación del cupón';
$lang['admin_voucher_price_describe']    	= 'descripción';
$lang['admin_voucher_price_points']    		= 'Canjearpuntos';
$lang['admin_voucher_price_points_tip']    	= 'Al canjear el cupón, la cantidad de puntosconsumidos';
$lang['admin_voucher_price_tip1']               = 'El administradorestablece la denominación del cupón. Cuando la tiendaemite el cupón, la denominación se selecciona de la denominación del cupónestablecidapor el administrador';
/**
 * 代金券套餐
 */
$lang['admin_voucher_quota_tip1']    	= 'No se puederestaurardespués de cancelar la operación, por favor opere con precaución';

/**
 * 代金券
 */
$lang['admin_voucher_template_points_error']	= 'El número de puntosnecesarios para el canje debe ser un número entero superior a 0';
$lang['admin_voucher_template_title']			= 'Nombre del cupón';
$lang['admin_voucher_template_enddate']			= 'Período de validez';
$lang['admin_voucher_template_price']			= 'denominación';
$lang['admin_voucher_template_total']			= 'Importe total a emitir';
$lang['admin_voucher_template_eachlimit']		= 'Límitepor persona';
$lang['admin_voucher_template_orderpricelimit']	= 'Cantidad de consumo';
$lang['admin_voucher_template_describe']		= 'Descripción del cupón';
$lang['admin_voucher_template_image']			= 'Imagen de cupón';
$lang['admin_voucher_template_points']			= 'Número de puntosnecesarios para canjear';
$lang['admin_voucher_template_adddate']			= 'Agregartiempo';
$lang['admin_voucher_template_list_tip']		= 'Si el cupónestablecidomanualmenteexpira, el usuario ya no recibirá el cupón, pero el cupón ya recibido se puedeseguirusandonormalmente';
$lang['admin_voucher_template_giveoutnum']		= 'recibido';
$lang['admin_voucher_template_usednum']			= 'Usado';

return $lang;