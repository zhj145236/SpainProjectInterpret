<?php

$lang['inform'] = 'informe';

$lang['inform_state_handled'] = 'procesado';
$lang['inform_state_unhandle'] = 'No procesado';
$lang['inform_member_name'] = 'reportero';
$lang['inform_subject'] = 'Asunto del informe';
$lang['inform_type'] = 'Tipo de informe';
$lang['informtype_desc'] = 'Descripción del tipo de informe';
$lang['inform_pic'] = 'Imagen';
$lang['inform_pic_none'] = 'Aún no hay imagen';
$lang['inform_datetime'] = 'Hora del informe';
$lang['inform_content'] = 'Informarcontenido';
$lang['inform_handle_message'] = 'Manejarinformación';
$lang['inform_handle_type'] = 'Resultado de procesamiento';
$lang['inform_handle_type_unuse'] = 'Informe no válido';
$lang['inform_handle_type_venom'] = 'Informemalicioso';
$lang['inform_handle_type_valid'] = 'Informeválido';
$lang['inform_handle_type_unuse_message'] = 'Informe no válido: el producto se venderánormalmente';
$lang['inform_handle_type_venom_message'] = 'Informemalicioso: se cancelarán todos los informes no procesados de este usuario y se leprohibirá al usuarioinformar';
$lang['inform_handle_type_valid_message'] = 'Informeválido: el producto se eliminará de los estantes en violación de las regulaciones';
$lang['inform_subject_add'] = 'Agregarasunto';
$lang['inform_type_add'] = 'Agregartipo';

$lang['inform_text_none'] = 'Ninguno';
$lang['inform_text_handle'] = 'Proceso';
$lang['inform_text_select'] = 'Por favor seleccionar...';

/**
 * 提示信息
 */
$lang['inform_subject_add_null'] = 'El asunto del informe no puedeestarvacío y no puedetenermás de 100 caracteres';
$lang['inform_handle_message_null'] = 'El mensaje de procesamiento no puedeestarvacío y no puedetenermás de 100 caracteres';
$lang['inform_type_null'] = 'El tipo de informe no puedeestarvacío y no puedetenermás de 50 caracteres';
$lang['inform_type_desc_null'] = 'La descripción del tipo de informe no puedeestarvacía y no puedesuperar los 100 caracteres';
$lang['inform_handle_confirm'] = 'Confirmar para manejar el informe?';
$lang['inform_type_error'] = 'El tipo de informe no existe, comuníquese con el administrador de la plataforma para agregar el tipo';
$lang['inform_help1'] = 'El administradorestablece el tipo de informe y el asunto del informe. En la página de información del producto, los miembrospuedendenunciarproductosilegalessegún el asunto del informe';
$lang['inform_help2'] = 'Haga clic en los detalles para ver el contenidoinformado';
$lang['inform_help3'] = 'Ver el contenido del informeprocesado';
$lang['inform_help4'] = 'Puedeagregarvariostemas de informebajo el mismotipo de informe';
$lang['inform_help5'] = 'Los miembrospuedendenunciarproductosilegalessegún el tema del informe';

$lang['goods_be_informed'] = 'El producto ha sidoinformado y la plataformatieneprohibido vender';

return $lang;
