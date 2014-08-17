<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="DAZZLE Fashion";
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
    <div class="windowmask"></div>
	<div id="service">
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
    </div>
    <div class="wrap">
    	<div class="top">
			<ul>
            	<?php
				switch ($brand)
				{
				case "dazzle":
				?>
                <li><a href="/ieen/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				  break;
				case "diamond":
				?>
                <li><a href="/ieen/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=diamond"><img src="/images/productdiamond.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				case "dzzit":
				?>
                <li><a href="/ieen/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dzzit"><img src="/images/productdzzit.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				default:
				?>
                <li><a href="/ieen/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/ieen/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				}
				?>
                
                <li><a href="/ieen/lookbook.php?brand=<?php echo $brand;?>"><img src="/images/menulookbook.png" /></a></li>
                <li><a href="/ieen/arrivals.php?brand=<?php echo $brand;?>"><img src="/images/menuarrivals.png" /></a></li>
                
            </ul>
            <div class="ver">
            	<ul>
                	<li class="menuitem"><a href="http://dazzle.tmall.com/" target="_blank">SHOP</a></li>
                	<li class="menuitem"><a href="http://weibo.com/dazzlefashion/" target="_blank">WEIBO</a></li>
                	<li class="menuitem"><a href="javascript:void(0)" id="wechat">WECHAT</a></li>
                	<li class="menuitem"><a href="/iecn/brandpage.php?brand=<?php echo $brand;?>">中文</a></li>
                </ul>
            </div>
        </div>
        <div class="vessel">
			<div class="ViewArea">
                <div class="itemView">
                <?php $brandNames = getBrandNames();?>
                <?php foreach ($brandNames as $key => $brandName): ?>
                    <?php $brand_obj = getBrand($brandName);?>
                    <div class="item <?php echo $key?>">
                      <div class="pic"><img src="<?php echo getThumbnailURL($brand_obj->brand_master_image) ?>" /></div>
                        <div class="cont">
                               <img src="/cn/img/<?php echo strtolower($key)?>story.png"/> 
                              <div class="ppstory <?php if ($key == "Dazzle") echo "dazzlewomen"; elseif ($key == "Diamond") echo "diamondstory"; else echo "dizzitstory"; ?>">
                                <h3>BRAND STORY</h3>
                                <?php echo $brand_obj->body?>
                              </div>
                              <style type="text/css">
                                .ppstory {
                                  width: 45%;
                                }
                              </style>
                        </div>
                        <?php if ($key == "Dazzle"): ?>
                          <div class="link"><img id="<?php echo strtolower($key)?>linkpic" src="<?php echo getThumbnailURL($brand_obj->brand_thumbnail_image)?>" border="0" usemap="#Map" />
                          <map name="Map">
                            <area shape="rect" coords="411,60,480,196" href="/cn/lookbook.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="484,217,600,247" href="/cn/lookbook.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="332,198,407,326" href="/cn/arrivals.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="400,349,506,381" href="/cn/arrivals.php?brand=<?php echo strtolower($key)?>">
                          </map>
                          <map name="Mapsmall">
                              <area shape="rect" coords="308,46,367,148" href="/cn/lookbook.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="372,159,426,181" href="/cn/lookbook.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="255,151,311,238" href="/cn/arrivals.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="308,254,397,271" href="/cn/arrivals.php?brand=<?php echo strtolower($key)?>" />
                          </map>
                        </div>
                      <?php elseif ($key == "Diamond") :?>
                        <div class="link">
                          <img id="<?php echo strtolower($key)?>linkpic" src="<?php echo getThumbnailURL($brand_obj->brand_thumbnail_image)?>" border="0" usemap="#Map2" />
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
                      <?php else: ?>
                        <div class="link">
                          <img id="<?php echo strtolower($key)?>linkpic" src="<?php echo getThumbnailURL($brand_obj->brand_thumbnail_image)?>" border="0" usemap="#Map3" />
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
                        <?php endif;?>

                        <a href="/cn/lookbook.php?brand=<?php echo strtolower($key)?>" class="brandpagearrow"><img src="/images/dazzlearrow.png" /></a>
                    </div>
                <?php endforeach;?>
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