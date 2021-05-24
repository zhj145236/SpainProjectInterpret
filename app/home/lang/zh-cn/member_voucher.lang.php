<?php
$lang['voucher_unavailable']    = 'La función de cupón no se ha activado';
$lang['voucher_quotastate_activity']	= 'Normal';
$lang['voucher_quotastate_cancel']    = 'Cancelar';
$lang['voucher_quotastate_expire']    = 'Terminar';
$lang['voucher_templatestate_usable']	= 'Funcionado';
$lang['voucher_templatestate_disabled']= 'No Funcionado';
$lang['voucher_quotalist']= 'Lista de paquetes';
$lang['voucher_applyquota']= 'Solicitar paquete';
$lang['voucher_applyadd']= 'Comprar paquete';
$lang['voucher_templateadd']= 'Nuevo cupón agregado';
$lang['voucher_templateedit']= 'Editar cupones';
$lang['voucher_templateinfo']= 'Cupón detallado';
/**
 * 套餐申请
 */
$lang['voucher_apply_num_error']= 'El número no puede estar vacío, y debe ser un número entero entre 1-12';
$lang['voucher_apply_fail']= 'La aplicación del paquete falló';
$lang['voucher_apply_succ']= 'La aplicación del paquete es exitosa, por favor espere la revisión';
$lang['voucher_apply_date']= 'Fecha de solicitud';
$lang['voucher_apply_num']    		= 'Número de aplicaciones';
$lang['voucher_apply_addnum']    		= 'Cantidad de compra del paquete';
$lang['voucher_apply_add_tip1']    		= 'La unidad de compra es mensual (30 días), hasta 12 meses a la vez, y puede emitir cupones mensualmente durante el período de compra';
$lang['voucher_apply_add_tip2']    		= 'Tienes que pagar% s Yuan por mes';
$lang['voucher_apply_add_tip3']    		= 'Publique hasta cada mes de actividades% s veces';
$lang['voucher_apply_add_tip4']    		= 'El tiempo del paquete se calcula después de la aprobación';
$lang['voucher_apply_add_confirm1']    	= 'Tienes que pagar en total';
$lang['voucher_apply_add_confirm2']    	= 'Peso,confirmar la compra？';
$lang['voucher_apply_buy_succ']			= 'Paquete de éxito de compra';

/**
 * 套餐
 */
$lang['voucher_quota_startdate']    	= 'Hora de inicio';
$lang['voucher_quota_enddate']    		= 'Tiempo de finalización';
$lang['voucher_quota_timeslimit']    	= 'El número de actividades es limitado';
$lang['voucher_quota_publishedtimes']   = 'Número de actividades publicadas';
$lang['voucher_quota_residuetimes']    	= 'Número restante de actividades';
/**
 * 代金券模板
 */
$lang['voucher_template_quotanull']			= 'Actualmente no hay paquetes disponibles, por favor solicitar el paquete';
$lang['voucher_template_noresidual']		= "El paquete actual está lleno de actividades% s de información de actividad, ya no puede publicar actividades";
$lang['voucher_template_pricelisterror']	= 'Problemas de configuración de denominación de cupones de plataforma, póngase en contacto con el servicio al cliente para ayudar a resolver';
$lang['voucher_template_title_error'] 		= "El nombre de la plantilla no puede estar vacío y no puede exceder los 50 caracteres";
$lang['voucher_template_total_error'] 		= "La cantidad que se puede emitir no puede estar vacía y debe ser un número entero";
$lang['voucher_template_price_error']		= "El diseño del molde no puede estar vacío y debe ser un número entero, y la denominación no puede ser mayor que el límite";
$lang['voucher_template_limit_error'] 		= "El límite de consumo de la plantilla no puede estar vacío y debe ser un número";
$lang['voucher_template_describe_error'] 	= "La descripción de la plantilla no puede estar vacía y no puede ser mayor a 255 caracteres";
$lang['voucher_template_title']			= 'Nombre del cupón';
$lang['voucher_template_enddate']		= 'Válido';
$lang['voucher_template_enddate_tip']		= 'El período de validez debe estar dentro del período de validez del paquetes; el período de validez del paqueteque se está utilizando es';
$lang['voucher_template_price']			= 'Cantidad de denominación';
$lang['voucher_template_total']			= 'Total disponible';
$lang['voucher_template_eachlimit']		= 'Límite por persona';
$lang['voucher_template_eachlimit_item']= 'No limitado';
$lang['voucher_template_orderpricelimit']	= 'Cantidad de consumo';
$lang['voucher_template_describe']		= 'Descripción del cupón';
$lang['voucher_template_styleimg']		= 'Seleccione la piel del cupón';
$lang['voucher_template_styleimg_text']	= 'Cupones de la tienda';
$lang['voucher_template_image']			= 'Imagen de cupones';
$lang['voucher_template_image_tip']		= 'La imagen se mostrará en el módulo de cupones del centro de puntos, haga clic en Guardar después de la carga, el tamaño recomendado de 160 * 160px';
$lang['voucher_template_list_tip1'] = "1、Después de que el cupón se haya establecido manualmente, el usuario no podrá recibir el cupón, pero el cupón que se haya recibido aún estará disponible";
$lang['voucher_template_list_tip2'] = "2、Las plantillas de cupones y los cupones emitidos caducan automáticamente";
$lang['voucher_template_backlist'] 	= "Devuelve la lista";
$lang['voucher_template_giveoutnum']= 'Recibido';
$lang['voucher_template_usednum']	= 'Usado';
/**
 * 代金券
 */
$lang['voucher_voucher_state'] = "Estado";
$lang['voucher_voucher_state_unused'] = "No usado";
$lang['voucher_voucher_state_used'] = "Usado";
$lang['voucher_voucher_state_expire'] = "Vencido";
$lang['voucher_voucher_price'] = "Cantidad";
$lang['voucher_voucher_storename'] = "Tiendas aplicable";
$lang['voucher_voucher_indate'] = "Válido";
$lang['voucher_voucher_usecondition'] = "Condiciones de uso";
$lang['voucher_voucher_usecondition_desc'] = "Orden completa";
$lang['voucher_voucher_vieworder'] = "Ver orden";
$lang['voucher_voucher_readytouse'] = "Uso de ahora";
$lang['voucher_voucher_code'] = "Codificación";

$lang['voucher_code'] = "Codificación de cupones";
$lang['voucher_use'] = "Uso";

return $lang;