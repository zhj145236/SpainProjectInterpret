<?php
/**
 * 抢购状态
 */
$lang['groupbuy_state_all'] = 'Total los compra';
$lang['groupbuy_state_verify'] = 'No revisado';
$lang['groupbuy_state_cancel'] = 'Cancelado';
$lang['groupbuy_state_progress'] = 'Pasado';
$lang['groupbuy_state_fail'] = 'Error el revisión';
$lang['groupbuy_state_close'] = 'Terminado';

/**
 * 抢购字段
 **/
$lang['group_template'] = 'Actividades de compra';
$lang['group_template_tip'] = 'Seleccione la actividad de complemento y el período de tiempo para participar';
$lang['group_name'] = 'Nombre de compra';
$lang['group_name_tip'] = 'Puedeingresar hasta 30 caracteres en la longitud del nombre del título';
$lang['group_goods_sel'] = 'Seleccionarproductos';
$lang['group_help'] = 'Instrucciones de compra';
$lang['start_time'] = 'Hora de inicio';
$lang['end_time'] = 'ahora de finalización';
$lang['goods_price'] = 'Precio original de las mercancías';
$lang['goods_storage'] = 'Número de inventario de productos';
$lang['store_price'] = 'Precio de centrocomercial';
$lang['groupbuy_price'] = 'Precio de compra';
$lang['groupbuy_price_tip'] = 'El precioinstantáneo es el preciopromocional del producto al participar en el evento. <br/>Debeser un número entre 0.01 y 1000000 (unidad: yuan). <br/> El precioinstantáneo debe incluir el franqueo. El sistema no cobra franqueopordefecto';
$lang['limit_type'] = 'Tipo de restricción';
$lang['virtual_quantity'] = 'Cantidad virtual';
$lang['min_quantity'] = 'Cantidadcorrecta';
$lang['sale_quantity'] = 'Cantidad de compralimitada';
$lang['max_num'] = 'Número total de producto';
$lang['group_intro'] = 'Introducción a estafiebre';
$lang['group_pic'] = 'Comprarfotografías';
$lang['group_edit'] = 'Editarcontenido';

$lang['groupbuy_class'] = 'Categoría de compra';
$lang['groupbuy_class_tip'] = 'Seleccione la categoría del productoapresurado';
$lang['groupbuy_area'] = 'Área de pertenencia';
$lang['groupbuy_goods'] = 'Comprarbienes';
$lang['groupbuy_goods_explain'] = 'Dale clic en el cuadro de entrada de arriba para seleccionar los productos para participar en la prisaporcomprar de los productoslanzados';
$lang['min_quantity_explain'] = 'El valor másbajo para unacompraexitosa, el valor predeterminado es "1"';
$lang['virtual_quantity_explain'] = 'Cantidad de compra virtual, que solo se usa para la visualización frontal y no afecta los registros de transacciones';
$lang['sale_quantity_explain'] = 'La cantidadmáximaque se puedeobtener para cada ID de comprador, por favor complete "0" para unacantidadilimitada';
$lang['max_num_explain'] = 'El número total de artículosadquiridos debe serigual o menorque la cantidad de inventario del artículo. <br/>Por favor, confirme de antemanoque la cantidad de inventario del artículo para participar en el evento es suficiente';
$lang['group_pic_explain'] = 'Para las imágenesutilizadas para ajustar la página del evento, utiliceimágenes con un ancho de 440 píxeles, unaaltura de 293 píxeles y un tamaño de 1M. <br/>Admite la carga en formato jpg, jpeg, gif, png';
$lang['group_pic_explain2'] = 'Imágenesutilizadas para ajustar la posición de recomendación en el lateral de la página y la posición de recomendación de la página de inicio. Utiliceunaimagen con un ancho de 210 píxeles, unaaltura de 180 píxeles y un tamaño de 1M. <br/>admitecarga en formato jpg, jpeg, gif, Png';
$lang['groupbuy_message_not_start'] = 'La actividad de compra de pánicoaún no ha comenzado';
$lang['groupbuy_message_close'] = 'La actividad de compra de pánico ha finalizado';
$lang['groupbuy_message_start'] = 'La cantidad es limitada, haga su pedido lo antes posible';
$lang['groupbuy_message_success'] = 'La compraexitosapuedecontinuarcomprando';

/**
 * 错误提示
 **/
