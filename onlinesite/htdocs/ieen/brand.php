<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="DAZZLE Fashion";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
    <script type="text/javascript" src="/js/brand.js"></script>
    <script type="text/javascript" src="/js/service.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=TchFfRQ3K7FhNDETEPNSezHW"></script>
    <script type="text/javascript" src="/js/store.js"></script>
</head>

<body id="brand">
    <?php include 'inc/dataset.php'; ?>
    <div class="windowmask"></div>
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
                        9:30 -18:30 <br/>
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
    <div class="wrap">
        <div class="vessel">
			<div class="bg pic">
            	<img src="/images/bgdiamond.jpg" />
            </div>
			<div class="Diamond pic hexagon">
            	<img src="/images/brandDiamond.png" />
                <a href="javascript:void(0)" data-href="/ieen/brandpage.php?brand=diamond" data-src="/images/bgdiamond.jpg" class="brandpage"><img src="/images/linkdiamond.png"/></a>
            </div>
			<div class="dzzit pic hexagon">
            	<img src="/images/branddzzit.png" />
                <a href="javascript:void(0)" data-href="/ieen/brandpage.php?brand=dzzit" data-src="/images/bgdzzit.jpg" class="brandpage"><img src="/images/linkdzzit.png" /></a>
            </div>
			<div class="Dazzle pic hexagon">
            	<img src="/images/brandDazzle.png" />
                <a href="javascript:void(0)" data-href="/ieen/brandpage.php?brand=dazzle" data-src="/images/bgdazzle.jpg" class="brandpage"><img src="/images/linkDazzle.png" /></a>
            </div>
            <div class="menu">
            	<ul>
                	<li class="menuitem borderright"><a href="javascript:void(0)" id="vip">VIP</a></li>
                    <li class="menuitem"><a href="javascript:void(0)" id="social">SOCIAL</a></li>
                    <li class="menulogo"><a href="/ieen/index.php"><img src="/images/menulogo.png" /></a></li>
                    <li class="menuitem borderright"><a href="javascript:void(0)" id="store">STORES</a></li>
                    <li class="menuitem"><a href="javascript:void(0)" id="contact">CONTACT</a></li>                	
                </ul>
            </div>
        </div>        
    </div>
</body>
</html>