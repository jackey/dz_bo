	var serviceclickswitch=true;	
	var servicehoverwitch=false;
	
$(function(){
	var ControlIndex=0;

	$("#service .code .itemView").width(($("#service .code .itemView").children(".item").width()+parseInt($("#service .code .itemView").children(".item").css("margin-right").replace("px","")))*$("#service .code .itemView").children(".item").size());

	$("#service .socialControlLeftBtn").hover(function() {
		servicehoverwitch=true;
		serviceleftclick();
	}, function() {
		servicehoverwitch=false;
	});
	$("#service .socialControlRightBtn").hover(function() {
		servicehoverwitch=true;
		servicerightclick();
	}, function() {
		servicehoverwitch=false;
	});
	

});
	function serviceleftclick(){
		if(serviceclickswitch && servicehoverwitch){
			serviceclickswitch=false;
			$("#service .code .itemView").css("margin-left",'-'+$("#service .code .item").width()+'px');
			$("#service .code .item:first").before($("#service .code .item:last"));
			$("#service .code .itemView").animate({'margin-left': '0'+'px'}, "slow",function(){
				serviceclickswitch=true;	
				setTimeout('serviceleftclick()',1000);
			});
		}
	}

	function servicerightclick(){
		if(serviceclickswitch && servicehoverwitch){
			serviceclickswitch=false;
			$("#service .code .itemView").animate({'margin-left': '-'+$("#service .code .item").width()+'px'}, "slow",function(){
				$("#service .code .item:last").after($("#service .code .item:first"));
				$("#service .code .itemView").css("margin-left",0);
				serviceclickswitch=true;
				setTimeout('servicerightclick()',1000);
			});
		}
	}