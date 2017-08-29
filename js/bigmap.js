// 百度地图API功能
        var map1 = new BMap.Map('school');
        var poi1 = new BMap.Point(103.938891,30.754819);
        map1.centerAndZoom(poi1, 16);
        map1.enableScrollWheelZoom();

        var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
        '<img src="img/night.jpg" alt="夜景" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
        '地址：成都市高新西区西源大道2006号<br/>电话：028-61830213<br/>简介：坐落于有“天府之国”之称的成都市，由中华人民共和国教育部直属' +
      '</div>';

        //创建检索信息窗口对象
        var searchInfoWindow = null;
    	searchInfoWindow = new BMapLib.SearchInfoWindow(map1, content, {
    			title  : "电子科大",      //标题
    			width  : 300,             //宽度
    			height : 85,              //高度
    			panel  : "panel",         //检索结果面板
    			enableAutoPan : true,     //自动平移
    			searchTypes   :[
    				BMAPLIB_TAB_SEARCH,   //周边检索
    				BMAPLIB_TAB_TO_HERE,  //到这里去
    				BMAPLIB_TAB_FROM_HERE //从这里出发
    			]
    		});
        var markerr = new BMap.Marker(poi1); //创建markerr对象
        markerr.enableDragging(); //markerr可拖拽
        markerr.addEventListener("click", function(e){
    	    searchInfoWindow.open(markerr);
        })
        map1.addOverlay(markerr); //在地图中添加markerr
        var size = new BMap.Size(10, 20);
        map1.addControl(new BMap.CityListControl({
            anchor: BMAP_ANCHOR_TOP_RIGHT,
            offset: size,
        }));