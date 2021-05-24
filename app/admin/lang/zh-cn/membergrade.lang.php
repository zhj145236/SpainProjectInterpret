<?php

$lang['mg_addtime'] = 'agregartiempo';

$lang['exp_rule'] = 'Reglas de adquisición de valor de experiencia';
$lang['exp_login'] = 'El miembroiniciasesiónporprimeravez todos los días';
$lang['exp_comments'] = 'Solicitarcomentariossobreproductos';
$lang['exp_orderrate'] = 'Proporción de la cantidad de consumo y el valor de la experiencia del regalo';
$lang['exp_orderrate_tips'] = 'El valor es un número mayor que 0, porejemplo: establecido en 10, lo que indica que el consumo de 10 unidades de moneda da 1 valor de experiencia';

$lang['exp_ordermax'] = 'Puntos de experiencia de regalomáximosporpedido';
$lang['exp_ordermax_tips'] = 'El valor es un número mayor o igualque 0. Completar 0 significaque no hay límite para el valor máximo de experiencia. Ejemplo: establecido en 100, indica que el valor de experiencia de regaloporpedido es comomáximo 100 valor de experiencia';


$lang['explog_membername'] = 'Nombre de miembro';
$lang['exp_value'] = 'Valor de experiencia';
$lang['explog_addtime'] = 'Agregartiempo';
$lang['explog_stage'] = 'Etapa de operación';
$lang['explog_desc'] = 'Descripción de la operación';
$lang['ds_exppoints_manage'] = 'Gestión del valor de la experiencia';
$lang['ds_exppoints_setting'] = 'Configuración de reglas';
$lang['ds_exppoints_edit'] = 'Ajuste del valor de la experiencia';
$lang['ds_member_grade'] = 'Grado de miembro';

$lang['exppoints_index_help1'] = 'Gestión del valor de la experiencia, quemuestra los detalles del aumento y la disminución del valor de la experiencia del miembro. Ningúnsigno antes del valor de la experienciasignificaaumento, y el signo "-" significadisminución';

$lang['exppoints_greater_than'] = 'El valor de la experiencia debe ser mayor que';



/**
 * 经验值编辑
 */
$lang['admin_exppoints_userrecord_error'] = 'Error de información del miembro';
$lang['admin_exppoints_membername'] = 'Nombre de miembro';
$lang['admin_exppoints_operatetype'] = 'Tipo de aumento o disminución';
$lang['admin_exppoints_operatetype_add'] = 'Aumentar';
$lang['admin_exppoints_operatetype_reduce'] = 'reducir';
$lang['admin_exppoints_pointsnum'] = 'Valor del valor de la experiencia';
$lang['admin_exppoints_pointsdesc'] = 'Descripción';
$lang['admin_exppoints_pointsdesc_notice'] = 'La informacióndescriptiva se mostrará en la páginacorrespondiente de los detalles del valor de la experiencia, visible tanto para los miembroscomo para los administradores';
$lang['admin_exppoints_member_error_again'] = 'La información del miembro es incorrecta, por favor vuelva a completar el nombre del miembro';
$lang['admin_exppoints_null_error'] = 'Agregue valor de experiencia';
$lang['admin_exppoints_min_error'] = 'El valor de la experiencia debe ser mayor que 0';
$lang['admin_exppoints_short_error'] = 'El valor de experiencia es insuficiente, el valor de experiencia actual del miembro es';
$lang['admin_exppoints_addmembername_error'] = 'Por favor ingrese un nombre de miembro';
$lang['admin_exppoints_member_tip'] = 'miembro';
$lang['admin_exppoints_member_tip_2'] = ', el valor de la experiencia actual es';


/*经验值规则设置*/
$lang['membergrade_index_help1'] = 'Cuando un miembroalcanza un ciertonivel, se actualizaráautomáticamente a esenivel. Establezca el nivel de membresía con cuidado';
$lang['membergrade_index_help2'] = 'Sugerencia: 1. El nivel debe aumentarsegradualmente, porejemplo, el valor de experienciarequerido para el "Nivel 2" es más alto que el del "Nivel 1"; 2. El valor de experienciarequerido para el el primer nivel debe establecerse en 0; tres, complete la informacióncompleta del nivel';
$lang['membergrade_level_name']= 'Nombre de nivel';
$lang['membergrade_exppoints'] = 'Puntos de experiencia';
$lang['membergrade_add'] = 'Agregarcalificación';
$lang['membergrade_remove'] = 'eliminar';

$lang['please_complete_info'] = 'Por favor complete la informacióncompletamente';
$lang['should_be_integer'] = 'Debeser un número entero';

$lang['membergrade_exppoints_list'] = 'Lista de valores de experiencia';

return $lang;