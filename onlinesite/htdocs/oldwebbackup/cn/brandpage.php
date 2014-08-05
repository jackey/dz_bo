<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
    <script>
			var vesselinfo="corporate";
			<?php
				$brand="";
				if(isset($_GET["brand"])){
            		$brand=$_GET["brand"];
					echo "vesselinfo='" .$_GET["brand"] ."';";
				}
			?>		
    </script>
    <script type="text/javascript" src="/js/brandpage.js"></script>
    <script type="text/javascript" src="/js/service.js"></script>
</head>

<body id="brandpage">
	<div id="service">
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
    </div>
    <div class="wrap">
    	<div class="top">
			<ul>
            	<?php
				switch ($brand)
				{
				case "dazzle":
				?>
                <li><a href="/"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				  break;
				case "diamond":
				?>
                <li><a href="/"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=diamond"><img src="/images/productdiamond.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				case "dzzit":
				?>
                <li><a href="/"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dzzit"><img src="/images/productdzzit.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				default:
				?>
                <li><a href="/"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/cn/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				}
				?>
                
                <li><a href="/cn/lookbook.php?brand=<?php echo $brand;?>"><img src="/images/menulookbook.png" /></a></li>
                <li><a href="/cn/arrivals.php?brand=<?php echo $brand;?>"><img src="/cn/img/menuarrivals.png" /></a></li>
                
            </ul>
            <div class="ver">
            	<ul>
                	<li class="menuitem"><a href="http://dazzle.tmall.com/" target="_blank">网上商城</a></li>
                	<li class="menuitem"><a href="http://weibo.com/dazzlefashion/" target="_blank"> 新浪微博</a></li>
                	<li class="menuitem"><a href="javascript:void(0)" id="wechat">微信</a></li>
                	<li class="menuitem"><a href="/en/brandpage.php?brand=<?php echo $brand;?>">ENGLISH</a></li>
                </ul>
            </div>
        </div>
        <div class="vessel">
			<div class="ViewArea">
                <div class="itemView">
                    <div class="item Dazzle">
                    	<div class="pic"><img src="/images/Dazzlepage.png" /></div>
                        <div class="cont">
                               <img src="/cn/img/dazzlestory.png"/> 
                        </div>
                        <div class="link"><img id="dazzlelinkpic" src="/cn/img/Dazzlelink.png" border="0" usemap="#Map" />
                          <map name="Map">
                            <area shape="rect" coords="411,60,480,196" href="/cn/lookbook.php?brand=dazzle">
                            <area shape="rect" coords="484,217,600,247" href="/cn/lookbook.php?brand=dazzle">
                            <area shape="rect" coords="332,198,407,326" href="/cn/arrivals.php?brand=dazzle">
                            <area shape="rect" coords="400,349,506,381" href="/cn/arrivals.php?brand=dazzle">
                          </map>
                          <map name="Mapsmall">
                              <area shape="rect" coords="308,46,367,148" href="/cn/lookbook.php?brand=dazzle" />
                              <area shape="rect" coords="372,159,426,181" href="/cn/lookbook.php?brand=dazzle" />
                              <area shape="rect" coords="255,151,311,238" href="/cn/arrivals.php?brand=dazzle" />
                              <area shape="rect" coords="308,254,397,271" href="/cn/arrivals.php?brand=dazzle" />
                          </map>
                        </div>
                        <a href="/cn/lookbook.php?brand=dazzle" class="brandpagearrow"><img src="/images/dazzlearrow.png" /></a>
                    </div>
                    <div class="item Diamond">
                    	<div class="pic"><img src="/images/Diamondpage.png" /></div>
                        <div class="cont">
                            	<img src="/cn/img/diamondstory.png" />
                        </div>
                        <div class="link">
                        	<img id="diamondlinkpic" src="/cn/img/Diamondlink.png" border="0" usemap="#Map2" />
                            <map name="Map2">
                              <area shape="rect" coords="46,95,106,247" href="/cn/lookbook.php?brand=diamond">
                              <area shape="rect" coords="107,49,230,82" href="/cn/lookbook.php?brand=diamond">
                              <area shape="rect" coords="148,175,221,311" href="/cn/arrivals.php?brand=diamond">
                              <area shape="rect" coords="51,322,155,352" href="/cn/arrivals.php?brand=diamond">
                            </map>
                            <map name="Map2small">
                                  <area shape="rect" coords="29,63,69,167" href="/cn/lookbook.php?brand=diamond" />
                                  <area shape="rect" coords="70,37,133,55" href="/cn/lookbook.php?brand=diamond" />
                                  <area shape="rect" coords="100,113,149,212" href="/cn/arrivals.php?brand=diamond" />
                                  <area shape="rect" coords="53,221,108,238" href="/cn/arrivals.php?brand=diamond" />
                            </map>
                        </div>
                      <a href="/cn/lookbook.php?brand=diamond" class="brandpagearrow"><img src="/images/dzzitarrow.png" /></a>
                    </div>
                    <div class="item dzzit">
                       <div class="pic"><img src="/images/dzzitpage.png" /></div>
                        <div class="cont">
                            	<img src="/cn/img/dizzitstory.png" />
                        </div>
                        <div class="link"><img id="dzzitlinkpic" src="/cn/img/dzzitlink.png" border="0" usemap="#Map3" />
                          <map name="Map3">
                            <area shape="rect" coords="344,67,416,200" href="/cn/lookbook.php?brand=dzzit">
                            <area shape="rect" coords="249,210,335,244" href="/cn/lookbook.php?brand=dzzit">
                            <area shape="rect" coords="416,200,492,322" href="/cn/arrivals.php?brand=dzzit">
                            <area shape="rect" coords="309,306,400,335" href="/cn/arrivals.php?brand=dzzit">
                          </map>
                          <map name="Map3small">
                            <area shape="rect" coords="235,231,304,255" href="/cn/arrivals.php?brand=dzzit" />
                            <area shape="rect" coords="315,151,369,234" href="/cn/arrivals.php?brand=dzzit" />
                            <area shape="rect" coords="187,164,260,188" href="/cn/lookbook.php?brand=dzzit" />
                            <area shape="rect" coords="259,54,318,148" href="/cn/lookbook.php?brand=dzzit" />
                          </map>
                        </div>
                      <a href="/cn/lookbook.php?brand=dzzit" class="brandpagearrow"><img src="/images/dzzitarrow.png" /></a>
                    </div>
                  </div>
              </div>
              <div class="ViewControl">
                  <a class="ControlLeftBtn" href="javascript:void(0);"><img src="/images/dzzitleft.png"></a>
                  <a class="ControlRightBtn" href="javascript:void(0);"><img src="/images/dzzitright.png"></a>
              </div>
        </div>
    </div>
</body>
</html>