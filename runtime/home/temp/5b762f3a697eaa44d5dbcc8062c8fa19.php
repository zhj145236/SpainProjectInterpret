<?php /*a:1:{s:88:"D:\wwwroot\fyshops.domibuy.com\app\home\view\default\store\default\goods\show_chain.html";i:1616221226;}*/ ?>



<div class="show_chain">
    <div id="allmap" style="width:640px;height:400px"></div>
</div>

<script>
    var map
    $(function () {
        // 百度地图API功能
        map = new BMap.Map("allmap"); // 创建Map实例
        var geolocation = new BMap.Geolocation();
        geolocation.getCurrentPosition(function (r) {
            if (this.getStatus() == BMAP_STATUS_SUCCESS) {
                var lng = r.point.lng;
                var lat = r.point.lat;
                var point = new BMap.Point(lng, lat);
                map.centerAndZoom(point, 16);
            } else {
                layer.msg('failed' + this.getStatus());
            }
        }, {enableHighAccuracy: true})
        var top_left_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT}); //左上角，添加默认缩放平移控件

        map.addControl(top_left_navigation);
        map.enableScrollWheelZoom();
        map.enableInertialDragging();

        map.enableContinuousZoom();

        var size = new BMap.Size(10, 20);
        map.addControl(new BMap.CityListControl({
            anchor: BMAP_ANCHOR_TOP_LEFT,
            offset: size,
            // 切换城市之前事件
            // onChangeBefore: function(){
            //    alert('before');
            // },
            // 切换城市之后事件
            // onChangeAfter:function(){
            //   alert('after');
            // }
        }));
        /*<?php if(is_array($chain_list) || $chain_list instanceof \think\Collection || $chain_list instanceof \think\Paginator): if( count($chain_list)==0 ) : echo "" ;else: foreach($chain_list as $key=>$chain_info): ?>*/
        mapAddMarker(<?php echo json_encode($chain_info); ?>)
        /*<?php endforeach; endif; else: echo "" ;endif; ?>*/
    })
    function mapAddMarker(info){
        var point = new BMap.Point(info.chain_longitude, info.chain_latitude);
        var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);              // 将标注添加到地图中
	var opts = {
	    width : 200,     // 信息窗口宽度
	    height: 100,     // 信息窗口高度
	    title : info.chain_addressname , // 信息窗口标题
	}
	var infoWindow = new BMap.InfoWindow(info.chain_address, opts);  // 创建信息窗口对象 
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow, point); //开启信息窗口
	}); 
    }
</script>

