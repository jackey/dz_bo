// PluginwheelSence

(function ($) {

	$.fn.PluginSliderSence = function (settings) {

		var config;

		if (typeof settings == 'object' || settings === undefined) config = $.extend( $.fn.PluginSliderSence.defaults, settings || {} );

		if (typeof settings == 'string') config = $.fn.PluginSliderSence.defaults;

		var $self = $(this);

		var $vessel=$self.children(".vessel:first");

		var vesselsize=$self.children(".vessel").size();

		var ScrollWheelswitch=1;

		var animationswitch=true;

		

		var $control = $(".menucontrol");

		var controlInit=function(){

			$control.find("a").click(function(){

				$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

				}); 

				var datavessel=$(this).attr("data-vessel");

				$(this).find("img").attr("src","/images/rollrightmenu"+datavessel+".png");

				if(animationswitch && datavessel){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));	

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);
					}); 					

					$vessel.animate({marginTop:($vessel.height()*-1*(parseInt(datavessel)+1))+"px"},1000,function(){

						ScrollWheelswitch=parseInt(datavessel)+2;						

						animationswitch=true;

						$self.children(".vessel:eq("+(parseInt(datavessel)+1)+")").children("div ,video").fadeIn(500);

					});	

				}	

					

			});

		};

		var $infomenu =$("#backtop");

		var WheelTop=function(){

			$infomenu.click(function(){

				$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

				}); 

				$control.find("a:eq(0)").find("img").attr("src","/images/rollrightmenu0.png");

				if(animationswitch){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));		

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);

					}); 				

					$vessel.animate({marginTop:(0)+"px"},1000,function(){

							ScrollWheelswitch=1;

							$control.hide();

							animationswitch=true;

						$self.children(".vessel:eq(0)").children("div ,video").fadeIn(500);

					});	

				}			

			});

		};



		

		var Init=function(){

			$vessel.css("margin-top",($vessel.height()*-1*(config.Page-1)));

			ScrollWheelswitch=config.Page;

			$control.find("a:eq("+(config.Page-1)+")").find("img").attr("src","/images/rollrightmenu"+(config.Page-1)+".png");

			$self.children(".vessel").each(function(index){ 

				if(index!=config.Page-1){

					$(this).children("div ,video").css({
						display: 'none',
					});

				}

			}); 

		};

		

		var mousewheelInit=function(){

			$self.mousewheel(function(e, delta) {

				TableScrollWheel(e, delta);

			});	

		};

		

		var  TableScrollWheel=function(e, delta) {



			if (delta > 0 && ScrollWheelswitch>1 && animationswitch) {

				animationswitch=false;

				$self.children(".vessel").children("div ,video").each(function(index){ 

						$(this).fadeOut(500);

				}); 				

				$vessel.animate({marginTop:(parseInt($vessel.css("margin-top").replace("px",""))+$vessel.height())+"px"},1000,function(){

						ScrollWheelswitch--;

						if(ScrollWheelswitch==1){

							$control.hide();

						}

						animationswitch=true;

					$control.find("a").each(function(index){ 

						$(this).find("img").attr("src","/images/rightmenu"+index+".png");

					}); 

					$control.find("a:eq("+(ScrollWheelswitch-2)+")").find("img").attr("src","/images/rollrightmenu"+(ScrollWheelswitch-2)+".png");

					$self.children(".vessel:eq("+(ScrollWheelswitch-1)+")").children("div ,video").fadeIn(500);
					});	

			}

			else if (delta < 0 && ScrollWheelswitch<vesselsize && animationswitch) {	

				animationswitch=false;	

				$self.children(".vessel").children("div ,video").each(function(index){ 

						$(this).fadeOut(500);

				}); 				

				$vessel.animate({marginTop:(parseInt($vessel.css("margin-top").replace("px",""))-$vessel.height())+"px"},1000,function(){

							ScrollWheelswitch++;

							animationswitch=true;

					$control.find("a").each(function(index){ 

						$(this).find("img").attr("src","/images/rightmenu"+index+".png");

					}); 

						if(ScrollWheelswitch>=5){

							$control.find("a:eq(3)").find("img").attr("src","/images/rollrightmenu3.png");

							$self.children(".vessel:eq("+(4)+") , .vessel:eq("+(5)+")").children("div ,video").fadeIn(500);

						}else{						

							$control.find("a:eq("+(ScrollWheelswitch-2)+")").find("img").attr("src","/images/rollrightmenu"+(ScrollWheelswitch-2)+".png");
							$self.children(".vessel:eq("+(ScrollWheelswitch-1)+")").children("div ,video").fadeIn(500, function() {
								$control.show();
							});
						}

				});	

				

			}

		}

		Init();

		mousewheelInit();

		controlInit();

		WheelTop();

		$control.hide();

		$("#menucorporate").click(function(){

			$control.show();

			$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

			}); 

			$control.find("a:eq(0)").find("img").attr("src","/images/rollrightmenu0.png");

			if(animationswitch){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));	

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);

					}); 					

					$vessel.animate({marginTop:($vessel.height()*-1*(1))+"px"},1000,function(){

						ScrollWheelswitch=2;						

						animationswitch=true;

						$self.children(".vessel:eq("+(1)+")").children("div ,video").fadeIn(500);

					});	

				}			

		});

		$("#menubrand").click(function(){

			$control.show();

			$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

			}); 

			$control.find("a:eq(1)").find("img").attr("src","/images/rollrightmenu1.png");

			if(animationswitch){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));	

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);

					}); 					

					$vessel.animate({marginTop:($vessel.height()*-1*(2))+"px"},1000,function(){

						ScrollWheelswitch=3;						

						animationswitch=true;

						$self.children(".vessel:eq("+(2)+")").children("div ,video").fadeIn(500);

					});	

				}			

		});

		$("#menuinvestors").click(function(){

			$control.show();

			$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

			}); 

			$control.find("a:eq(2)").find("img").attr("src","/images/rollrightmenu2.png");

			if(animationswitch){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));	

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);

					}); 					

					$vessel.animate({marginTop:($vessel.height()*-1*(3))+"px"},1000,function(){

						ScrollWheelswitch=4;						

						animationswitch=true;

						$self.children(".vessel:eq("+(3)+")").children("div ,video").fadeIn(500);

					});	

				}			

		});

		$("#menucareers").click(function(){

			$control.show();

			$control.find("a").each(function(index){ 

					$(this).find("img").attr("src","/images/rightmenu"+index+".png");

			}); 

			$control.find("a:eq(3)").find("img").attr("src","/images/rollrightmenu3.png");

			if(animationswitch){	

					animationswitch=false;

					//$vessel.css("margin-top",($vessel.height()*-1*($control.find("a").index(this))));	

					$self.children(".vessel").children("div ,video").each(function(index){ 

							$(this).fadeOut(500);

					}); 					

					$vessel.animate({marginTop:($vessel.height()*-1*(4))+"px"},1000,function(){

						ScrollWheelswitch=5;						

						animationswitch=true;

						$self.children(".vessel:eq("+(4)+")").children("div ,video").fadeIn(500);

					});	

				}			

		});



	}

	$.fn.PluginSliderSence.defaults = {

		Page:1,

		PageSize:0,

		SliderMainWidth:[1432,980],

	}

})(jQuery);