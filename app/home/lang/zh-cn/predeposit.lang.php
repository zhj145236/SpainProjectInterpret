<?php

/**
 * 预存款功能公用
 */
$lang['predeposit_no_record']	 			= 'No hay registrocoincidente';
$lang['predeposit_unavailable']	 			= 'La función de depósitoprevio no estáhabilitada en el sistema';
$lang['predeposit_parameter_error']			= 'Error de parametro';
$lang['predeposit_record_error']			= 'Error la información de registro';
$lang['predeposit_userrecord_error']		= 'Error la información de miembro';
$lang['predeposit_payment']					= 'Método de pago';
$lang['predeposit_addtime']					= 'Tiempo de creación';
$lang['predeposit_apptime']					= 'Tiempo de solicitud';
$lang['predeposit_checktime']				= 'Tiempo de aprobación';
$lang['predeposit_paytime']					= 'Tiempo de pago';
$lang['predeposit_addtime_to']				= 'a';
$lang['predeposit_trade_no']				= 'Número del transacción';
$lang['predeposit_adminremark']				= 'Nota';
// $lang['predeposit_adminremark']				= '管理员备注';
$lang['predeposit_recordstate']				= 'Estado de registro';
$lang['predeposit_paystate']				= 'Estado';
$lang['predeposit_backlist']				= 'Volver a la lista';
$lang['predeposit_pricetype']				= 'Tipo de pre-depósito';
$lang['predeposit_pricetype_available']		= 'Saldodisponible';
$lang['predeposit_pricetype_freeze']		= 'Cantidadcongelada';
$lang['predeposit_price']					= 'Monto';
$lang['predeposit_payment_error']			= 'Error el método de pago';
$lang['predeposit_recordimgs']				= 'Captura de pantalla de la transferencia';
$lang['predeposit_recordimgs_upload']		= 'Cargar la imagen';
$lang['predeposit_copy']					= 'Dale clic en copiar';
$lang['predeposit_copy_success']			= 'Copiarcorrectamente';
/**
 * 充值功能公用
 */
$lang['predeposit_rechargesn']					= 'Número de pedidode recarga';
$lang['predeposit_rechargewaitpaying']			= 'No pagado';
// $lang['predeposit_rechargepaysuccess']			= '已支付';
$lang['predeposit_rechargepaysuccess']			= 'recargado';
$lang['predeposit_rechargestate_auditing']		= 'Aprobaciónpendiente';
$lang['predeposit_rechargestate_approved']		= 'Revisado';
$lang['predeposit_rechargestate_completed']		= 'Completado';
$lang['predeposit_rechargestate_closed']		= 'Cancelado';
$lang['predeposit_recharge_price']				= 'Cantidad de recarga';
$lang['predeposit_recharge_huikuanname']		= 'Nombre del remitente';
$lang['predeposit_recharge_huikuanbank']		= 'Banco de transferencia';
$lang['predeposit_recharge_huikuandate']		= 'Fecha de la remesa';
$lang['predeposit_recharge_memberremark']		= 'Notas de mienbro';
$lang['predeposit_recharge_success']			= 'La recargacon éxit';
$lang['predeposit_recharge_fail']				= 'La recargafalló';
$lang['predeposit_recharge_pay']				= 'Pagar';
$lang['predeposit_recharge_view']				= 'Ver detalles';
$lang['predeposit_recharge_paydesc']			= 'Pedidos de recargapre-depósito';
$lang['predeposit_recharge_pay_offline']		= 'confirmadopor la plataformapendiente';
$lang['predeposit_recharge_zhuanzhangbank']		= 'Banco beneficiario';
$lang['predeposit_recharge_selectbank']			= 'Seleccione el banco de remesas';
$lang['predeposit_recharge_delimgs']			= 'Cancelar la imagen';
/**
 * 充值添加
 */
