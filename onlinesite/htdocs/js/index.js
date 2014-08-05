$(function(){
	var varloading=0;
	$("#index #logotxt").fadeIn(500,function(){
		$("#index #logotxt").css("display","block");
		$("#index #logobg").fadeIn(500,function(){		
			$("#index #logobg").css("display","block");
			//$("#index .menu .menulogo").animate({opacity: 1},1000,function(){						
				$("#index .menutriangle").animate({opacity: 1}, 1000,function(){
						$("#index .menu li").animate({opacity: 1},500);		
					 	$("#index .ver li").animate({opacity: 1},500,function(){
						varloading=1;
						});
				});
			//});
		 });
	 })

	 
	 $("#index a").click(function(){
		 var datahref=$(this).attr("data-href");
		 
		 if(varloading==1 && datahref){			
			$("#index .menu li").animate({opacity: 0},500);	
			$("#index .ver li").animate({opacity: 0},500,function(){
				$("#index .menutriangle").animate({opacity: 0}, 500,function(){	
					$("#index #logobg").fadeOut(500);
					$("#index #logotxt").fadeOut(500,function(){	
						location.href = datahref;
					});
				});
			});
		 }
	});

});