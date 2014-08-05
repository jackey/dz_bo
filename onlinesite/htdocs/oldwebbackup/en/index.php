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
			$("#logobg").children("img").attr("src","/images/logo1hover.png");		
		  },		
		  function () {
			$("#logobg").children("img").attr("src","/images/logo1.png");
		  }
		);
		$("#menucorporate").hover(		
		  function () {
			$(this).children("img").attr("src","/images/menucorporatehover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menucorporate.png");
		  }
		);
		$("#menuinvestors").hover(		
		  function () {
			$(this).children("img").attr("src","/images/menuinvestorshover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menuinvestors.png");
		  }
		);
		$("#menubrand").hover(		
		  function () {
			$(this).children("img").attr("src","/images/menubrandhover.png");		
		  },		
		  function () {
			$(this).children("img").attr("src","/images/menubrand.png");
		  }
		);
		$("#menucareers").hover(		
		  function () {
			$(this).children("img").attr("src","/images/menucareershover.png");		
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
            		<div class="title"><img src="/images/servicevip.png"/></div>
                    <div class="cont">
                        VIP Club members will receive exclusive <br/>
                        news on promotions and events. <br/><br/>
                        
                        The webpage is under construction, <br/>
                        please come back soon.
                    </div>
                </div>
            </div>  
            <a href="javascript:void(0)" class="serviceclose" ><img src="/images/close.png" /></a>        
        </div>
		<div class="window social">
        	<div class="servicebg"></div>  
            <div class="servicebox">
            	<div class="content">
            		<div class="title"><img src="/images/servicesocial.png"/></div>
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
            		<div class="title"><img src="/images/servicecontact.png"/></div>
                  <div class="cont">
                    	TOLL FREE CUSTOMER SERVICE  <br/>
                        021- 3250 0106<br/><br/><br/>
                        
                        
                                          WORKING HOURS   <br/>                 
                        MONDAY TO FRIDAY  <br/>
                        9:00 -18:00 <br/>
                      (Excluding National Holidays)<br/><br/><br/>
                        
                                                                             
                                                            EMAIL  <br/>                                     
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
            <li class="menuitem borderright"><a href="javascript:void(0)" id="vip">VIP</a></li>
            <li class="menuitem"><a href="javascript:void(0)" id="social">SOCIAL</a></li>
            <li class="menulogo"><a href="javascript:void(0)" id="backtop"><img src="/images/menulogo.png" /></a></li>
            <li class="menuitem borderright"><a href="javascript:void(0)" id="store">STORES</a></li>
            <li class="menuitem"><a href="javascript:void(0)" id="contact">CONTACT</a></li>                	
        </ul>
    </div>
    <div class="fixver">
        <ul>
            <li class="menuitem"><a href="http://dazzle.tmall.com/" target="_blank">SHOP</a></li>
            <li class="menuitem"><a href="http://weibo.com/dazzlefashion/" target="_blank">WEIBO</a></li>
            <li class="menuitem"><a href="javascript:void(0)" id="wechat">WECHAT</a></li>
            <li class="menuitem"><a href="/cn/index.php">中文</a></li>
        </ul>
    </div>
    <div class="wrap">
    	<div class="vessel index">
        	<div class="logo">
            	<div class="vesselbox">
                    <a href="javascript:void(0)"  data-href="/en/brand.php" id="logotxt"><img src="/images/logo2.png" /></a>
                    <div id="logobg"><img src="/images/logo1.png" /></div>
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
            	<div class="title"><img src="/images/infotitle1.png" /></div>
                <div class="cont">                    
                    Dazzle Fashion Co.,Ltd. is a Shanghai group founded in 2002. Currently owns three brands: <b>DAZZLE, DIAMOND DAZZLE</b> and d’zzit.<br/><br/>

 The three brands were introduced to promote unique lifestyles. High street fashion brand <b>DAZZLE</b> is independent and expressive; semi couture brand <b>DIAMOND DAZZLE</b> gives women a refreshing and luxurious touch; and d’zzit is designed for trendy teenage girls and the ones on their early 20s.<br/><br/>

Currently, Dazzle Fashion Co.,Ltd. has clear positioning in the market for our 3 brands. Our design team is the cutting-edge of the fashion industry, and they are supported by our modern supply chain management, and advanced marketing & sales system to promote the development and expansion of all our brands. <br/><br/>

By the end of 2013, Dazzle Fashion has developed a fully established corporate network which covers 800 stores in 30 provincial areas nationwide. We have also developed a partnership with many chained and independent department stores.    <br/><br/>

In the future, Dazzle Fashion will commit more energy and resources on building our  brand core values. It is our hope, that the unique creativity, artistic design and the tailor-made shopping experience we offered for the consumers, will create a fashion paradise for them. <br/><br/>

It is our belief that dedication and creativity will infuse the fresh energy to our life. “<i>Love creates anything</i>”. This is our corporate spirit, and it will guide us to a bright future!  </div>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
		<div class="vessel info2">
			<div class="pic">
            	<div class="relative">
                    <img src="/images/info2.png" />
                    <a href="/en/brandpage.php?brand=dazzle" id="branddazzle"></a>
                    <a href="/en/brandpage.php?brand=diamond" id="branddiamond"></a>
                    <a href="/en/brandpage.php?brand=dzzit" id="branddzzit"></a>
                </div>
            </div>
			<div class="text">
            	<div class="title"><img src="/images/infotitle2.png" /></div>
                <div class="cont">
                
                DAZZLE is a leading high street fashion brand. DAZZLE is designed for independent and expressive young ladies who are chic and refined. DAZZLE is unique in the way that it is, unrestrictive and personal. For each new season, the focus is on the expression of female body curves; the design retains the essence of the style, and it makes the DAZZLE lady stand out from the crowd.<br/><br/>

DIAMOND DAZZLE blends elements of modernity and luxury, and it is committed to create the new image for women in the 21st century. Exact handcrafting details, complex sewing technique, and the touch of haute couture have all been widely applied in DIAMOND DAZZLE new arrivals of each season.<br/><br/>

d'zzit is for young girls who adore European fashion style, appreciate cosmopolitan beauty standards, and are keen on the latest fashion trends globally. 

                </div>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <div class="vessel infomedia">
			<div class="menu">
            	<div class="title"><img src="/images/infotitlemedia.png" /></div>
                <div class="cont">
                	<ul>
                    	<li><a  href="javascript:void(0)" data-source="dazzle_final" class="videoitem" >2011  Autumn/Winter Fashion Show</a></li>
                    	<li><a  href="javascript:void(0)" data-source="dazzle" class="videoitem" >Nina x DAZZLE call on the Vampire Diaries</a></li>
                    	<li><a  href="javascript:void(0)" data-source="elle" class="videoitem" >HUA YI ELLE Night</a></li>
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
                <div class="title"><img src="/images/infotitle3.png" /></div>
                <div class="cont">
                <a href="javascript:void(0)" data-pic="/images/careerlist1.png" class="careerlistitem"><img src="/images/careerli.png"/>Assistant to Apparel Designer</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/images/careerlist2.png" class="careerlistitem"><img src="/images/careerli.png"/>Assistant to Graphic Designer</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/images/careerlist3.png" class="careerlistitem"><img src="/images/careerli.png"/>Auditing Manager</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/images/careerlist4.png" class="careerlistitem"><img src="/images/careerli.png"/>Data Analyst</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/images/careerlist5.png" class="careerlistitem"><img src="/images/careerli.png"/>Auditor</a><br/><br/>
                <a href="javascript:void(0)" data-pic="/images/careerlist6.png" class="careerlistitem"><img src="/images/careerli.png"/>Training and Development Manager</a><br/><br/>                
                </div>
                <div class="cont">
                <br/><br/><br/><br/>
                    Follow us for other vacancies on:<br/><br/>

                51JOB：	<a href="http://51JOB.COM" target="_blank">51JOB.COM</a><br/>
                智联招聘：	<a href="http://ZHAOPIN.COM" target="_blank">ZHAOPIN.COM</a><br/>
                    猎聘网：	<a href="http://LIEPIN.COM" target="_blank">LIEPIN.COM</a><br/><br/>
                    Please send your Resume to:<br/>
                    <a href="mailto:hr_recuiting@dazzle-fashion.com" style="color:#0066e3;text-decoration:underline">hr_recuiting@dazzle-fashion.com</a><br/>
                </div>

            </div>
        </div>        
    </div>
</body>
</html>