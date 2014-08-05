<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
    <script type="text/javascript" src="/js/infomation.js"></script>
    <script type="text/javascript" src="/js/service.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=TchFfRQ3K7FhNDETEPNSezHW"></script>
    <script type="text/javascript" src="/js/store.js"></script>
	<script>
	$(function(){
		$("#logotxt").hover(		
		  function () {
			$("#logobg").children("img").attr("src","/cn/img/logo1hover.png");		
		  },		
		  function () {
			$("#logobg").children("img").attr("src","/images/logo1.png");
		  }
		);
		$("#menucorporate").hover(		
		  function () {
			$(this).children("img").attr("src","/cn/img/menucorporatehover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menucorporate.png");
		  }
		);
		$("#menuinvestors").hover(		
		  function () {
			$(this).children("img").attr("src","/cn/img/menuinvestorshover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menuinvestors.png");
		  }
		);
		$("#menubrand").hover(		
		  function () {
			$(this).children("img").attr("src","/cn/img/menubrandhover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menubrand.png");
		  }
		);
		$("#menucareers").hover(		
		  function () {
			$(this).children("img").attr("src","/cn/img/menucareershover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menucareers.png");
		  }
		);
	});
    </script>
</head>

<body id="information">
    <?php include 'inc/dataset.php'; ?>
	<div class="top">
        <ul class="menucontrol">
            <li><a href="javascript:void(0)" data-vessel="0"><img src="/images/rightmenu0.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="1"><img src="/images/rightmenu1.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="2"><img src="/images/rightmenu2.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="3"><img src="/images/rightmenu3.png" /></a></li>            
        </ul>
    </div>
    <div id="service">
        <div class="window vip">
        	<div class="servicebg"></div>  
            <div class="servicebox">
            	<div class="content">
            		<div class="title"><img src="/cn/img/servicevip.png"/></div>
                    <div class="cont">
                    VIP 会员将会收到会员活动独家信息。<br/><br/>

					网站建设中，敬请期待。
                    </div>
                </div>
            </div>  
            <a href="javascript:void(0)" class="serviceclose" ><img src="/images/close.png" /></a>        
        </div>
		<div class="window social">
        	<div class="servicebg"></div>  
            <div class="servicebox">
            	<div class="content">
            		<div class="title"><img src="/cn/img/servicesocial.png"/></div>
                    <div class="cont code">
                            <div class="ViewArea">
                              <div class="itemView">
                                    <div class="item">
                                        <img src="/images/codedazzle.png"/>                    	
                                    </div>
                                    <div class="item">
                                        <img src="/images/codedzzit.png"/>                    	
                                    </div>
                                    <div class="item">
                                        <img src="/images/codediamond.png"/>                    	
                                    </div>
                              </div>
                            </div>
                            <div class="ViewControl">
                                <a class="socialControlLeftBtn" href="javascript:void(0);"><img src="/images/Dazzleleft.png"></a>
                                <a class="socialControlRightBtn" href="javascript:void(0);"><img src="/images/Dazzleright.png"></a>
                            </div>
                    </div>
                </div>
            </div>  
            <a href="javascript:void(0);" class="serviceclose" ><img src="/images/close.png" /></a>        
        </div>
		<div class="window contact">
        	<div class="servicebg"></div>  
            <div class="servicebox">
            	<div class="content">
            		<div class="title"><img src="/cn/img/servicecontact.png"/></div>
                  <div class="cont">
                    	免费客服热线  <br/>
                        021- 3250 0106<br/><br/><br/>
						客服热线时间： <br/>                 
                        周一到周五 <br/>
                        9:00 -18:00 <br/>
                        （国定假日除外）<br/><br/><br/>
                        邮箱   <br/>                                     
                    <a class="mail" href="mailto:dazzle-fashion@dazzle-fashion.com">dazzle-fashion@dazzle-fashion.com</a></div>
                </div>
            </div>  
            <a href="javascript:void(0);" class="serviceclose" ><img src="/images/close.png" /></a>        
        </div>
		<div class="window store">
        	<div class="mapcontrol">
            	<div class="bg"><img src="/images/servicestorebg.png" /></div>
                <div class="menu"><img src="/images/servicestore.png" /></div>
                <div class="select">
                    <div id="selectdazzle" class="selectarea">
                        <div class="selecttitle"><img src="/images/storedazzle.png" /></div>
                        <div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A PROVINCE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectcity">
                            	<a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A CITY</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectstore">
                            	<a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A STORE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>    
                        </div>                        
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                    <div id="selectdiamond" class="selectarea">
                        <div class="selecttitle"><img src="/images/storediamond.png" /></div>
						<div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <a href="javascript:void(0)" data-brand="diamond" class="Selected">SELECT A PROVINCE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectcity">
                            	<a href="javascript:void(0)"  data-brand="diamond" class="Selected">SELECT A CITY</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectstore">
                            	<a href="javascript:void(0)" data-brand="diamond" class="Selected">SELECT A STORE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                    <div id="selectdzzit" class="selectarea">
                        <div class="selecttitle"><img src="/images/storedzzit.png" /></div>
						<div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <div class="selectlist">                       	
                                </div>
                                <a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A PROVINCE</a>
                            </div>
                            <div class="selectobj selectcity">
                                <div class="selectlist">                       	
                                </div>
                            	<a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A CITY</a>
                            </div>
                            <div class="selectobj selectstore">
                                <div class="selectlist">                       	
                                </div>
                            	<a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A STORE</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                </div>
            </div>
            <div class="map">
            	<div id="mapContent" class="MapContent"></div>
            </div>              
            <a href="javascript:void(0)" class="servicecloseblack" ><img src="/images/closeblack.png" /></a>        
        </div>
    </div>
    <div class="fixmenu">
            	<ul>
                	<li class="menuitem borderright"><a href="javascript:void(0)" id="vip"><img src="/cn/img/bottomvip.png" /></a></li>
                    <li class="menuitem"><a href="javascript:void(0)" id="social"><img src="/cn/img/bottomsocial.png" /></a></li>
                    <li class="menulogo"><a href="javascript:void(0)" id="backtop"><img src="/images/menulogo.png" /></a></li>
                    <li class="menuitem borderright"><a href="javascript:void(0)" id="store"><img src="/cn/img/bottomstore.png" /></a></li>
                    <li class="menuitem"><a href="javascript:void(0)" id="contact"><img src="/cn/img/bottomcontact.png" /></a></li>                	
                </ul>
    </div>
    <div class="fixver">
        <ul>
            <li class="menuitem"><a href="http://dazzle.tmall.com/" target="_blank">网上商城</a></li>
            <li class="menuitem"><a href="http://weibo.com/dazzlefashion/" target="_blank"> 新浪微博</a></li>
            <li class="menuitem"><a href="javascript:void(0)" id="wechat">微信</a></li>
            <li class="menuitem"><a href="/en/index.php">ENGLISH</a></li>
        </ul>
    </div>
    <div class="wrap">
    	<div class="vessel index">
        	<div class="logo">
            	<div class="vesselbox">
                    <a href="javascript:void(0)"  data-href="/cn/brand.php" id="logotxt"><img src="/images/logo2.png" /></a>
                    <div id="logobg"><img src="/cn/img/logo1.png" /></div>
                    <a href="javascript:void(0)"  id="menucorporate" class="menutriangle"><img src="/images/menucorporate.png" /></a>
                    <a href="javascript:void(0)"  id="menuinvestors" class="menutriangle"><img src="/images/menuinvestors.png" /></a>
                    <a href="javascript:void(0)"  id="menubrand" class="menutriangle"><img src="/images/menubrand.png" /></a>
                    <a href="javascript:void(0)"  id="menucareers" class="menutriangle"><img src="/images/menucareers.png" /></a>
                    <div class="menumask masktopleft"></div>
                    <div class="menumask masktopright"></div>
                    <div class="menumask maskbottomleft"></div>
                    <div class="menumask maskbottomright"></div>
                </div>
            </div>            
        </div>
        <div class="vessel info1">
			<div class="pic">
            <img src="/images/info1.png" />
            </div>
			<div class="text">
            	<div class="title"><img src="/cn/img/infotitle1.png" /></div>
                <div class="cont">                    
                     地素时尚股份有限公司（以下简称"地素时尚"），2002年创立于中国的时尚之都上海，是一家多品牌运作的服饰时尚集团。<br/><br/>