$lang['groupbuy_unavailable'] = 'La función de compra de pánico no estáactivada';
$lang['no_groupbuy_template_in_progress'] = 'No hay actividad de compra de pánico en curso';
$lang['no_groupbuy_info'] = 'Sin información de compra';
$lang['no_groupbuy_template_soon'] = 'No hay actividad de compra de pánicopróxima';
$lang['no_groupbuy_template_history'] = 'Sin actividadhistórica de compras de pánico';
$lang['no_groupbuy'] = 'Actualmente no hay información de compra de pánico';
$lang['param_error'] = 'Error de parametro';
$lang['group_name_error'] = 'El nombre no puedeestarvacío';
$lang['group_goods_error'] = 'Elija un producto para comprar';
$lang['group_help_error'] = 'Las instrucciones de compra no puedenestarvacías';
$lang['start_time_error'] = 'La hora de inicio no puedeestarvacía';
$lang['end_time_error'] = 'La hora de finalización no puedeestarvacía';
$lang['groupbuy_price_error'] = 'Ingrese el preciocorrecto de compra de pánico';
$lang['group_pic_error'] = 'La imagencapturada no puedeestarvacía y debe estar en formato jpg / gif / png';
$lang['min_quantity_error'] = 'La cantidad a saquear no puedeestarvacía y debe ser un número entero mayor que 0';
$lang['virtual_quantity_error'] = 'La cantidad virtual no puedeestarvacía y debe ser un número entero';
$lang['sale_quantity_error'] = 'La cantidad de compralimitada no puedeestarvacía, debe ser un número entero';
$lang['max_num_error'] = 'El número total de productos no puedeestarvacío y debe sermenorque el inventario actual';
$lang['groupbuy_none'] = 'La plataformaactualmente no tieneactividades de compra de pánico en curso';
$lang['group_goods_is_exist'] = 'Este producto ya se encuentra en el período actual de prisaporcomprar, elijaotroproducto';
$lang['goods_info'] = 'Información del producto';
$lang['buyer_list'] = 'Historial de compras';
$lang['store_info'] = 'Información de la tienda';
$lang['groupbuy_not_state'] = 'La actividad de compra de pánicoaún no ha comenzado';
$lang['groupbuy_closed'] = 'La actividad de compra de pánico ha terminado';
$lang['goods_not_enough'] = 'Inventario de productosinsuficiente';
$lang['groupbuy_not_enough'] = 'Saldo de comprainsuficiente';
$lang['groupbuy_sale_quantity'] = 'Solo puedecomprarcomomáximo';
$lang['can_not_buy'] = 'No puedecomprar los productosquepublica';

$lang['groupbuy_add_success'] = 'Espere la revisióndespués del lanzamientoexitoso de la campaña de compra de pánico';
$lang['groupbuy_add_fail'] = 'No se pudopublicar la actividad de compra de pánico';
$lang['groupbuy_edit_success'] = 'Ediciónexitosa de la actividad de compra de pánico';
$lang['groupbuy_edit_fail'] = 'No se pudoeditar la actividad de compra de pánico';
$lang['groupbuy_quota_add_success'] = 'Compraexitosa de la compra del paquete de actividades';

/**
 * 文字
 **/
