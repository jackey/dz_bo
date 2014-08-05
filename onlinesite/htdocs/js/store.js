$(function(){

	provinceFill("dazzle");
	provinceFill("diamond");
	provinceFill("dzzit");
	
	/*
	var datatitle=$("#selectdazzle .selectstore .Selected").attr("data-title");	
	var datamapx=parseFloat($("#selectdazzle .selectstore .Selected").attr("data-mapx"));	
	var datamapy=parseFloat($("#selectdazzle .selectstore .Selected").attr("data-mapy"));	
	var datamarkx=parseFloat($("#selectdazzle .selectstore .Selected").attr("data-markx"));	
	var datamarky=parseFloat($("#selectdazzle .selectstore .Selected").attr("data-marky"));	
	console.log(datatitle);
	console.log(datamapx);
	console.log(datamapy);
	console.log(datamarkx);
	console.log(datamarky);
	initmap("mapContent",datamapx,datamapy,datatitle,datamarkx,datamarky);
	*/
	var selectclick="";
	$(".selectbox .Selected").click(function(){
		$(".selectbox .selectlist").stop().slideUp("fast");
		$(this).parent(".selectobj").children(".selectlist").stop().slideDown("fast");
		$(".selectobj").css("z-index","3000");
		$(this).parent(".selectobj").css("z-index","9999");
	});
	
	
	$(".selectarea .confirm").click(function(){		
		var datatitle=$(this).parent(".selectarea").children(".selectbox").children(".selectstore").children(".Selected").attr("data-title");	
		var datamapx=parseFloat($(this).parent(".selectarea").children(".selectbox").children(".selectstore").children(".Selected").attr("data-mapx"));	
		var datamapy=parseFloat($(this).parent(".selectarea").children(".selectbox").children(".selectstore").children(".Selected").attr("data-mapy"));	
		var datamarkx=parseFloat($(this).parent(".selectarea").children(".selectbox").children(".selectstore").children(".Selected").attr("data-markx"));	
		var datamarky=parseFloat($(this).parent(".selectarea").children(".selectbox").children(".selectstore").children(".Selected").attr("data-marky"));	
		initmap("mapContent",datamapx,datamapy,datatitle,datamarkx,datamarky);
	});
	
});
var provinceFill=function(brand){
	$("#select"+brand+" .selectprovince .selectlist").append($(".database #"+brand+"dataprovince .item").clone());
	$("#select"+brand+" .selectprovince .Selected").text($("#select"+brand+" .selectprovince .selectlist .item:first").text());
	cityFill(brand);	
	
	$("#select"+brand+" .selectprovince .selectlist .item").click(function(){
		var brand=$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-brand");
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").text($(this).text());
		$(".selectbox .selectlist").stop().slideUp("fast");	
		$(this).parent(".selectlist").parent(".selectobj").css("z-index","3000");
		cityFill(brand);	
	});
}
var cityFill=function(brand){
	$("#select"+brand+" .selectcity .selectlist").empty();
	$(".database #"+brand+"datacity .item").each(function(index){ 	
		var datasource=$(this).attr("data-index");
		if (datasource==$("#select"+brand+" .selectprovince .Selected").text()){
			$("#select"+brand+" .selectcity .selectlist").append($(this).clone());
		}
	}); 
	$("#select"+brand+" .selectcity .Selected").text($("#select"+brand+" .selectcity .selectlist .item:first").text());
	storeFill(brand);
	
	$("#select"+brand+" .selectcity .selectlist .item").click(function(){
		var brand=$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-brand");
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").text($(this).text());
		$(".selectbox .selectlist").stop().slideUp("fast");	
		$(this).parent(".selectlist").parent(".selectobj").css("z-index","3000");
		storeFill(brand);	
	});	
}
var storeFill=function(brand){	
	$("#select"+brand+" .selectstore .selectlist").empty();
	$(".database #"+brand+"datastore .item").each(function(index){ 	
		var datasource=$(this).attr("data-index");
		if (datasource==$("#select"+brand+" .selectcity .Selected").text()){
			$("#select"+brand+" .selectstore .selectlist").append($(this).clone());
		}
	}); 
	$("#select"+brand+" .selectstore .Selected").text($("#select"+brand+" .selectstore .selectlist .item:first").text());
	$("#select"+brand+" .selectstore .Selected").attr("data-title",$("#select"+brand+" .selectstore .selectlist .item:first").attr("data-title"));	
	$("#select"+brand+" .selectstore .Selected").attr("data-mapx",$("#select"+brand+" .selectstore .selectlist .item:first").attr("data-mapx"));	
	$("#select"+brand+" .selectstore .Selected").attr("data-mapy",$("#select"+brand+" .selectstore .selectlist .item:first").attr("data-mapy"));	
	$("#select"+brand+" .selectstore .Selected").attr("data-markx",$("#select"+brand+" .selectstore .selectlist .item:first").attr("data-markx"));	
	$("#select"+brand+" .selectstore .Selected").attr("data-marky",$("#select"+brand+" .selectstore .selectlist .item:first").attr("data-marky"));	
	
	$("#select"+brand+" .selectstore .selectlist .item").click(function(){
		var brand=$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-brand");
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").text($(this).text());
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-title",$(this).attr("data-title"));	
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-mapx",$(this).attr("data-mapx"));	
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-mapy",$(this).attr("data-mapy"));	
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-markx",$(this).attr("data-markx"));	
		$(this).parent(".selectlist").parent(".selectobj").children(".Selected").attr("data-marky",$(this).attr("data-marky"));	
		$(".selectbox .selectlist").stop().slideUp("fast");
		$(this).parent(".selectlist").parent(".selectobj").css("z-index","3000");
	});	
}
var initmap=function(map,mapx,mapy,mark,markx,marky){
	var map = new BMap.Map(map);
	mapx=mapfix(mapx);
	map.centerAndZoom(new BMap.Point(mapx,mapy), 17);
	var marker1 = new BMap.Marker(new BMap.Point(markx,marky));  // 创建标注
	map.addOverlay(marker1);              // 将标注添加到地图中
	
	//创建信息窗口
	var infoWindow1 = new BMap.InfoWindow("<br/>"+mark);
	marker1.openInfoWindow(infoWindow1);
	marker1.addEventListener("click", function(){this.openInfoWindow(infoWindow1);});
    
}
var mapfix=function(mapx){
	mapx=mapx-0.005;
	return mapx;
}