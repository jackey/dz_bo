$(function(){
	$("#service .window").hide();
	$("#service").hide();
	var varloading=0;
	$("#brand .wrap").animate({opacity: 1},1500,function(){
		varloading=1;
	});
	if($("#brand .wrap").height()/1080*1920>$("#brand .wrap").width()){
		$(".wrap .bg img").height($("#brand .wrap").height());	
		$(".wrap .bg img").width($("#brand .wrap").height()/1080*1920);	
		$(".wrap .bg img").css("margin-left",($("#brand .wrap").width()-$("#brand .wrap").height()/1080*1920)/2);
	}else{
		$(".wrap .bg img").width($("#brand .wrap").width());	
		$(".wrap .bg img").height($("#brand .wrap").width()/1920*1080);	
		$(".wrap .bg img").css("margin-top",($("#brand .wrap").height()-$("#brand .wrap").width()/1920*1080)/2);
	}
	
	$(".hexagon").width($("#brand .wrap").height()/1077*1249);	
	$(".Diamond").css("margin-left",($("#brand .wrap").height()/1077*1249/-2));
	$(".dzzit").css("margin-left",($("#brand .wrap").width()/2)+($("#brand .wrap").height()/1077*1249/-2));
	$(".Dazzle").css("margin-left",($("#brand .wrap").width()/-2)+($("#brand .wrap").height()/1077*1249/-2));
	
	$("#brand .Diamond a").click(function(){
		var datahref=$(this).attr("data-href");		
		var datasrc=$(this).attr("data-src");
		
		if(varloading==1 && datahref){
			$("#brand .wrap .bg img").attr("src",datasrc);
			$("#brand .pic a").animate({opacity: 0},500,function(){
				$("#brand .dzzit").animate({marginLeft: (parseInt($("#brand .dzzit").css("margin-left").replace("px",""))+$("#brand .dzzit").width())+"px"}, 1500);
				$("#brand .Dazzle").animate({marginLeft: (parseInt($("#brand .Dazzle").css("margin-left").replace("px",""))-$("#brand .Dazzle").width())+"px"}, 1500,function(){
					$("#brand .Diamond").animate({opacity: 0},1500);
					$("#brand .wrap .bg img").animate({opacity: 1},1500);
						setTimeout(function(){location.href = datahref;},2000);
				});
			});
		 }
	});
	
	$("#brand .dzzit a").click(function(){
		var datahref=$(this).attr("data-href");		
		var datasrc=$(this).attr("data-src");
		
		if(varloading==1 && datahref){
			$("#brand .wrap .bg img").attr("src",datasrc);
			$("#brand .pic a").animate({opacity: 0},500,function(){
				$("#brand .dzzit").animate({marginLeft: (parseInt($("#brand .Diamond").css("margin-left").replace("px","")))+"px"}, 1000);
				//$("#brand .Diamond").animate({marginLeft: (parseInt($("#brand .Dazzle").css("margin-left").replace("px",""))-$("#brand .Dazzle").width())+"px"}, 1500);
				$("#brand .Dazzle").animate({marginLeft: (parseInt($("#brand .Dazzle").css("margin-left").replace("px",""))-$("#brand .Dazzle").width())+"px"}, 1500,function(){
					$("#brand .dzzit").stop().animate({opacity: 0},1500);
					$("#brand .Diamond").stop().animate({opacity: 0},1500);
					$("#brand .wrap .bg img").stop().animate({opacity: 1},1500);	
						setTimeout(function(){location.href = datahref;},2000);
				});
			});
		 }
	});
	
	$("#brand .Dazzle a").click(function(){
		var datahref=$(this).attr("data-href");		
		var datasrc=$(this).attr("data-src");
		
		if(varloading==1 && datahref){
			$("#brand .wrap .bg img").attr("src",datasrc);
			$("#brand .pic a").animate({opacity: 0},500,function(){
				$("#brand .Dazzle").animate({marginLeft: (parseInt($("#brand .Diamond").css("margin-left").replace("px","")))+"px"}, 1000);
				//$("#brand .Diamond").animate({marginLeft: (parseInt($("#brand .dzzit").css("margin-left").replace("px",""))+$("#brand .dzzit").width())+"px"}, 1500);
				$("#brand .dzzit").animate({marginLeft: (parseInt($("#brand .dzzit").css("margin-left").replace("px",""))+$("#brand .dzzit").width())+"px"}, 1500,function(){
					$("#brand .Dazzle").stop().animate({opacity: 0},1500);
					$("#brand .Diamond").stop().animate({opacity: 0},1500);
					$("#brand .wrap .bg img").stop().animate({opacity: 1},1500);		
						setTimeout(function(){location.href = datahref;},2000);
				});
			});
		 }
	});
	
	$(".serviceclose").click(function(){
		$("#service .window").fadeOut("slow",function(){			
			$("#service").fadeOut("slow");
		});
	});	
	
	$(".servicecloseblack").click(function(){
		$("#service .window").fadeOut("slow",function(){			
			$("#service").fadeOut("slow");
		});
	});	
	$("#vip").click(function(){
		$("#service").fadeIn("slow",function(){			
			$("#service .vip").fadeIn("slow");
		});
	});
	$("#social").click(function(){
		$("#service").fadeIn("slow",function(){			
			$("#service .social").fadeIn("slow");
		});
	});
	$("#contact").click(function(){
		$("#service").fadeIn("slow",function(){			
			$("#service .contact").fadeIn("slow");
		});
	});
	$("#store").click(function(){
		$("#service").fadeIn("slow",function(){			
			$("#service .store").fadeIn("slow",function(){				
				$(".selectarea .confirm:first").click();
			});
		});
	});
});