$lang['groupbuy_title'] = 'Mercancíaagotada';
$lang['groupbuy_soon'] = 'Próximamente';
$lang['groupbuy_history'] = 'Comprar en el anterior';
$lang['text_year'] = 'Años';
$lang['text_month'] = 'Mes';
$lang['text_day'] = 'Días';
$lang['text_tian'] = 'Días';
$lang['text_hour'] = 'Horas';
$lang['text_minute'] = 'Minutos';
$lang['text_second'] = 'Segundos';
$lang['text_to'] = 'a';
$lang['text_di'] = 'No';
$lang['text_qi'] = 'periodo';
$lang['text_groupbuy'] = 'Centro comercialroto';
$lang['text_groupbuy_list'] = 'Lista de compra';
$lang['text_groupbuy_detail'] = 'Detalles de compra';
$lang['text_goods_price'] = 'Precio original';
$lang['text_zhe'] = 'Pliegue';
$lang['text_discount'] = 'Descuento';
$lang['text_save'] = 'salvar';
$lang['groupbuy_buy'] = 'Quieroagarrar';
$lang['groupbuy_close'] = 'Terminado';
$lang['text_end_time'] = 'Hasta el final del período actual';
$lang['text_start_time'] = 'Al comienzo de este período';
$lang['text_no_limit'] = 'No limitado';
$lang['text_class'] = 'Clasificar';
$lang['text_price'] = 'Precio';
$lang['text_unit_price'] = 'Peciounidad';
$lang['text_default'] = 'Predeterminado';
$lang['text_sale'] = 'Venta';
$lang['text_rebate'] = 'Descuentow';
$lang['text_order'] = 'Odenar';
$lang['text_country'] = 'Paísentero';
$lang['text_people'] = 'Persona';
$lang['text_buy'] = 'Comprado';
$lang['text_jiangyu'] = 'estarán';
$lang['text_start'] = 'Empiece el agarre a tiempo';
$lang['see_store'] = 'Ve a la tienda';
$lang['see_goods'] = 'Ver productos';
$lang['to_see'] = 'Ve a ver';
$lang['history_hot'] = 'Ranking de ventascalientesanteriores';
$lang['current_hot'] = 'Comprascalientes en este número';
$lang['text_buyer'] = 'Comprador';
$lang['text_buy_count'] = 'Cantidad de compra';
$lang['text_buy_now'] = 'Comprarahora';
$lang['text_buy_time'] = 'Tiempo de pedido';
$lang['text_piece'] = 'Pieza';
$lang['text_goods_buy'] = 'Estamercancía se ha roto';
$lang['text_goods_store'] = 'La tiendadonde se encuentran las mercancías';
$lang['text_goods_commend'] = 'Artículosrecomendadospor la tienda';
$lang['text_read_agree1'] = 'He leído';
$lang['text_read_agree2'] = 'Y de acuerdo';
$lang['text_agreement'] = 'Acuerdo de servicio de desnat';
$lang['agree_must'] = 'Usted debe aceptar este Acuerdo';
$lang['store_goods_album_insert_users_photo'] = 'Insertarimágenes del álbum';
$lang['text_remain'] = 'restante';

/**
 * index
 */
