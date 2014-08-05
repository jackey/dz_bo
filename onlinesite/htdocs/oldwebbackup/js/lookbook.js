
	var clickswitch=true;	
	var hoverwitch=false;
	
$(function(){
	$("#service .window").hide();
	$("#service").hide();
	var ControlIndex=0;
	var WindowSize=86;
	if(document.body.clientWidth <1680){
		WindowSize=56;
	}
	$("#lookbook .wrap .dress").height(document.documentElement.clientHeight-WindowSize);
	$("#lookbook .wrap .item").width($("#lookbook .wrap .dress").height()*560/935);
	$("#lookbook .wrap .itemView").width(($("#lookbook .wrap .itemView").children(".item").width()+parseInt($("#lookbook .wrap .itemView").children(".item").css("margin-right").replace("px","")))*$("#lookbook .wrap .itemView").children(".item").size());

	$("#lookbook .wrap .ControlLeftBtn").hover(function() {
		hoverwitch=true;
		leftclick();
	}, function() {
		hoverwitch=false;
	});
	$("#lookbook .wrap .ControlRightBtn").hover(function() {
		hoverwitch=true;
		rightclick();
	}, function() {
		hoverwitch=false;
	});
	
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
	function leftclick(){
		if(clickswitch && hoverwitch){
			clickswitch=false;
			$("#lookbook .wrap .itemView").css("margin-left",'-'+$("#lookbook .wrap .item").width()+'px');
			$("#lookbook .wrap .item:first").before($("#lookbook .wrap .item:last"));
			$("#lookbook .wrap .itemView").animate({'margin-left': '0'+'px'}, "slow",function(){
				clickswitch=true;	
				setTimeout('leftclick()',1000);
			});
		}
	}

	function rightclick(){
		if(clickswitch && hoverwitch){
			clickswitch=false;
			$("#lookbook .wrap .itemView").animate({'margin-left': '-'+$("#lookbook .wrap .item").width()+'px'}, "slow",function(){
				$("#lookbook .wrap .item:last").after($("#lookbook .wrap .item:first"));
				$("#lookbook .wrap .itemView").css("margin-left",0);
				clickswitch=true;
				setTimeout('rightclick()',1000);
			});
		}
	}