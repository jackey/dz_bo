<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="DAZZLE Fashion";
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
    <div class="windowmask"></div>
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
                                    <?php $qrcodes = getQrcodes();?>
                                    <?php foreach ($qrcodes as $qrcode): ?>
                                        <div class="item">
                                            <img src="<?php echo getThumbnailURL($qrcode->thumbnail)?>"/>                     
                                        </div>
                                    <?php endforeach;?>
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
                    <div class="cont"><?php echo getContact()->body;?> </div>
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
        <?php $corporate = loadCorporate();?>
        <div class="vessel info1">
			<div class="pic">
            <?php if ($corporate->thumbnail):?>
            <img src="<?php echo getThumbnailURL($corporate->thumbnail)?>" />
            <?php else:?>
            <img src="/images/info1.png" />
            <?php endif;?>
            </div>
			<div class="text">
            	<div class="title"><img src="/images/infotitle1.png" /></div>
                <div class="cont">  <?php echo $corporate->body?></div>
        </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <div class="vessel info2">
      <?php $brandinfo = loadBrandInformation();?>
            <div class="pic">
                <div class="relative">
                    <?php if ($brandinfo->dazzle_thumbnail):?>
                    <img id="brandinfopic" src="<?php echo getThumbnailURL($brandinfo->dazzle_thumbnail)?>" border="0" usemap="#Map" />
                    <?php else: ?>
                    <img id="brandinfopic" src="/images/info2.png" border="0" usemap="#Map" />
                    <?php endif;?>
                    <map name="Map">
                      <area shape="poly" coords="111,157,19,317,111,476,292,476,385,315,293,159" href="/cn/brandpage.php?brand=diamond">
                      <area shape="poly" coords="293,158,383,1,569,3,657,157,569,317,386,314" href="/cn/brandpage.php?brand=dazzle">
                      <area shape="poly" coords="386,316,292,475,383,634,566,633,657,471,568,318" href="/cn/brandpage.php?brand=dzzit">
                    </map>
                    <map name="Mapsmall">
                      <area shape="poly" coords="95,124,17,253,92,380,242,381,321,255,243,126" href="/cn/brandpage.php?brand=diamond">
                      <area shape="poly" coords="242,128,324,-6,476,1,547,127,472,255,322,256" href="/cn/brandpage.php?brand=dazzle">
                      <area shape="poly" coords="322,255,245,381,320,509,473,508,549,381,473,254" href="/cn/brandpage.php?brand=dzzit">
                    </map>
                </div>
            </div>
            <div class="text">
                <div class="title"><img src="/cn/img/infotitle2.png" /></div>
                <div class="cont"><?php echo $brandinfo->body?></div>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <div class="vessel infomedia">
			<div class="menu">
            	<div class="title"><img src="/images/infotitlemedia.png"></div>
                <div class="cont">
                    <?php $videoes = getVideoList();?>
                    <ul>
                      <?php foreach ($videoes as $video):?>
                          <li><a  href="javascript:void(0)" data-webm-source="<?php echo $video->video_webm?>" data-mp4-source="<?php echo $video->video_mp4?>" class="videoitem" ><?php echo $video->title?></a></li>
                      <?php endforeach;?> 
                    </ul>               
                </div>
            </div>
            <?php $video = array_shift($videoes);?>
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
                            file: "<?php echo $video->video_mp4?>"
                        });
                    </script>  
                </video>
            </div>
            <a  href="javascript:void(0)" class="infoarrow"  ><img src="/images/infoarrow.png" /></a>
        </div>
        <?php $jobs = getCareerList();?>
        <div class="vessel info3">
			<div class="pic">
                    <img src="/images/info3.png" />
                    <?php foreach ($jobs as $job): ?>
                        <div class="careerlist" id="career-<?php echo $job->cid?>">
                            <div class="testcareer">
                                <div class="testbox">
                                    <h3><?php echo $job->title?></h3>
                                    <?php echo $job->body?>
                                </div>
                            </div>
                            <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                        </div>
                    <?php endforeach;?>
                    
            </div>

                        <style>
                            .testcareer{font-family: "微软雅黑";width: 320px;margin: 0 auto;position: relative;min-height: 550px;}
                            .testbox{position: absolute;margin: auto;top: 0;left: 0;right: 0;bottom: 0;height: 410px;}
                            #fazhan .testbox{height: 470px;}
                            #shenjiyuan .testbox{height: 430px;}
                            #dataanylize .testbox{height: 450px;}
                            #shenjimanager .testbox{height: 550px;}
                            .testcareer dl{margin-top: 25px;line-height: 1.5em;}
                            #shenjimanager dl{margin-top: 10px;}
                            .testcareer h3{height: 34px;line-height: 34px;border-bottom: solid 1px #fff;}
                            .careerlist{display: none;}
                        </style>
			<div class="text">            
                <div class="title"><img src="/images/infotitle3.png" /></div>
                <div class="cont">
                <?php foreach ($jobs as $job): ?>
                    <a href="javascript:void(0)" data-pic="career-<?php echo $job->cid?>" class="careerlistitem"><img src="/images/careerli.png"/><?php echo $job->title?></a><br/><br/>
                <?php endforeach;?>     
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