$lang['groupbuy_index_no_right']			= 'El nivel de tienda no tiene este permiso';
$lang['groupbuy_index_in_audit']			= 'Su calificación de tiendaestábajorevisión';
$lang['groupbuy_index_add_success']			= 'La adición de actividad de compra con éxito';
$lang['groupbuy_index_add_fail']			= 'Adición de atividades de de comprafallado';
$lang['groupbuy_index_not_exists']			= 'No séhanencontradoactividades decompra';
$lang['groupbuy_index_modify_success']		= 'Modificaciónexitosa de la actividad de compragrupal';
$lang['groupbuy_index_modify_fail']			= 'No se pudomodificar la actividad de';
$lang['groupbuy_index_default_spec']		= 'especificacionespredeterminadas';
$lang['groupbuy_index_all_group']			= 'Total de comrpa';
$lang['groupbuy_index_unpublish']			= 'No lanzado';
$lang['groupbuy_index_canceled']			= 'Cancelado';
$lang['groupbuy_index_going']				= 'En el proceso';
$lang['groupbuy_index_finished']			= 'Completado';
$lang['groupbuy_index_ended']				= 'Terminado';
$lang['groupbuy_index_num']					= '(Cantidad de persona)';
$lang['groupbuy_index_amount']				= '(Cantidad)';
$lang['groupbuy_index_desc']				= 'Descripción';
$lang['groupbuy_index_order_num']			= 'número de pedidos';
$lang['groupbuy_index_input_name']			= 'Por favor, rellene el nombre delcompragrupal';
$lang['groupbuy_index_desc']				= 'Instrucciones decompragrupalw';
$lang['groupbuy_index_end_time']			= 'Hora de. Finalización';
$lang['groupbuy_index_search_first']		= 'Por favor, busqueprimero los artículosreservados';
$lang['groupbuy_index_input_right_num']		= 'Por favor, rellene el número correcto de personas';
$lang['groupbuy_index_input_right_amount']	= 'Por favor rellene el número de piezascorrectamente';
$lang['groupbuy_index_def_quantity_error']  = 'Por favor rellene el número pedidocorrectamente';
$lang['groupbuy_index_goods_sum_null']		= 'El número total de mercancías no puedeestarvacío';
$lang['groupbuy_index_goods_sum_one']		= 'El número total de mercancías no debe ser inferior a 1';
$lang['groupbuy_index_input_right_price']	= 'Por favor, rellene el precio de ajustecorrectamente';
$lang['groupbuy_index_max_per_user_error']  = 'Por favor rellene la cantidadlímitepor persona correctamente';
$lang['groupbuy_index_input_price']			= 'Por favor, rellene el precio decompragrupal';
$lang['groupbuy_index_base_info']			= 'Informaciónbásica de compragrupal';
$lang['groupbuy_index_activity_name']		= 'Nombre de actividades';
$lang['groupbuy_index_publish_now']			= 'Lanzamientoahora';
$lang['groupbuy_index_yes']					= 'si';
$lang['groupbuy_index_no']					= 'no';
$lang['groupbuy_index_publish_tip']			= 'SiPublicarahora, la informaciónque no sea las "Instrucciones de Snatching" ya no se cambiará';
$lang['groupbuy_index_start_time']			= 'Hora de incio';
$lang['groupbuy_index_end_time']			= 'Hora de finalización';
$lang['groupbuy_index_goods_info']			= 'Información de prodctos de oferta';
$lang['groupbuy_index_choose_goods']		= 'Seleccionarprodctos';
$lang['groupbuy_index_order_num_now']		= 'Número de pedidos';
$lang['groupbuy_index_order_num_published']	= 'Número de pedidos mostrados después de la publicación';
$lang['groupbuy_index_condition']			= 'Condiciones restrictivas';
$lang['groupbuy_index_by_num']				= 'Para comprar el número de personas exitosas';
$lang['groupbuy_index_by_amount']			= 'Comprar productos en cantidad';
$lang['groupbuy_index_group_num']			= 'Número de asaltantes';
$lang['groupbuy_index_group_espect_num']	= 'El número de pedidosesperadosque se puedenajusta';
$lang['groupbuy_index_group_amount']		= 'número de piezas';
$lang['groupbuy_index_group_espect_amount']	= 'El número esperado de pedidosque se puedenajustar';
$lang['groupbuy_index_amount_limit']		= 'Limitadopor person';
$lang['groupbuy_index_amount_limit_tip']	= 'Puedeserordenadopor cada uno de los participantes, 0 es ilimitado';
$lang['groupbuy_index_goods_sum']			= 'Número total de mercancías';
$lang['groupbuy_index_amount_max_limit']	= 'La cantidadmáximaquepuedenpedir todos los participantes, el valor pordefecto es el número de mercancías en stock';
$lang['groupbuy_index_intro']				= 'Estaintroducción deoferta';
$lang['groupbuy_index_spec_price']			= 'Precio de especificación';
$lang['groupbuy_index_spec']				= 'Especificación';
$lang['groupbuy_index_stock']				= 'Inventarioamazen';
$lang['groupbuy_index_store_price']			= 'Precio de la tienda';
$lang['groupbuy_index_group_price']			= 'Precio de oferta';
$lang['groupbuy_index_search']				= 'Consultar';
$lang['groupbuy_index_submit']				= 'Enviar';
$lang['groupbuy_index_new_group']			= 'Agregaroferta';
$lang['groupbuy_index_activity_state']		= 'Estado de actividades';
$lang['groupbuy_index_start_time']			= 'Hora de empiezay fin';
$lang['groupbuy_index_group_num']			= 'Comprado';
$lang['groupbuy_index_to']					= 'a';
$lang['groupbuy_index_year']				= 'Años';
$lang['groupbuy_index_month']				= 'Mes';
$lang['groupbuy_index_day']					= 'Días';
$lang['groupbuy_index_publish_tip']			= 'Después de la publicación, ya no se puedeeditarexcepto para modificar la descripción, ¿estáseguro de quedeseapublicar?';
$lang['groupbuy_index_publish']				= 'Lanzar';
$lang['groupbuy_index_del_tip']				= 'Si el ofertaestácompleto, la eliminación del snap-up darácomoresultadoque el usuarioque no ha realizado un pedido no puedarealizar un pedido, ¿estáseguro de quedeseahacerlo?';
$lang['groupbuy_index_order']				= 'Pedido';
$lang['groupbuy_index_order_state']			= 'Situación de pedido';
$lang['groupbuy_index_finish_tip']			= 'La operaciónestablecerá el snap-up en un estadocorrecto, ¿estáseguro de quedeseafinalizar la reserva?';
$lang['groupbuy_index_finish']				= 'Completado';
$lang['groupbuy_index_end']				    = 'Fin de la reserva';
$lang['groupbuy_index_no_record']			= 'No se hanencontradobienesadmisibles';
$lang['groupbuy_index_loading_list']		= 'Carga de la lista de productos';
$lang['groupbuy_index_no_goods']			= 'No se hanencontradoartículosrelevantes';
$lang['groupbuy_index_choose_goods']		= 'Selecciónarproductos';
$lang['groupbuy_index_goods_name']			= 'Nombre de producto';
$lang['groupbuy_index_store_class']			= 'Categoría de la tienda';
$lang['groupbuy_index_please_choose']		= 'Total clasificación';
$lang['groupbuy_index_search_back']			= 'Por favor, busquedesdearribaprimero';
$lang['groupbuy_index_publish_success']		= 'lanzamientoexitoso';
$lang['groupbuy_index_change_to_finish']		= 'El estado ha cambiado a Completa';
$lang['groupbuy_index_group_canceled']			= 'La Ofertaha sidocancelad';
$lang['groupbuy_index_modify_intro_success']	= 'nstrociones del productosmodificados con éxito';
$lang['groupbuy_index_modify_order_num_sucess']	= 'Modificar el número de pedidos de productos con éxito';
$lang['groupbuy_index_cancel_reason']			= 'motivo de la cancelación';
$lang['groupbuy_index_username']				= 'Nombreusuario';
$lang['groupbuy_index_linkman']					= 'Nombre de contacto';
$lang['groupbuy_index_phone']					= 'Número de contacto';
$lang['groupbuy_index_jian']					= 'pieza';
$lang['groupbuy_index_no_record_now']			= 'No hay registros de pedidos';
$lang['groupbuy_index_del_success']		= 'Eliminar la actividad de oferta se realizócorrectamente';
$lang['groupbuy_index_del_fail']		= 'No se pudoeliminar la actividad de complemento';
$lang['groupbuy_index_datefail']		= 'no puedesermenorque el mismodía, y la hora de accesopredeterminado es de 7 días！';
$lang['groupbuy_index_startdatefail']		= 'La hora de inicio del ofertano es antes del mismodía, y la hora de iniciopredeterminada del snap-up es el mismodía！';

