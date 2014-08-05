$(function(){
	$("#service .window").hide();
	$("#service").hide();
	var ControlIndex=0;
	var vesseldiv=0;
	switch(vesselinfo)
	{
	case "dazzle":
	  vesseldiv=0;
	  break;
	case "diamond":
	  vesseldiv=1;
	  break;
	case "dzzit":
	  vesseldiv=2;
	  break;
	default:
	  vesseldiv=0;
	}
	var WindowSize=86;
	$("#dazzlelinkpic").attr("usemap","#Map");
	$("#diamondlinkpic").attr("usemap","#Map2");
	$("#dzzitlinkpic").attr("usemap","#Map3");
	if(document.body.clientWidth <1680){
		WindowSize=56;
		$("#dazzlelinkpic").attr("usemap","#Mapsmall");
		$("#diamondlinkpic").attr("usemap","#Map2small");
	$("#dzzitlinkpic").attr("usemap","#Map3small");
	}
	$("#brandpage .wrap .vessel").height(document.documentElement.clientHeight-WindowSize);
	$("#brandpage .wrap").animate({opacity: 1},1500,function(){
		varloading=1;
	});
	
	ControlIndex=vesseldiv;
	$("#brandpage .wrap .item").width($("#brandpage .wrap").width());
	$("#brandpage .wrap .itemView").width(($("#brandpage .wrap .itemView").children(".item").width()+parseInt($("#brandpage .wrap .itemView").children(".item").css("margin-right").replace("px","")))*$("#brandpage .wrap .itemView").children(".item").size());
	for(i=0;i<Math.ceil($("#brandpage .wrap .itemView").children(".item").size());i++){
		var $BtnObj= $("<a>",{"class":"ControlBtn","href":"javascript:void(0);"}); 
		$("#brandpage .wrap .ViewControl").append($BtnObj);
	}	
	$("#brandpage .wrap .ControlBtn:first").addClass("Activate");
	
	if(ControlIndex==0){
		/*$("#brandpage .wrap .ControlLeftBtn").hide();*/
		$("#brandpage .wrap .ControlLeftBtn").children("img").attr({ src: "/images/Dazzleleft.png"});
		$("#brandpage .wrap .ControlRightBtn").children("img").attr({ src: "/images/Dazzleright.png"});
	}
	if(ControlIndex==2){
		$("#brandpage .wrap .ControlRightBtn").hide();
	}
	$("#brandpage .wrap .ControlRightBtn").click(function(){
		/*
		$(".ControlBtn:eq("+ ++ControlIndex +")").click();
		if(ControlIndex==$(".ControlBtn").length-1){
			$(".ControlRightBtn").hide();
		}
		$(".ControlLeftBtn").show();
		*/
		if(ControlIndex==($("#brandpage .wrap .ControlBtn").length-1)){
			$("#brandpage .wrap .ControlBtn:eq(0)").click();
			ControlIndex=0
			$("#brandpage .wrap .ControlLeftBtn").children("img").attr({ src: "/images/Dazzleleft.png"});
			$("#brandpage .wrap .ControlRightBtn").children("img").attr({ src: "/images/Dazzleright.png"});
		}else
		{			
			$("#brandpage .wrap .ControlBtn:eq("+ ++ControlIndex +")").click();
			$("#brandpage .wrap .ControlLeftBtn").children("img").attr({ src: "/images/dzzitleft.png"});
			$("#brandpage .wrap .ControlRightBtn").children("img").attr({ src: "/images/dzzitright.png"});
		}
	})
	$("#brandpage .wrap .ControlLeftBtn").click(function(){
		/*
		$("#brandpage .wrap .ControlBtn:eq("+ --ControlIndex +")").click();
		if(ControlIndex==0){
			$("#brandpage .wrap .ControlLeftBtn").hide();
		}
		$("#brandpage .wrap .ControlRightBtn").show();
		*/
		if(ControlIndex==0){
			$("#brandpage .wrap .ControlBtn:eq("+ ($("#brandpage .wrap .ControlBtn").length-1) +")").click();
			ControlIndex=$("#brandpage .wrap .ControlBtn").length-1;
			$("#brandpage .wrap .ControlLeftBtn").children("img").attr({ src: "/images/dzzitleft.png"});
			$("#brandpage .wrap .ControlRightBtn").children("img").attr({ src: "/images/dzzitright.png"});
			$("#brandpage .wrap #brandpage .top a").css("color", "#fff");
		}else
		{
			$("#brandpage .wrap .ControlBtn:eq("+ --ControlIndex +")").click();
			if(ControlIndex==0){
				$("#brandpage .wrap .ControlLeftBtn").children("img").attr({ src: "/images/Dazzleleft.png"});
				$("#brandpage .wrap .ControlRightBtn").children("img").attr({ src: "/images/Dazzleright.png"});
			$("#brandpage .wrap #brandpage .top a").css("color", "#000");
			}
		}
	})
	
	$("#brandpage .wrap .ControlBtn").click(function(){
		$("#brandpage .wrap .itemView").css('margin-left','-'+(($("#brandpage .wrap .item").width()+parseInt($("#brandpage .wrap .item").css("margin-right").replace("px","")))*$("#brandpage .wrap .ControlBtn").index(this))+'px');
		$("#brandpage .wrap .ControlBtn").removeClass("Activate");
		$(this).addClass("Activate");

	});
	
	$("#brandpage .wrap .ControlBtn:eq("+vesseldiv+")").click();
	
	
	$("#wechat").click(function(){
		$("#service").fadeIn("slow",function(){			
			$("#service .social").fadeIn("slow");
		});
	});
		
	$(".serviceclose").click(function(){
		$("#service .window").fadeOut("slow",function(){			
			$("#service").fadeOut("slow");
		});
	});	
});