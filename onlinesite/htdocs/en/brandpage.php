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
                <li><a href="/en/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				  break;
				case "diamond":
				?>
                <li><a href="/en/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=diamond"><img src="/images/productdiamond.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				case "dzzit":
				?>
                <li><a href="/en/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dzzit"><img src="/images/productdzzit.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dazzle"><img src="/images/dazzlelinkdazzle.png" /></a></li>
                <?php
				  break;
				default:
				?>
                <li><a href="/en/index.php"><img src="/images/productlogo.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=diamond"><img src="/images/dazzlelinkdiamond.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dzzit"><img src="/images/dazzlelinkdzzit.png" /></a></li>
                <li><a href="/en/brandpage.php?brand=dazzle"><img src="/images/productdazzle.png" /></a></li>
                <?php
				}
				?>
                
                <li><a href="/en/lookbook.php?brand=<?php echo $brand;?>"><img src="/images/menulookbook.png" /></a></li>
                <li><a href="/en/arrivals.php?brand=<?php echo $brand;?>"><img src="/images/menuarrivals.png" /></a></li>
                
            </ul>
            <div class="ver">
            	<ul>
                	<li class="menuitem"><a href="http://dazzle.tmall.com/" target="_blank">SHOP</a></li>
                	<li class="menuitem"><a href="http://weibo.com/dazzlefashion/" target="_blank">WEIBO</a></li>
                	<li class="menuitem"><a href="javascript:void(0)" id="wechat">WECHAT</a></li>
                	<li class="menuitem"><a href="/cn/brandpage.php?brand=<?php echo $brand;?>">中文</a></li>
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
                               <img src="/images/<?php echo strtolower($key)?>story.png"/> 
                              <div class="ppstory dazzlewomen">
                                <h3>Brand Story</h3>
                                <?php echo $brand_obj->body?>
                              </div>
                        </div>
                        <div class="link"><img id="dazzlelinkpic" src="<?php echo getThumbnailURL($brand_obj->brand_thumbnail_image)?>" border="0" usemap="#Map" />
                          <map name="Map">
                            <area shape="rect" coords="411,60,480,196" href="/en/lookbook.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="484,217,600,247" href="/en/lookbook.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="332,198,407,326" href="/en/arrivals.php?brand=<?php echo strtolower($key)?>">
                            <area shape="rect" coords="400,349,506,381" href="/en/arrivals.php?brand=<?php echo strtolower($key)?>">
                          </map>
                          <map name="Mapsmall">
                              <area shape="rect" coords="308,46,367,148" href="/en/lookbook.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="372,159,426,181" href="/en/lookbook.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="255,151,311,238" href="/en/arrivals.php?brand=<?php echo strtolower($key)?>" />
                              <area shape="rect" coords="308,254,397,271" href="/en/arrivals.php?brand=<?php echo strtolower($key)?>" />
                          </map>
                        </div>
                        <a href="/en/lookbook.php?brand=<?php echo strtolower($key)?>" class="brandpagearrow"><img src="/images/dazzlearrow.png" /></a>
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
                        <style>
                          .ppstory h3{font-size: 28px;margin-bottom: 15px;}
                          .dazzstory h3{color: #ffc480;}
                          .dizzitstory h3{color: #743268;}
                          .diamondstory h3{color: #9f802b;}
                          .ppstory dl{margin-bottom: 25px;font-family: "微软雅黑";font-weight: bold;}
                          .diamondstory dl{width: 500px;}
                          .ppstory dl dt{color: #ffe1be;margin-bottom:5px;}
                          .ppstory dl dd{margin-bottom: 2px;}
                        </style>
</body>
</html>