//groupbuy_add
$lang['snap_up_subtitles']			= 'subtítulo de compra';
$lang['snap_up_subtitle_word_limit']			= 'Puedeingresar hasta 30 caracteres para el subtítulo de la actividad de compra de pánico';
$lang['start_time_cannot_less_than']			= 'La hora de inicio de la compra no puedesermenorque';
$lang['start_time_cannot_greater_than']			= 'La hora de inicio de la compra de pánico no puedeser mayor que';
$lang['search_store_items']			= 'El primer paso: buscarartículos en la tienda';
$lang['special_goods_not_allowed']			= 'La búsquedadirecta sin ingresar un nombremostrará todos los productosordinarios en la tienda, y no se puedeningresarproductosespeciales';
$lang['implement_uniform_purchase_prices']			= 'Después de que la compra de complementoentre en vigor, todas las especificaciones del SKU del producto se ejecutarán con un precio de complementounificado';
$lang['snap_up_photos']			= 'Tomafotos de actividades';
$lang['image_upload']			= 'Carga de imagen';
$lang['snap_recommended_images']			= 'Comprarimágenesrecomendadas';
$lang['start_time_cannot_empty']			= 'La hora de inicio de la compra no puedeestarvacía';
$lang['start_time_must_greater']			= 'La hora de inicio de la compra de ofertadebe ser mayor que';
$lang['end_snap_time_cannot_empty']			= 'La hora de finalización de la compra de ofertano puedeestarvacía';
$lang['snap_must_less']			= 'La hora de finalización de la comprainstantánea debe sermenorque';
$lang['must_greater_start_time']			= 'La hora de finalización debe ser mayor que la hora de inicio';
$lang['product_participated_simultaneous_events']			= 'Este producto ha participado en eventossimultáneos';
$lang['price_must_less_price_goods']			= 'El precio de compra debe sermenorque el precio del productobásico';
$lang['snap_images_cannot_empty']			= 'Las imágenescapturadas no puedenestarvacías';

