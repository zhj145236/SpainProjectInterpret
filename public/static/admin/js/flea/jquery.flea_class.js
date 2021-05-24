$(document).ready(function () {
    //列表下拉
    $('img[ds_type="flex"]').click(function () {
        var status = $(this).attr('status');
        if (status == 'open') {
            var pr = $(this).parent('td').parent('tr');
            var id = $(this).attr('fieldid');
            var obj = $(this);
            $(this).attr('status', 'none');
            //ajax
            $.ajax({
                url: ADMINSITEURL + '/Fleaclass/goods_class/?ajax=1&fleaclass_parent_id=' + id,
                dataType: 'json',
                success: function (data) {
                    var src = '';
                    for (var i = 0; i < data.length; i++) {
                        var tmp_vertline = "<img class='preimg' src='" + ADMINSITEROOT + "/images/treetable/vertline.gif'/>";
                        src += "<tr id='ds_row_" +data[i].fleaclass_id+ "' class='" + pr.attr('class') + " row" + id + "'>";
                        src += "<td class='w36'><input type='checkbox' name='check_fleaclass_id[]' value='" + data[i].fleaclass_id + "' class='checkitem'>";
                        //图片
                        if (data[i].have_child == 1) {
                            src += " <img fieldid='" + data[i].fleaclass_id + "' status='open' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-expandable.gif' />";
                        } else {
                            src += " <img fieldid='" + data[i].fleaclass_id + "' status='none' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-item.gif' />";
                        }
                        src += "</td><td class='w48 sort'>";
                        //排序
                        src += " <span title='Clasificación de subcategorías editables' ajax_branch='goods_class_sort' datatype='number' fieldid='" + data[i].fleaclass_id + "' fieldname='fleaclass_sort' ds_type='inline_edit' class='editable tooltip'>" + data[i].fleaclass_sort + "</span></td>";
                        //名称
                        src += "<td class='w50pre name'>";


                        for (var tmp_i = 1; tmp_i < (data[i].deep - 1); tmp_i++) {
                            src += tmp_vertline;
                        }
                        if (data[i].have_child == 1) {
                            src += " <img fieldid='" + data[i].fleaclass_id + "' status='open' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-item1.gif' />";
                        } else {
                            src += " <img fieldid='" + data[i].fleaclass_id + "' status='none' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-expandable1.gif' />";
                        }
                        src += " <span title='Editar nombre de categoría inferior' required='1' fieldid='" + data[i].fleaclass_id + "' ajax_branch='goods_class_name' fieldname='fleaclass_name' ds_type='inline_edit' class='editable tooltip'>" + data[i].fleaclass_name + "</span>";
                        //新增下级
                        if (data[i].deep < 3) {
                            src += "<a class='btn-add-nofloat marginleft' href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Fleaclass/goods_class_add/fleaclass_parent_id/" + data[i].fleaclass_id + "','Añadir nivel inferior')\"><span>Añadir nivel inferior</span></a>";
                        }
                        src += "</td>";
                        //显示状态
                        src += "<td class='align-center yes-onoff'>";
                        if (data[i].fleaclass_index_show == 0) {
                            src += "<a href='JavaScript:void(0);' class='tooltip disabled' fieldvalue='0' fieldid='" + data[i].fleaclass_id + "' ajax_branch='goods_class_show' fieldname='fleaclass_show' ds_type='inline_edit' title='Puede editar si la categoría se muestra'><img src='" + ADMINSITEROOT + "/images/treetable/transparent.gif'></a>"
                        } else {
                            src += "<a href='JavaScript:void(0);' class='tooltip enabled' fieldvalue='1' fieldid='" + data[i].fleaclass_id + "' ajax_branch='goods_class_show' fieldname='fleaclass_show' ds_type='inline_edit' title='Puede editar si la categoría se muestra'><img src='" + ADMINSITEROOT + "/images/treetable/transparent.gif'></a>"
                        }
                        src += "</td>";
                        //首页显示状态
                        src += "<td class='align-center yes-onoff'>";
                        if (data[i].fleaclass_show == 0) {
                            src += "<a href='JavaScript:void(0);' class='tooltip disabled' fieldvalue='0' fieldid='" + data[i].fleaclass_id + "' ajax_branch='goods_class_index_show' fieldname='fleaclass_index_show' ds_type='inline_edit' title='Puede editar si la categoría se muestra en la página principal'><img src='" + ADMINSITEROOT + "/images/treetable/transparent.gif'></a>"
                        } else {
                            src += "<a href='JavaScript:void(0);' class='tooltip enabled' fieldvalue='1' fieldid='" + data[i].fleaclass_id + "' ajax_branch='goods_class_index_show' fieldname='fleaclass_index_show' ds_type='inline_edit' title='Puede editar si la categoría se muestra en la página principal'><img src='" + ADMINSITEROOT + "/images/treetable/transparent.gif'></a>"
                        }
                        src += "</td>";
                        //操作
                        src += "<td class='w84'>";
                        src += "<a href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Fleaclass/goods_class_edit/fleaclass_id/" + data[i].fleaclass_id + "','Editar-"+data[i].fleaclass_name+"')\" class='dsui-btn-edit'><i class='iconfont'></i>Editar</a>";
                        src += " <a href=\"javascript:dsLayerConfirm('" + ADMINSITEURL + "/Fleaclass/goods_class_del/?fleaclass_id=" + data[i].fleaclass_id + "','Eliminar esta categoría eliminará todas las categorías inferiores de la categoría al mismo tiempo. Está seguro de que desea eliminar？'," + data[i].fleaclass_id + ");\" class='dsui-btn-del'><i class='iconfont'></i>Borrar</a>";
                        src += "</td>";
                        src += "</tr>";
                    }
                    //插入
                    pr.after(src);
                    obj.attr('status', 'close');
                    obj.attr('src', obj.attr('src').replace("tv-expandable", "tv-collapsable"));
                    $('img[ds_type="flex"]').unbind('click');
                    $('span[ds_type="inline_edit"]').unbind('click');
                    //重现初始化页面
                    $.getScript(ADMINSITEROOT + "/js/jquery.edit.js");
                    $.getScript(ADMINSITEROOT + "/js/flea/jquery.flea_class.js");
                    $.getScript(ADMINSITEROOT + "/js/admin.js");
                },
                error: function () {
                    alert('Fallo al obtener información');
                }
            });
        }
        if (status == 'close') {
            $(".row" + $(this).attr('fieldid')).remove();
            $(this).attr('src', $(this).attr('src').replace("tv-collapsable", "tv-expandable"));
            $(this).attr('status', 'open');
        }
    })
});