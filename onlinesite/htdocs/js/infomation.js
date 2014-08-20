$(function(){
	$("#service .window").hide();

	$("#service").hide();

	$(".careerlist").hide();

	$(".windowmask").hide();

	$("#information .wrap").PluginSliderSence({Page:vesseldiv});

	var vesseldiv=1;

	$("#information .index #menucorporate").css("margin-left",(parseInt($("#information .index #menucorporate").css("margin-left").replace("px",""))+150)+"px");

	$("#information .index #menuinvestors").css("margin-left",(parseInt($("#information .index #menuinvestors").css("margin-left").replace("px",""))+150)+"px");

	$("#information .index #menubrand").css("margin-left",(parseInt($("#information .index #menubrand").css("margin-left").replace("px",""))-150)+"px");

	$("#information .index #menucareers").css("margin-left",(parseInt($("#information .index #menucareers").css("margin-left").replace("px",""))-150)+"px");



	$("#brandinfopic").attr("usemap","#Map");

	if(document.body.clientWidth <1680){

		WindowSize=56;

		$("#brandinfopic").attr("usemap","#Mapsmall");

	}

	var varloading=0;

	$(".menucontrol").hide();

	$("#information .index #logotxt").fadeIn(500,function(){

		$("#information .index #logotxt").css("display","block");

		$("#information .index #logobg").fadeIn(500,function(){		

			$("#information .index #logobg").css("display","block");

			//$("#information .index .menu .menulogo").animate({opacity: 1},1000,function(){	

			

			$("#information .index #menubrand").animate({marginLeft:(parseInt($("#information .index #menubrand").css("margin-left").replace("px",""))+150)+"px",opacity: 1},1000,function(){

				$("#information .index #menucareers").animate({marginLeft:(parseInt($("#information .index #menucareers").css("margin-left").replace("px",""))+150)+"px",opacity: 1},1000,function(){

					$("#information .index #menuinvestors").animate({marginLeft:(parseInt($("#information .index #menuinvestors").css("margin-left").replace("px",""))-150)+"px",opacity: 1},1000,function(){

						$("#information .index #menucorporate").animate({marginLeft:(parseInt($("#information .index #menucorporate").css("margin-left").replace("px",""))-150)+"px",opacity: 1},1000,function(){

							

								$("#information .fixmenu li").animate({opacity: 1},500);		

								$("#information .fixver li").animate({opacity: 1},500,function(){

								});

						});

					});

				});

			});



			//});

		 });

	 });



	 $(".videoitem").click(function(){

		 var mp4data = $(this).attr("data-mp4-source");
		 var webmdata = $(this).attr("data-webm-source");
		 var poster = $(this).attr("data-poster");

			$(".infomedia .videobox").html("<video poster=\""+poster+"\" id=\"beginVideo\"  controls loop=\"loop\">  <source src=\""+mp4data+"\" type='video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"' /> <source src=\""+webmdata+"\" type='video/webm; codecs=\"vp8, vorbis\"' /> <div id=\"mediaplayer\">JW Player goes here</div>  </video>");	

			jwplayer("mediaplayer").setup({

				flashplayer: "/flash/player.swf",

				file: mp4data

			});

		$("a", $(this).parent().siblings()).removeAttr("style");
		$(this).css("color", "#999");

	});





	 $(".index a").click(function(){

		 var datahref=$(this).attr("data-href");

		 

		 if(datahref){			

			$("#information .fixmenu li").animate({opacity: 0},500);	

			$("#information .fixver li").animate({opacity: 0},500,function(){

				$("#information .index .menutriangle").animate({opacity: 0}, 500,function(){	

					$("#information .index #logobg").fadeOut(500);

					$("#information .index #logotxt").fadeOut(500,function(){	

						location.href = datahref;

					});

				});

			});

		 }

	});

	

	//$(".EmployeeView").width(($(".EmployeeView").children(".Employee").width()+parseInt($(".EmployeeView").children(".Employee").css("margin-right").replace("px","")))*$(".EmployeeView").children(".Employee").size());

	for(i=0;i<Math.ceil($(".EmployeeView").children(".Employee").size()/4);i++){

		var $BtnObj= $("<a>",{"class":"ControlBtn","href":"javascript:void(0);"}); 

		$(".info4 .ViewControl").append($BtnObj);

	}	

	$(".ControlBtn:first").addClass("Activate");

	var ControlIndex=0;

	$(".ControlLeftBtn").hide();

	$(".ControlRightBtn").click(function(){

		$(".ControlBtn:eq("+ ++ControlIndex +")").click();

		if(ControlIndex==$(".ControlBtn").length-1){

			$(".ControlRightBtn").hide();

		}

		$(".ControlLeftBtn").show();

	})

	$(".ControlLeftBtn").click(function(){

		$(".ControlBtn:eq("+ --ControlIndex +")").click();

		if(ControlIndex==0){

			$(".ControlLeftBtn").hide();

		}

		$(".ControlRightBtn").show();

	})

	

	$(".ControlBtn").click(function(){

		$(".EmployeeView").animate({'margin-left': '-'+(($(".Employee").width()+parseInt($(".Employee").css("margin-right").replace("px","")))*4*$(".ControlBtn").index(this))+'px'}, "slow");

		$(".ControlBtn").removeClass("Activate");

		$(this).addClass("Activate");

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

	$("#wechat").click(function(){

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

	

	$(".careerlist .careerlistclose").click(function() {
		$(".careerlist").fadeOut("slow",function(){

		});
	});

	$(".careerlistitem").click(function() {

		var picsrc = $(this).attr("data-pic");
		$("#" + picsrc).fadeIn("slow",function(){
			//
		});

		$("#" + picsrc).siblings(":not(img,style)").fadeOut("slow");
	});

});