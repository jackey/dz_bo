<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
	<style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <script type="text/javascript" src="/js/store.js"></script>
</head>

<body id="service">
    <div class="wrap">
        <div class="vessel">
        	<div class="mapcontrol">
            	<div class="bg"><img src="/images/servicestorebg.png" /></div>
                <div class="menu"><img src="/images/servicestore.png" /></div>
                <div class="select">
                    <div class="selectarea">
                        <div class="selecttitle"><img src="/images/storedazzle.png" /></div>
                        <div><select name=""><option>SELECT A COUNTRY</option></select></div>
                        <div><select name=""><option>SELECT A PROVINCE</option></select></div>
                        <div><select name=""><option>SELECT A CITY</option></select></div>
                    </div>
                    <div class="selectarea">
                        <div class="selecttitle"><img src="/images/storediamond.png" /></div>
                        <div><select name=""><option>SELECT A COUNTRY</option></select></div>
                        <div><select name=""><option>SELECT A PROVINCE</option></select></div>
                        <div><select name=""><option>SELECT A CITY</option></select></div>
                    </div>
                    <div class="selectarea">
                        <div class="selecttitle"><img src="/images/storedzzit.png" /></div>
                        <div><select name=""><option>SELECT A COUNTRY</option></select></div>
                        <div><select name=""><option>SELECT A PROVINCE</option></select></div>
                        <div><select name=""><option>SELECT A CITY</option></select></div>
                    </div>
                </div>
            </div>
            <div class="map">
            	<div id="mapContent" class="MapContent"></div>
            </div>              
            <a href="javascript:history.go(-1);" class="servicecloseblack" ><img src="/images/closeblack.png" /></a>        
        </div>
    </div>
</body>
</html>