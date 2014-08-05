<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
	<?php
        $brand="";
		$brandnum=0;
        if(isset($_GET["brand"])){
            $brand=$_GET["brand"];
			switch ($brand)
			{
			case "dazzle":
			  $brandnum=9;
			  break;  
			case "diamond":
			  $brandnum=6;
			  break;  
			case "dzzit":
			  $brandnum=9;
			  break;  
			default:
			  $brandnum=9;
			}
        }
    ?>	
    <script type="text/javascript" src="/js/lookbook.js"></script>
    <script type="text/javascript" src="/js/service.js"></script>
</head>

<body id="lookbook">
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
                	<li class="menuitem"><a href="/cn/arrivals.php?brand=<?php echo $brand;?>">中文</a></li>
                </ul>
            </div>
        </div>
        <div class="dress">
            <div class="ViewArea">
              <div class="itemView">
                <?php
                    for ($i = 1; $i <= $brandnum; $i++) {
						?>
                    <div class="item">
                    	<img src="/pic/arrival/<?php echo $brand;?>/<?php echo $i;?>.jpg"/>                    	
                	</div>
                <?php
                    }
                ?>	

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