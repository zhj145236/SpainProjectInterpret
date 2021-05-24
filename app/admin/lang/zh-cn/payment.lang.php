<?php

$lang['unionpay_merid'] = 'Número de comerciante de UnionPay';
$lang['unionpay_signcert_path'] = 'Certificado de clave privada';
$lang['unionpay_signcert_pwd'] = 'Contraseña del certificado';
$lang['unionpay_merid_desc'] = '';
$lang['unionpay_signcert_path_desc'] = '';
$lang['unionpay_signcert_pwd_desc'] = '';

$lang['bankname'] = 'Nombrecompleto del banco';
$lang['banksn'] = 'Número de cuentabancaria';
$lang['bankname_placeholder'] = 'Por favor ingrese el nombrecompleto del banco';
$lang['banksn_placeholder'] = 'Por favor, ingrese el número de cuentabancaria';
$lang['bankname_desc'] = '';
$lang['banksn_desc'] = '';

$lang['alipay_appid'] = 'Alipay APPID';
$lang['alipay_appid_desc'] = 'Alipay APPID<a href="https://b.alipay.com/" target="_blank">dirección de la aplicación</a>';
$lang['app_cert_path'] = 'Ruta de certificación de la aplicación';
$lang['app_cert_path_desc'] = '（Asegúrese de que el archivo del certificado sea legible), tome el entorno del panel de control de pagoda del sistema Linux comoejemplo: /www/wwwroot/www.domain.com/plugins/payments/alipay/cert /appCertPublicKey.crt ';
$lang['alipay_cert_path'] = 'Ruta del';
$lang['alipay_cert_path_desc'] = 'Asegúrese de que el archivo del certificado sea legible), tome el entorno del panel de control pagoda del sistema Linux comoejemplo: /www/wwwroot/www.domain.com/plugins/payments/alipay/cert/alipayCertPublicKey_RSA2.crt';
$lang['root_cert_path'] = 'Ruta del certificadoraíz de Alipay';
$lang['root_cert_path_desc'] = 'Asegúrese de que el archivo del certificado sea legible), tome el entorno del panel de control de pagoda del sistema Linux comoejemplo: /www/wwwroot/www.domain.com/plugins/payments/alipay/cert /alipayRootCert.crt';
$lang['private_key'] = 'Clave privada';
$lang['private_key_desc'] = '';
$lang['alipay_trade_refund_state'] = 'Paga la forma original de reembolso';
$lang['alipay_trade_refund_state_desc'] = 'Al usar Alipay para pagar el reembolso de un pedido (sin utilizar el pago con tarjeta de depósito y recarga), el reembolso de WeChat volverá a la forma original';
$lang['alipay_trade_transfer_state'] = 'Retiro y transferencia de efectiv';
$lang['alipay_trade_transfer_state_desc'] = 'Cuando un usuariousaunacuenta de Alipay para solicitar un retiro de efectivo, transfierafondosdirectamente a Alipay';
$lang['wx_appid'] = 'APPID';
$lang['wx_appid_desc'] = 'WeChat AppId<a href="https://pay.weixin.qq.com" target="_blank">dirección de la aplicación</a>';
$lang['wx_appsecret'] = 'APPSECRET';
$lang['wx_appsecret_desc'] = 'AppSecret en WeChat';
$lang['wx_mch_id'] = 'MCH_ID';
$lang['wx_mch_id_desc'] = 'Cuando los comerciantessolicitenporsímismos, ingrese el número de comerciante de WeChat Pay quehayansolicitado; cuando los proveedores de serviciossoliciten, ingrese el número de comerciante de WeChat Pay proporcionadopor el proveedor de servicios';
$lang['wx_key'] = 'KEY';
$lang['wx_key_desc'] = 'Cuando los comerciantessolicitenporsímismos, ingrese la clave de 32 bits de la plataformacomercialquesolicitaron; cuando el proveedor de serviciossolicite, complete la clave de 32 bits proporcionadapor el proveedor de servicios';
$lang['wx_trade_refund_state'] = 'Paga la forma original de reembolso';
$lang['wx_trade_refund_state_desc'] = 'Cuando use WeChat para pagar el reembolso de un pedido (sin depósitoprevio y pago con tarjeta de recarga), el reembolso de WeChat se devolverá de la mismamanera. Debeconfigurar el pago de WeChat y configurarapiclient_cert y apiclient_key para realizaroperacionesposteriores<a href = "https://kf.qq.com/faq/161222NneAJf161222U7fARv.html" target = "_ blank">dirección de la aplicación</a>';
$lang['wx_trade_transfer_state'] = 'Retirarefectivo y ganar dinero';
$lang['wx_trade_transfer_state_desc'] = '用户使用微信账号申请提现时直接打款到微信。需要配置微信支付同时配置好apiclient_cert和apiclient_key才可以进行后续操作<a href="https://kf.qq.com/faq/161222NneAJf161222U7fARv.html" target="_blank">申请地址</a>';
$lang['wx_sslcert_path'] = 'apiclient_cert.pem路径';
$lang['wx_sslcert_path_desc'] = 'apiclient_cert.pem文件在服务器的路径, 以linux系统 宝塔控制面板环境为例："/www/wwwroot/www.域名.com/plugins/payments/wxpay_native/cert/apiclient_cert.pem"';
$lang['wx_sslkey_path'] = 'apiclient_key.pem路径';
$lang['wx_sslkey_path_desc'] = 'apiclient_key.pem文件在服务器的路径, 以linux系统 宝塔控制面板环境为例："/www/wwwroot/www.域名.com/plugins/payments/wxpay_native/cert/apiclient_key.pem"';



