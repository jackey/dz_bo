$(function(){
	document.body.ontouchmove = function(e){
		e.preventDefault();
	};

	if(document.body.clientWidth <1680){
		if(navigator.userAgent.indexOf("MSIE")>0) {  
				if(window.location.pathname.indexOf("/ie") > -1){	
				}else{				
					if (window.location.pathname.slice(1)==""){		
						window.location.href="/iecn/index.php";
					}else{
						window.location.href="/ie"+window.location.pathname.slice(1);
					}
				}
			}
	}

	
	var debounce=function debounce(callback, delay, context){
				if (typeof(callback) !== "function") {
					return;
				}
				delay = delay || 150;
				context = context || null;
				var timeout;
				var runIt = function(){
						callback.apply(context);
					};
				return (function(){
				window.clearTimeout(timeout);
					timeout = window.setTimeout(runIt, delay);
				});
	};
	var redraw = function(event){
		if(document.body.clientWidth >1679){
			if(navigator.userAgent.indexOf("MSIE")>0) {  
				if(window.location.pathname.indexOf("/ie") > -1){				
					window.location.href="/"+window.location.pathname.slice(3);
				}else{				
					window.location.reload();
				}
			}else{
				window.location.reload();
			}
		}else 
		{
			if(navigator.userAgent.indexOf("MSIE")>0) {  
				if(window.location.pathname.indexOf("/ie") > -1){				
					window.location.reload();
				}else{				
					if (window.location.pathname.slice(1)==""){		
						window.location.href="/iecn/index.php";
					}else{
						window.location.href="/ie"+window.location.pathname.slice(1);
					}
				}
			}else{
				window.location.reload();
			}
		}
	};
	$(window).resize(debounce(redraw, 300));
});