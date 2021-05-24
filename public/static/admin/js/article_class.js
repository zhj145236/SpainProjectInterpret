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
                url: ADMINSITEURL + '/Articleclass/index?ajax=1&ac_parent_id=' + id,
                dataType: 'json',
                success: function (data) {
                    var src = '';
                    for (var i = 0; i < data.length; i++) {
                        var tmp_vertline = "<img class='preimg' src='templates/images/vertline.gif'/>";
                        src += "<tr id='ds_row_"+ data[i].ac_id +"' class='" + pr.attr('class') + " row" + id + "'>";
                        src += "<td class='w36'><input type='checkbox' name='check_ac_id[]' value='" + data[i].ac_id + "' class='checkitem'>";
                        if (data[i].have_child == 1) {
                            src += "<img fieldid='" + data[i].ac_id + "' status='open' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-expandable.gif' />";
                        } else {
                            src += "<img fieldid='" + data[i].ac_id + "' status='none' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-item.gif' />";
                        }
                        //图片
                        src += "</td><td class='w48 sort'>";
                        //排序
                        src += "<span title='Editable' ajax_branch='article_class_sort' datatype='number' fieldid='" + data[i].ac_id + "' fieldname='ac_sort' ds_type='inline_edit' class='editable'>" + data[i].ac_sort + "</span></td>";
                        //名称
                        src += "<td class='name'>";
                        for (var tmp_i = 1; tmp_i < (data[i].deep - 1); tmp_i++) {
                            src += tmp_vertline;
                        }
                        if (data[i].have_child == 1) {
                            src += " <img fieldid='" + data[i].ac_id + "' status='open' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-item1.gif' />";
                        } else {
                            src += " <img fieldid='" + data[i].ac_id + "' status='none' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-expandable1.gif' />";
                        }
                        src += " <span title='Editable' required='1' fieldid='" + data[i].ac_id + "' ajax_branch='article_class_name' fieldname='ac_name' ds_type='inline_edit' class='editable'>" + data[i].ac_name + "</span>";
                        //新增下级
                        if (data[i].deep < 2) {
                            src += "<a class='btn-add-nofloat marginleft' href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Articleclass/article_class_add/ac_parent_id/" + data[i].ac_id + "','Añadir nivel inferior')\"><span>Añadir nivel inferior</span></a></span>";
                        }
                        src += "</td>";

                        //操作
                        src += "<td class='w84'>";
                        src += "<span><a href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Articleclass/article_class_edit/ac_id/" + data[i].ac_id + "','Editar-"+data[i].ac_name+"')\" class='dsui-btn-edit'><i class='iconfont'></i>Editar</a>";
                        src += "<a href=\"javascript:dsLayerConfirm('" + ADMINSITEURL + "/Articleclass/article_class_del/ac_id/" + data[i].ac_id + "','Eliminar esta categoría eliminará todas las categorías inferiores de la categoría al mismo tiempo. Está seguro de que desea eliminar？'," + data[i].ac_id + ");\" class='dsui-btn-del'><i class='iconfont'></i>Borrar</a>";
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
                    $.getScript(ADMINSITEROOT + "/js/article_class.js");

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