$lang['allinpay_appid'] = 'APPID';
$lang['allinpay_appid_desc'] = '通联支付中的AppId<a href="http://www.allinpay.com/" target="_blank">申请地址</a>';
$lang['allinpay_mch_id'] = 'ID de comerciante';
$lang['allinpay_mch_id_desc'] = 'Cuando los comerciantessolicitenporsímismos, ingrese el número de comerciante de pagos de Tonglianquesolicitaron';
$lang['allinpay_key'] = 'KEY';
$lang['allinpay_key_desc'] = 'Cuando los comerciantessolicitenporsímismos, complete la clave de la plataformacomercialquesolicitaron';
$lang['allinpay_sub_appid1'] = 'Cuentaoficial de WeChat APPID';
$lang['allinpay_sub_appid1_desc'] = '通联支付中的微信公众号AppId<a href="https://mp.weixin.qq.com/" target="_blank">申请地址</a>';
$lang['allinpay_sub_appsecret1'] = 'Cuentaoficial de WeChat APPSECRET';
$lang['allinpay_sub_appsecret1_desc'] = 'Cuentaoficial de WeChat APPSECRET en Tonglian Pay';
$lang['allinpay_sub_appid2'] = 'APPID del Mini Programa WeChat';
$lang['allinpay_sub_appid2_desc'] = '通联支付中的微信小程序AppId<a href="https://mp.weixin.qq.com/" target="_blank">申请地址</a>';

$lang['xcx_appid'] = 'APPID';
$lang['xcx_appid_desc'] = '小程序中的AppId';
$lang['xcx_appsecret'] = 'APPSECRET';
$lang['xcx_appsecret_desc'] = '小程序中的AppSecret';
$lang['xcx_mch_id'] = 'MCH_ID';
$lang['xcx_mch_id_desc'] = '商户自己申请时，填写自己申请的微信支付商户号；服务商申请时，填写服务商提供的微信支付商户号';
$lang['xcx_key'] = 'KEY';
$lang['xcx_key_desc'] = '商户自己申请时，填写自己申请的商户平台的32位密钥；服务商申请时，填写服务商提供的32位密钥';

$lang['payment_index_pc'] = 'Pago de PC';
$lang['payment_index_h5'] = 'Pago de  H5';
$lang['payment_index_app'] = 'App pago';
$lang['payment_index_name'] = 'Método de pago';
$lang['payment_index_enable_ing'] = 'En abriendo';
$lang['payment_index_disable_ing'] = 'En cerrando';
$lang['payment_index_enable'] = 'habilitado';
$lang['payment_index_disable'] = 'Deshabilitado';
$lang['payment_index_platform'] = 'Plataforma de ajuste';
$lang['payment_index_desc'] = 'descripción';

$lang['please_open_wechat_payment'] = 'Por favor, active y configure primero el pago del código WeChat';
$lang['please_open_alipay_payment'] = 'Por favor, active el pago de PC alipay y configúreloprimero';

return $lang;
?>
