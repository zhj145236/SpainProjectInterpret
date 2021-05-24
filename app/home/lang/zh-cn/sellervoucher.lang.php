<?php
$lang['voucher_unavailable']    = 'La función de cupón no se ha activado';
$lang['voucher_quotastate_activity']	= 'Normal';
$lang['voucher_quotastate_cancel']    = 'Cancelar';
$lang['voucher_quotastate_expire']    = 'Terminar';
$lang['voucher_templatestate_usable']	= 'Válido';
$lang['voucher_templatestate_disabled']= 'No válido';
$lang['voucher_quotalist']= 'Lista de paquete';
$lang['voucher_applyquota']= 'Solicitar paquete';
$lang['voucher_applyadd']= 'Comprarpaquete';
$lang['voucher_templateadd']= 'Agregarcupón';
$lang['voucher_templateedit']= 'Editarcupón';
$lang['voucher_templateinfo']= 'Detalles del cupones';
/**
 * 套餐申请
 */
$lang['voucher_apply_num_error']= 'La cantidad no puedeestarvacía y debe ser un número enteroentre 1 y 12';
$lang['voucher_apply_fail']= 'Error en la solicituddel paquete';
$lang['voucher_apply_succ']= 'La solicituddel paquete es exitosa, espere la revisión';
$lang['voucher_apply_date']= 'Fecha de solicitud';
$lang['voucher_apply_num']    		= 'Cantidad de solicitud';
$lang['voucher_apply_addnum']    		= 'Cantidad de compra del paquete';
$lang['voucher_apply_add_tip1']    		= 'La unidad de compra es de un mes (30 días) y se puedecomprar un máximo de 12 meses a la vez. Puedepublicar la actividad del bono mensualmentedurante el período de compra';
$lang['voucher_apply_add_tip2']    		= 'Debepagar %s Peso cada mes';
$lang['voucher_apply_add_tip3']    		= 'Un máximo de %s eventos de lanzamientopormes';
$lang['voucher_apply_add_tip4']    		= 'El tiempo del paquetecomienzadespués de la aprobación';
$lang['voucher_apply_add_confirm1']    	= 'ebepagar en total';
$lang['voucher_apply_add_confirm2']    	= 'Peso,¿confirma la compra？';
$lang['voucher_apply_buy_succ']			= 'Compra del paqueteexitosa';

/**
 * 套餐
 */
$lang['voucher_quota_startdate']    	= 'Hora de inicio';
$lang['voucher_quota_enddate']    		= 'Hora de finalización';
$lang['voucher_quota_timeslimit']    	= 'Cantidad de atividadesen limitado';
$lang['voucher_quota_publishedtimes']   = 'Número de actividadespublicados';
$lang['voucher_quota_residuetimes']    	= 'Número de actividadesrestantes';
/**
 * 代金券模板
 */
$lang['voucher_template_quotanull']			= 'Actualmente no hay ningúnpaquetedisponible, soliciteprimero un paquete';
$lang['voucher_template_noresidual']		= "Las actividades del paquete actual estánllenas de información de actividad de %s, no se puedenpublicarmásactividades";
$lang['voucher_template_pricelisterror']	= 'Hay un problema con la configuración de la denominación del cupón de la plataforma, comuníquese con el servicio de atención al cliente para ayudar a resolverlo';
$lang['voucher_template_title_error'] 		= "El nombre de la plantilla no puedeestarvacío y no puedetenermás de 50 caracteres";
$lang['voucher_template_total_error'] 		= "La cantidaddisponible no puedeestarvacía y debe ser un número entero";
$lang['voucher_template_price_error']		= "La denominación de la plantilla no puedeestarvacía y debe ser un número entero, y la denominación no puedeser mayor que el límite";
$lang['voucher_template_limit_error'] 		= "El límite de consumo para el uso de plantillas no puedeestarvacío y debe ser un número";
$lang['voucher_template_describe_error'] 	= "La descripción de la plantilla no puedeestarvacía y no puedesuperar los 255 caracteres";
$lang['voucher_template_title']			= 'Nombre delcupón';
$lang['voucher_template_enddate']		= 'Período de validez';
$lang['voucher_template_enddate_tip']		= 'El período de validez debe estardentro del período de validez del paquete, y el período de validez del paqueteque se estáutilizando es';
$lang['voucher_template_price']			= 'Denominación';
$lang['voucher_template_total']			= 'Importe total a emitir';
$lang['voucher_template_eachlimit']		= 'Límitepor persona';
$lang['voucher_template_eachlimit_item']= 'No limitado';
$lang['voucher_template_orderpricelimit']	= 'Cantidad de consumo';
$lang['voucher_template_describe']		= 'Descripción de cupón';
$lang['voucher_template_styleimg']		= 'Seleccionaraspecto de cupón';
$lang['voucher_template_styleimg_text']	= 'Cupón de la tienda';
$lang['voucher_template_image']			= 'Imagen de cupón';
$lang['voucher_template_image_tip']		= 'La imagen se mostrará en el módulo de cupones del centro de puntos, haga clic en guardardespués de cargar, el tamañorecomendado es 160 * 160px';
$lang['voucher_template_list_tip1'] = "1、Unavezque expire la configuración manual del cupón, el usuario no podrárecibir el cupón, pero el cupón ya recibido se puedeseguirutilizando";
$lang['voucher_template_list_tip2'] = "2、La plantilla de cupón y el cupónemitidocaducaránautomáticamentedespués del vencimiento";
$lang['voucher_template_backlist'] 	= "Volver a la lista";
$lang['voucher_template_giveoutnum']= 'recibido';
$lang['voucher_template_usednum']	= 'Usado';
/**
 * 代金券
 */
$lang['voucher_voucher_state'] = "Estado";
$lang['voucher_voucher_state_unused'] = "No usar";
$lang['voucher_voucher_state_used'] = "Usado";
$lang['voucher_voucher_state_expire'] = "Vendido";
$lang['voucher_voucher_price'] = "Monto";
$lang['voucher_voucher_storename'] = "Tiendasaplicables";
$lang['voucher_voucher_indate'] = "Periodo de validez";
$lang['voucher_voucher_usecondition'] = "Condición de uso";
$lang['voucher_voucher_usecondition_desc'] = "Pedidocompleto";
$lang['voucher_voucher_vieworder'] = "Ver pedido";
$lang['voucher_voucher_readytouse'] = "Usarahora";
$lang['voucher_voucher_code'] = "código";

//index
$lang['set_meal_renewal']		= 'Renovación del paquete';
$lang['set_expiration_time']		= 'Hora de vencimiento del paquete';
$lang['please_buy_package_first']		= 'Actualmente no hay ningúnpaquetedisponible, primerocompre el paquete';
$lang['deduction_settlement_payment_days']		= 'Las tarifasrelacionadas se deducirán de la liquidación del período de facturación de la tienda';

//templateadd
$lang['store_classification']		= 'Categoría de tienda';
$lang['blank_defaults']		= 'Dejar en blanco para quecaduquepordefecto en 30 días';
$lang['image_upload']		= 'Carga de imagen';

$lang['voucher_template_eachlimit']		= 'Límitepor persona';

//controller
$lang['buy_voucher_package'] = 'Comprarpaquete de cupón';
$lang['buy'] = 'Comprar';
$lang['voucher_plan'] = 'Paquete de cupón, preciounitario';


return $lang;