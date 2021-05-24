$(function()
{
    //给图标的加减号添加展开收缩行为
    $('img[ds_type="flex"]').click(function(){
        var status = $(this).attr("status");
        //状态是加号的事件
        if(status == 'open')
        {
            var pr = $(this).parent('td').parent('tr');
            var id = $(this).attr("fieldid");
            var obj = $(this);
            $(this).attr('status','none');
            $.get(AJAX_URL_REGION, {id: id}, function(data){
                if(data)
                {
                    var str = "";
                    var res = eval('('+data+')');
                    for(var i = 0; i < res.length; i++)
                    {
                        var tmp_vertline = "<img class='preimg' src='"+ADMINSITEROOT+"/images/treetable/vertline.gif'/>";
                        
                        str += "<tr id='ds_row_" + res[i].area_id + "' class='"+pr.attr('class')+" row"+id+"'>";
                        str += "<td><input type='checkbox' name='check_area_id[]' value='"+res[i].area_id+"' class='checkitem'>";
                        //给每一个异步取出的数据添加伸缩图标后者无状态图标
                        if(res[i].switchs == 1)
                        {
                            str +=  "<img src='"+ADMINSITEROOT+"/images/treetable/tv-expandable.gif' ds_type='flex' status='open' fieldid='"+res[i].area_id+"'>";
                        }
                        else
                        {
                            str +=  "<img src='"+ADMINSITEROOT+"/images/treetable/tv-item.gif' ds_type='flex' status='none' fieldid='"+res[i].area_id+"'>";
                        }
                        str += "</td><td class='sort'>";
                        //排序
                        str += " <span title='Clasificación de subcategorías editables' ajax_branch='area_sort' datatype='number' fieldid='"+res[i].area_id+"' fieldname='area_sort' ds_type='inline_edit' class='editable tooltip'>"+res[i].area_sort+"</span></td>";
			//名称
			str += "<td class='name'>";
                        
                        for (var tmp_i = 1; tmp_i < (res[i].area_deep - 1); tmp_i++) {
                            str += tmp_vertline;
                        }
                        if (i == res.length-1) {
                            str += " <img fieldid='" + res[i].area_id + "' status='open' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-item1.gif' />";
                        } else {
                            str += " <img fieldid='" + res[i].area_id + "' status='none' ds_type='flex' src='" + ADMINSITEROOT + "/images/treetable/tv-expandable1.gif' />";
                        }
                        str += " <span title='Editar nombre de categoría inferior' required='1' fieldid='"+res[i].area_id+"' ajax_branch='area_name' fieldname='area_name' ds_type='inline_edit' class='editable tooltip'>"+res[i].area_name+"</span>";
						
			str += "</td>";
                                              
                        //大区名称
                        str += "<td class='name'>";
                        for (var tmp_i = 1; tmp_i < (res[i].deep - 1); tmp_i++) {
                            str += tmp_vertline;
                        }
                        if(res[i].area_region == null){
                            res[i].area_region= ' ';
                        }
                        str += " <span title='Editar nombre de categoría inferior' required='1' fieldid='" + res[i].area_id + "' ajax_branch='area_region' fieldname='area_region' ds_type='inline_edit' class='editable tooltip'>" + res[i].area_region + "</span>";
                        str += "</td>";
                        str += "<td><a href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Region/edit/area_id/" + res[i].area_id + "','Editar-"+res[i].area_name+"')\" class='dsui-btn-edit'><i class='iconfont'></i>Editar</a>";
                        str += "<a href=\"javascript:dsLayerConfirm('" + ADMINSITEURL + "/Region/drop/area_id/" + res[i].area_id + "','Está seguro de que desea borrar？'," + res[i].area_id + ");\" class='dsui-btn-del'><i class='iconfont'></i>Borrar</a>";
                        if(res[i].add_child){
                            str += "<a href=\"javascript:dsLayerOpen('" + ADMINSITEURL + "/Region/add/area_id/" + res[i].area_id + "','Añadir nivel inferior')\" class='dsui-btn-add'><i class='iconfont'></i>Añadir nivel inferior</a>";
                        }
                        str += "</td></tr>"
                    }
                    
                    //将组成的字符串添加到点击对象后面
                    pr.after(str);
                    obj.attr('status', 'close');
                    obj.attr('src', obj.attr('src').replace("tv-expandable", "tv-collapsable"));
                    $('img[ds_type="flex"]').unbind('click');
                    $('span[ds_type="inline_edit"]').unbind('click');
                    //重现初始化页面
                    $.getScript(ADMINSITEROOT + "/js/jquery.edit.js");
                    $.getScript(ADMINSITEROOT + "/js/region_tree.js");
                }
            });
        }
        //状态是减号的事件
        if(status == "close")
        {
            $(".row"+$(this).attr('fieldid')).remove();
            $(this).attr('src',$(this).attr('src').replace("tv-collapsable","tv-expandable"));
	    $(this).attr('status','open');
        }
    });
});