//groupbuy_add_vr
$lang['no_more_buying_virtual_goods']			= 'El tiempo de finalización de la compra de pánico no puedeser mayor que el tiempo de vencimiento de los bienesvirtuales';
$lang['expiry_date_buying_package']			= 'Y la hora de vencimiento del paqueteoferta';
$lang['display_all_virtual_goods_store']			= 'La búsquedadirecta sin ingresar un nombremostrará todos los bienesvirtuales en la tienda';
$lang['snap_recommended_images']			= 'Comprarimágenesrecomendadas';
$lang['snap_classification']			= 'Clasificación de compragrupal';
$lang['select_category_virtual_panic_buying']			= 'Seleccione la categoría de estacarrera virtual';
$lang['maximum_quantity_available']			= 'La cantidadmáximaque se puedeadquirir para cada ID de comprador. La cantidad no puedeser mayor que el límite de compra del producto virtual en sí. Por favor, complete "0" para unacantidadilimitada';
$lang['virtual_product_expiration_time']			= 'El tiempo de finalización debe sermenorque el tiempo de vencimiento del producto virtual';
$lang['simultaneous_activities']			= 'Este producto ha participado en actividadessimultáneas';
$lang['limited_quantity_intended_product_itself']			= 'La cantidad de compralimitada de actividades de compra virtual de pánico no puedeser mayor que la cantidad de compralimitada de bienesvirtuales en símismos';

//groupbuy_quota_add
$lang['purchase_unit_month']			= 'La unidad de compra es mensual (30 días) y puedepublicarunaactividad de comprainstantáneadentro del período de compra';
$lang['need_pay_monthly']			= 'Cadames (30 días) debe pagar';
$lang['deduction_settlement_payment_days']			= 'Las tarifasrelacionadas se deducirán de la liquidación del período de facturación de la tienda';
$lang['need_pay_total']			= 'Confirmarcompra? Debepagar en total';
$lang['quantity_cannot_empty']			= 'La cantidad no puedeestarvacía y debe ser un número';

//index
$lang['new_virtual_goods_snap']			= 'Nuevosbienesvirtualesadquiridos';
$lang['new_virtual_panic_buying']			= 'Nueva compra virtual';
$lang['set_renewal']			= 'Renovación del paquete';
$lang['purchase_plan']			= 'Comprarpaquete';
$lang['purchase_plan1']			= '1、dale clic en el nuevobotón de compra de ofertapara agregaractividades de compra de oferta';
$lang['purchase_plan2']			= '2、como el lanzamiento de actividades de compra de ofertade bienesvirtuales, dale clic en el nuevobotón de compra de ofertavirtual';
$lang['set_expiration_time']			= 'Hora de vencimiento del paquete';
$lang['please_buy_package_first']			= 'Actualmente no hay ningúnpaquetedisponible, primerocompre el paquete';
$lang['package_instructions1']			= '1、Dale clic en el botón de compra y renovación del paquete para comprar o renovar el paquete';
$lang['package_instructions2']			= '2、Dalew clic en el nuevobotón de complemento para agregaractividades de complemento';
$lang['package_instructions3']			= '3、Siiniciaunaactividad virtual de compraurgente de productos, haga clic en el nuevobotón de comprarápida virtual';
$lang['package_instructions4']			= 'Las tarifasrelacionadas se deducirán de la liquidación del período de facturación de la tienda';
$lang['snap_type']			= 'tipo deCompragrupal';
$lang['online_rob']			= 'Robóen línea';
$lang['virtual_rob']			= 'Robó virtual';
$lang['browse_number']			= 'Número de visita';
$lang['virtual_exchange']			= 'Bienes de intercambio virtual';

//search_goods
$lang['sale_price']			= 'precio de venta';
$lang['choose_snap_merchandise']			= 'Elegircomomercancíaen oferta';

//controller
$lang['purchase_quantity_cannot_empty']			= 'La cantidad de compra no puedeestarvacía';
$lang['buy']			= 'Compra';
$lang['buy_to_snap_up']			= 'Compre para comprar';
$lang['snap_up_package']			= 'Paquete snap-up, preciounitario';
$lang['virtual_panic_buying']			= 'La cantidad de compralimitada (% d) de las actividades de compra de pánico virtual no puedeser mayor que la cantidad de compralimitada de bienesvirtuales en sí (% d)';
$lang['release_snap_up']			= 'Lanzaractividad de complemento, nombre de complemento:';

return $lang;