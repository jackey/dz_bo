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
			<div class="pic">
            	<div class="relative">
                    <img id="brandinfopic" src="/images/info2.png" border="0" usemap="#Map" />
                    <map name="Map">
                      <area shape="poly" coords="111,157,19,317,111,476,292,476,385,315,293,159" href="/en/brandpage.php?brand=diamond">
                      <area shape="poly" coords="293,158,383,1,569,3,657,157,569,317,386,314" href="/en/brandpage.php?brand=dazzle">
                      <area shape="poly" coords="386,316,292,475,383,634,566,633,657,471,568,318" href="/en/brandpage.php?brand=dzzit">
                    </map>
                    <map name="Mapsmall">
                      <area shape="poly" coords="95,124,17,253,92,380,242,381,321,255,243,126" href="/en/brandpage.php?brand=diamond">
                      <area shape="poly" coords="242,128,324,-6,476,1,547,127,472,255,322,256" href="/en/brandpage.php?brand=dazzle">
                      <area shape="poly" coords="322,255,245,381,320,509,473,508,549,381,473,254" href="/en/brandpage.php?brand=dzzit">
                    </map>
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
        <div class="vessel info3">
			<div class="pic">
                    <img src="/images/info3.png" />
                    <div class="careerlist" id="clothdesign" style="display:block;">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Assistant to Apparel Designer:</h3>
                                <dl>
                                    <dt>Position Requirements:</dt>
                                    <dd>1.Assist designers for design works</dd>
                                    <dd>2.Be proactive, willing to learn and possess great design potentials</dd>
                                    <dd>3.This position is ideal for university graduates, training will be provided on the job</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.Bachelor degree</dd>
                                    <dd>2.Loves fashion</dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
                    
                    <div class="careerlist" id="imagedesign">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Assistant to Graphic Designer:</h3>
                                <dl>
                                    <dt>Position Requirements</dt>
                                    <dd>1.Assist graphic designer for each season’s pattern design works</dd>
                                    <dd>2.Make changes to the work based on Graphic Designer’s feedback</dd>
                                    <dd>3.Collect real-time fashion elements</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.University graduates majored in graphic design/textile design preferred</dd>
                                    <dd>2.Proficiency in graphic design software such as Photoshop, CoreIDRAW, and AI</dd>
                                    <dd>3.Good drawing skills, perceptive to new fashion trend</dd>
                                    <dd>4.A team player with great communication skills</dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
                    
                    <div class="careerlist" id="shenjimanager">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Auditing Manager</h3>
                                <dl>
                                    <dt>Position Requirements</dt>
                                    <dd>1.Audit the business process of retailer, and authorized sellers management</dd>
                                    <dd>2.Conduct internal auditing to regulate the brand promotion process</dd>
                                    <dd>3.Conduct internal auditing to regulate the renovation and installation process in shopping malls</dd>
                                    <dd>4.Conduct auditing to supervise authorized sellers’ sales refunding process</dd>
                                    <dd>5.Conduct internal auditing to supervise the fixed assets purchase and payment</dd>
                                    <dd>6.Conduct internal auditing to supervise the material purchasing and payment process</dd>
                                    <dd>7.Check the transaction proceedings </dd>
                                    <dd>8.Investment management and internal auditing for withdrawal management</dd>
                                    <dd>9.Other related tasks</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.College degree with concentration in marketing, and auditing related studies</dd>
                                    <dd>2.8 years plus working experience</dd>
                                    <dd>3.Quick to grasp the key points of the business</dd>
                                    <dd>4.Responsible, honest; able to keep the corporate confidential</dd>
                                    <dd>5.Be able to work with finance department and other departments to fulfill auditing tasks</dd>
                                    <dd>6.Business travels are required for the job</dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
                    
                    <div class="careerlist" id="dataanylize">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Data Analyst</h3>
                                <dl>
                                    <dt>Position Requirements</dt>
                                    <dd>1.Conduct analysis and research to the market environment of fashion industry </dd>
                                    <dd>2.Conduct analysis and research to the CoBP cases and OCA compliance</dd>
                                    <dd>3.Conduct analysis to business management data</dd>
                                    <dd>4.Conduct training sessions to management team</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.Post-graduate degree from one of the key universities </dd>
                                    <dd>2.Strong trans-discipline study background, with undergraduate level Mathematics, Applied Mathematics, Physics, Statistics or Computer Science knowledge; with post-graduate level Statistics, Marketing or MBA (Marketing concentration) studies</dd>
                                    <dd>3.Has great understanding of statistics modeling, proficiency in using statistics software such as SPSS, R, SAS, or EVIEWS</dd>
                                    <dd>4.Great with communications, attention to the detail </dd>
                                    <dd>5.Willing to learn new things, good at generalize the main points</dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
                    
                    <div class="careerlist" id="shenjiyuan">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Auditor</h3>
                                <dl>
                                    <dt>Position Requirements</dt>
                                    <dd>1.Identify key risky areas and follow-up for improvement realization</dd>
                                    <dd>2.Prepare well-organized audit reports</dd>
                                    <dd>3.Review and evaluate significant business processes control effectiveness, identify issues and provide suggestions</dd>
                                    <dd>4.pply all the audit findings with business functions to achieve feasible improvement actions</dd>
                                    <dd>5.Ad hoc auditing and business management assistance</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.College graduate with degree in Auditing, Finance, or Law</dd>
                                    <dd>2.2 years or plus auditing experience, accounting firm professionals preferred</dd>
                                    <dd>3. Familiar with accounting, auditing and taxation process</dd>
                                    <dd>4.Proficiency in office and auditing software</dd>
                                    <dd>5.A team player and a quick learner</dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
                    
                    <div class="careerlist" id="fazhan">
                        <div class="testcareer">
                            <div class="testbox">
                                <h3>Training and Development Manager</h3>
                                <dl>
                                    <dt>Position Requirements</dt>
                                    <dd>1.Develop the internal training program; work with external vendors to achieve training objectives; help new employees to adapt to the work</dd>
                                    <dd>2.Assist other departments to carry out training programs</dd>
                                    <dd>3.Periodically review the talent development process</dd>
                                    <dd>4.Facilitate company’s introduction process to new employees </dd>
                                    <dd>5.Develop company’s overall training plan</dd>
                                    <dd>6.Promote DAZZLE’s company culture and values</dd>
                                    <dd>7.Provide strong training and employee development support to all the departments</dd>
                                    <dd>8.Provide support based on individual department’s need</dd>
                                </dl>
                                <dl>
                                    <dt>Qualifications</dt>
                                    <dd>1.Above 8 years working experience in HR management of retail, FMCG companies, experience in fashion industry is highly preferred</dd>
                                    <dd>2.Bachelor degree in HR management or business management </dd>
                                </dl>
                            </div>
                        </div>
                        <a  href="javascript:void(0)" class="careerlistclose"  ><img src="/images/close.png"/></a>
                    </div>
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
                <a href="javascript:void(0)" data-pic="clothdesign" class="careerlistitem"><img src="/images/careerli.png"/>Assistant to Apparel Designer</a><br/><br/>
                <a href="javascript:void(0)" data-pic="imagedesign" class="careerlistitem"><img src="/images/careerli.png"/>Assistant to Graphic Designer</a><br/><br/>
                <a href="javascript:void(0)" data-pic="shenjimanager" class="careerlistitem"><img src="/images/careerli.png"/>Auditing Manager</a><br/><br/>
                <a href="javascript:void(0)" data-pic="dataanylize" class="careerlistitem"><img src="/images/careerli.png"/>Data Analyst</a><br/><br/>
                <a href="javascript:void(0)" data-pic="shenjiyuan" class="careerlistitem"><img src="/images/careerli.png"/>Auditor</a><br/><br/>
                <a href="javascript:void(0)" data-pic="fazhan" class="careerlistitem"><img src="/images/careerli.png"/>Training and Development Manager</a><br/><br/>                
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