$lang['predeposit_recharge_add_pricenull_error']			= 'Por favor agreguela cantidad de recarg';
$lang['predeposit_recharge_add_pricemin_error']				= 'La cantidad de recarga es un número mayor o igual a 0.01';
$lang['predeposit_recharge_add_hint']						= '<span style="color:orange;">Subaunacaptura de pantalla de la transferencia. Asegúrese de que la captura de pantalla sea clara y contengainformaciónimportante, como el número de serie del banco de transferencia, el banco de transferencia, el monto de la transferencia y el tiempo de transferencia</span>';
$lang['predeposit_recharge_selectbank_hint']				= '<span style="color:orange;">Seleccione el banco de remesas, haga clic en él y seráredirigido al sitio web oficial del banco correspondiente para la transferencia.Si no hay un banco para elegir, maneje la transferenciaustedmismo</span>';
$lang['predeposit_recharge_recordimgs_null']				= 'Subeunacaptura de pantalla de la transferencia';
/**
 * 充值信息删除
 */
$lang['predeposit_recharge_del_success']		= 'Información de recargaeliminadacorrectamente';
$lang['predeposit_recharge_del_fail']		= 'No se pudoborrar la información de recarga';
/**
 * 提现功能公用
 */
$lang['predeposit_cashsn']				= 'Número de solicitud';
$lang['predeposit_cashmanage']			= 'Gestión de retiros';
$lang['predeposit_cashwaitpaying']		= 'En esperapagado';
$lang['predeposit_cashpaysuccess']		= 'Pago exitosa';
$lang['predeposit_cashstate_auditing']	= 'Aprobaciónpendiente';
$lang['predeposit_cashstate_completed']	= 'Completadoq';
$lang['predeposit_cashstate_closed']		= 'Cancelado';
$lang['predeposit_cash_price']				= 'Cantidad de retiro';
$lang['predeposit_cash_shoukuanname']			= 'Nombre del titular de la cuenta';
$lang['predeposit_cash_shoukuanbank']			= 'Banco beneficiario';
$lang['predeposit_cash_shoukuanaccount']		= 'Recibiendocuenta';
$lang['predeposit_cash_shoukuanname_tip']	= 'Se recomiendaencarecidamente dar prioridad a los cuatro bancosestatales (Banco de China, Banco de Construcción de China, Banco Industrial y Comercial de China y Banco Agrícola de China) <br/>Por favor, complete el nombredetallado de la sucursalbancaria de la cuenta. cuentasvirtualescomo Alipay y Tenpay, complete "Alipay", "Tenpay"';
$lang['predeposit_cash_shoukuanaccount_tip']	= 'Cuentabancaria o cuenta virtual (Alipay, Tenpay, etc)';
$lang['predeposit_cash_shoukuanauser_tip']	= 'Nombre de la persona queabrió la cuentareceptora';
$lang['predeposit_cash_shortprice_error']		= 'Cantidad de pre-depósitoinsuficiente';
$lang['predeposit_cash_price_tip']				= 'Cantidaddisponibleactual';

$lang['predeposit_cash_availablereducedesc']	=  'La solicitud de retiro del miembro reduce la cantidad de depósitoprevio';
$lang['predeposit_cash_freezeadddesc']	=  'El miembrosolicita el retiro para aumentar la cantidadcongelada del depósitoprevio';
$lang['predeposit_cash_availableadddesc']	=  'El miembroelimina el retiro y aumenta el monto del depósitoprevio';
$lang['predeposit_cash_freezereducedesc']	=  'El retiroporeliminación de miembros reduce la cantidad de pre-depósito';

/**
 * 提现添加
 */