为创造并引导个性化的生活方式，地素时尚分别创立三个知名女装品牌——独立率性的专属高街品牌DAZZLE，年轻奢华的半手工定制品牌DIAMOND DAZZLE，以及奇幻复古的混搭潮流品牌d'zzit；多元化的风格设计，不仅满足了不同消费群体的兴趣爱好与着装需求，更无一例外地"帮助人们成为最美好的自己"。<br/><br/>
 当下，地素时尚品牌定位清晰，研发设计团队走在引领时尚的前沿，现代化供应链、营销服务系统、智能网络管理模块等正360度全方位推动各品牌的迅速成长与发展。<br/><br/>
 截至2013年底，地素时尚旗下品牌的终端销售网络已覆盖全国30多个省级行政区域，各品牌全国门店合计达800余家，与恒隆、和记黄埔、王府井、银泰、万达、来福士、百联、太平洋、大洋、大商集团等连锁商业集团建立并保持着紧密的合作伙伴关系。<br/><br/>
 未来，地素时尚将在品牌的核心价值打造上，投入更多精力与资源，希望可以通过非凡个性的创意、充满艺术魅力的格调以及深切触动心灵的购物体验，打造一座勇敢、创新、充满梦想的时尚乐园，为辛苦而脆弱的人生带来休憩与欢愉，并在国际化的时尚版图上开拓出不可或缺的一席之地。<br/><br/>
 我们深信：勇敢的追求和创新的意识，会为生活注入新鲜的活力，带来美好的改变；而"爱创造一切"的企业精神，将一路照亮生命的旅程，引导人们朝着梦想的方向，生长！ 

                </div>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
		<div class="vessel info2">
			<div class="pic">
            	<div class="relative">
                    <img src="/images/info2.png" />
                    <a href="/cn/brandpage.php?brand=dazzle" id="branddazzle"></a>
                    <a href="/cn/brandpage.php?brand=diamond" id="branddiamond"></a>
                    <a href="/cn/brandpage.php?brand=dzzit" id="branddzzit"></a>
                </div>
            </div>
			<div class="text">
            	<div class="title"><img src="/cn/img/infotitle2.png" /></div>
                <div class="cont">

