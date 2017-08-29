<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=TXZuU6Pt6URcaHC3kI94Z69U"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<style type="text/css">
/*学校图*/
#school {height: 400px;width:95%;overflow: hidden;position:absolute;top:10px;left:10px;border:2px solid #46b8da;}
/*学校图*/
dl,dt,dd,ul,li{
		margin:0;
		padding:0;
		list-style:none;
	}
	dt{
		font-size:14px;
		font-family:"微软雅黑";
		font-weight:bold;
		border-bottom:1px dotted #000;
		padding:5px 0 5px 5px;
		margin:5px 0;
	}
	dd{
		padding:5px 0 0 5px;
	}
	li{
		line-height:28px;
	}
</style>
<script type="text/javascript">
function createBigMap(){
		var map = new BMap.Map('school');
	    var poi = new BMap.Point(103.938891,30.754819);
	    map.centerAndZoom(poi, 16);
	    map.enableScrollWheelZoom();

	    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
	                    '<img src="img/night.jpg" alt="夜景" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
	                    '地址：成都市高新西区西源大道2006号<br/>电话：028-61830213<br/>简介：坐落于有“天府之国”之称的成都市，由中华人民共和国教育部直属' +
	                  '</div>';

	    //创建检索信息窗口对象
	    var searchInfoWindow = null;
		searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
				title  : "电子科技大学",      //标题
				width  : 290,             //宽度
				height : 105,              //高度
				panel  : "panel",         //检索结果面板
				enableAutoPan : true,     //自动平移
				searchTypes   :[
					BMAPLIB_TAB_SEARCH,   //周边检索
					BMAPLIB_TAB_TO_HERE,  //到这里去
					BMAPLIB_TAB_FROM_HERE //从这里出发
				]
			});
	    var marker = new BMap.Marker(poi); //创建marker对象
	    marker.enableDragging(); //marker可拖拽
	    marker.addEventListener("click", function(e){
		    searchInfoWindow.open(marker);
	    })
	    map.addOverlay(marker); //在地图中添加marker
	}
createBigMap();
</script>
</head>