$lang['predeposit_cash_add_shoukuannamenull_error']		= 'Ingrese el nombre del beneficiario';
$lang['predeposit_cash_add_shoukuanbanknull_error']		= 'Por favor complete el banco receptor';
$lang['predeposit_cash_add_pricemin_error']				= 'El monto del retiro es un número mayor o igual a 0.01';
$lang['predeposit_cash_add_enough_error']				= 'Saldo de cuentainsuficiente';
$lang['predeposit_cash_add_pricenull_error']			= 'Por favor complete el monto del retiro';
$lang['predeposit_cash_add_shoukuanaccountnull_error']	= 'Por favor complete la cuentareceptora';
$lang['predeposit_cash_add_success']					= 'Su solicitud de retiro se ha enviadocorrectamente, espere a que el sistemaprocese';
$lang['predeposit_cash_add_fail']						= 'No se pudoagregar la información de retiro';
/**
 * 提现信息删除
 */
$lang['predeposit_cash_del_success']	= 'La información de retiro se elimina con éxito';
$lang['predeposit_cash_del_fail']		= 'No se pudoborrar la información de retiro';
/**
 * 支付接口
 */
$lang['predeposit_payment_pay_fail']		= 'Recargafallida';
$lang['predeposit_payment_pay_success']		= 'La recarga se ha realizadocorrectamente y voy a realizar mi pedido';
$lang['predepositrechargedesc']	=  'Recargar';
/**
 * 出入明细 
 */
$lang['predeposit_log_stage'] 			= 'Tipo';
$lang['predeposit_log_stage_recharge']	= 'Recargar';
$lang['predeposit_log_stage_cash']		= 'Retiro de efctivo';
$lang['predeposit_log_stage_order']		= 'Consumo';
$lang['predeposit_log_stage_artificial']= 'Modificarmanualmente';
$lang['predeposit_log_stage_system']	= 'Sistema';
$lang['predeposit_log_stage_income']	= 'ingresos';
$lang['predeposit_log_desc']			= 'Descripción del cambio';

//pd_cash_list
$lang['predeposit_application_withdrawal']	= 'Solicitar un retiro';

//pd_log_list
$lang['predeposit_online_recharge']	= 'Recarga en línea';
$lang['predeposit_spending']	= 'gasto';
$lang['predeposit_freeze']	= 'Congelar';
$lang['predeposit_pay']	= 'pagar';
$lang['predeposit_recharge_card_recharge']	= 'Recargar la tarjeta';
$lang['predeposit_available_balance']	= 'El saldo de la tarjeta de recargadisponible';
$lang['predeposit_freeze_balance']	= 'Congele el saldo de la tarjeta de recarga';

//rechargecard_add
$lang['predeposit_recharge_card_number']	= 'el número de la tarjeta de recarga de la plataforma';
$lang['predeposit_enter_card_number']	= 'Por favor ingreseel número de la tarjeta de recarga de la plataforma';
$lang['predeposit_card_length_less']	= 'La longitud del número de la tarjeta de recarga de la plataforma es inferior a 50';


//controller
$lang['platform_recharge_card_number_cannot_empty']	= 'El número de tarjeta de recarga de la plataforma no puedeestarvacío y la longitud no puedeser superior a 50';
$lang['platform_recharge_card_successfully_used']	= 'La tarjeta de recarga de la plataforma se utilizó con éxito';
$lang['please_enter_payment_password']	= 'ntroducetucontraseña de pago';
$lang['payment_password_error']	= 'La contraseña de pago es incorrecta';
$lang['detail_list']	= 'Lista dedetalles';
$lang['prepaid_phone_list']	= 'Lista de recarga';
$lang['withdrawal_list']	= 'Lista de retiros';
$lang['balance_recharge_card']	= 'Saldo de la tarjeta de recarga';
$lang['member_mobile_error']	= 'El número de teléfonomóvilestámal';
$lang['recharge_info_not_exist']	= 'La orden no existe!';
$lang['payment_repeat']	= 'Su pedido ha sidopagado, por favor no repita el pago!';

$lang['predeposit_withdraw_min']             = 'Importemínimo de retirada';
$lang['predeposit_withdraw_max']             = 'Importemáximo de retirada';
$lang['predeposit_last_withdraw_time_error']             = 'Su últimotiempo de retiradafue';
return $lang;