DAZZLE引领主流社会高街时尚， 为独立率性、追求自由的现代女性而设计，兼具时尚意识 和文化内涵。并将内涵与个性融入服装的外在风格中，不受传统规矩与框架的束缚。 每季度的设计单品，都着重体现人体的线条魅力； 提供时装精般的造型风格，在随俗中脱俗，在大众中彰显个性。<br/><br/>

DIAMOND DAZZLE将摩登时尚和奢华元素融为一体的轻奢侈女装品牌，并致力于打造21世纪新女性形象； 精致的手工细节，繁复的制作工艺，以及具有高级定制感的时尚元素，被广泛应用于每一季服装中。<br/><br/>

d'zzit是集欧洲设计风格、都会女孩美学和全球时尚为一体的潮流品牌，提供多样的时髦单品，追求潮流零时差，具有非凡的混搭能力，令率真叛逆、特立独行的年轻女孩族群成为其疯狂的拥趸。<br/><br/>



                </div>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <div class="vessel infomedia">
			<div class="menu">
            	<div class="title"><img src="/images/infotitlemedia.png" /></div>
                <div class="cont">
                	<ul>
                    	<li><a  href="javascript:void(0)" data-source="dazzle_final" class="videoitem" >2011年DAZZLE秋冬时装发布会</a></li>
                    	<li><a  href="javascript:void(0)" data-source="dazzle" class="videoitem" >NinaxDAZZLE造访吸血鬼日记</a></li>
                    	<li><a  href="javascript:void(0)" data-source="elle" class="videoitem" >华谊ELLE之夜</a></li>
                    </ul>                
                </div>
            </div>
            <div class="videobox">
                <video id="beginVideo" poster="/images/vedio.jpg"
                     controls
                     loop="loop"> 
                      <source src="/video/dazzle_final.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                      <source src="/video/dazzle_final.webm" type='video/webm; codecs="vp8, vorbis"' />
                     <div id="mediaplayer">JW Player goes here</div>
                     
                    <script type="text/javascript">
                        jwplayer("mediaplayer").setup({
                            flashplayer: "/flash/player.swf",
                            file: "/video/dazzle_final.mp4"
                        });
                    </script>  
                </video>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <div class="vessel info3">
			<div class="pic">
                    <img src="/images/info3.png" />
                    <div class="careerlist">
                    	<img src="/images/careerlist1.png" class="careerlistpic"/>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
            </div>
            <div class="text">            
                <div class="title"><img src="/cn/img/infotitle3.png" /></div>
                <div class="cont">
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist1.png" class="careerlistitem"><img src="/images/careerli.png"/>服装设计助理</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist2.png" class="careerlistitem"><img src="/images/careerli.png"/>图案设计助理</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist3.png" class="careerlistitem"><img src="/images/careerli.png"/>业务审计经理</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist4.png" class="careerlistitem"><img src="/images/careerli.png"/>数据分析师</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist5.png" class="careerlistitem"><img src="/images/careerli.png"/>审计员</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/cn/img/careerlist6.png" class="careerlistitem"><img src="/images/careerli.png"/>培养发展经理</a><br/><br/>                
                </div>
                <div class="cont">
                <br/><br/><br/><br/>
                    关注我们了解其他招聘信息:<br/><br/>

                51JOB：	<a href="http://51JOB.COM" target="_blank">51JOB.COM</a><br/>
                智联招聘：	<a href="http://ZHAOPIN.COM" target="_blank">ZHAOPIN.COM</a><br/>
                    猎聘网：	<a href="http://LIEPIN.COM" target="_blank">LIEPIN.COM</a><br/><br/>
                    简历请发送至：<br/>
                    <a href="mailto:hr_recuiting@dazzle-fashion.com" style="color:#0066e3;text-decoration:underline">hr_recuiting@dazzle-fashion.com</a><br/>
                </div>
            </div>			
        </div>
        
    </div>
</body>
</html>