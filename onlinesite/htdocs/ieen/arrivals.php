<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<?php
include '/inc/connection.php';
?>
<?php
	$PageTitle="DAZZLE Fashion";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
	<?php
        if(isset($_GET["brand"])){
            $brand=$_GET["brand"];
			switch ($brand)
			{
			case "dazzle":
                          $result = mysql_query("SELECT * FROM `dzg_ItemAttributesMap` WHERE dz_parentSequence='7/11/15/' ORDER BY dz_orderWeight ASC");
			  break;  
			case "diamond":
			  $result = mysql_query("SELECT * FROM `dzg_ItemAttributesMap` WHERE dz_parentSequence='7/13/19/' ORDER BY dz_orderWeight ASC");
			  break;  
			case "dzzit":
			  $result = mysql_query("SELECT * FROM `dzg_ItemAttributesMap` WHERE dz_parentSequence='7/12/17/' ORDER BY dz_orderWeight ASC");
			  break;  
			default:
			  $result = mysql_query("SELECT * FROM `dzg_ItemAttributesMap` WHERE dz_parentSequence='7/11/15/' ORDER BY dz_orderWeight ASC");
			}
        }
    ?>	
    <script type="text/javascript" src="/js/lookbook.js"></script>
    <script type="text/javascript" src="/js/service.js"></script>
</head>

<body id="lookbook">
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
                	<li class="menuitem"><a href="/iecn/arrivals.php?brand=<?php echo $brand;?>">中文</a></li>
                </ul>
            </div>
        </div>
        <div class="dress">
            <div class="ViewArea">
              <div class="itemView">
                <?php
                    while($row = mysql_fetch_array($result)){
                        $fileID = $row['dz_itemId'];
                        $fileResult = mysql_query("SELECT * FROM dzg_FileSystemEntity WHERE dz_id = $fileID");
                        $fileRow = mysql_fetch_array($fileResult);
                        $fileName = $fileRow['dz_pathComponent'];
                        switch ($brand){
                            case "dazzle":
                                $src = "/galleryfiles/albums/dazzle/newarrival/";
                                break;
                            case "diamond":
                                $src = "/galleryfiles/albums/diamond/newarrival/";
                                break;
                            case "dzzit":
                                $src = "/galleryfiles/albums/dzzit/newarrival/";
                                break;
                            default:
                                $src = "/galleryfiles/albums/dazzle/newarrival/";
                                
                        }
                        $src = $src.$fileName;
                ?>
                    <div class="item">
                    	<img src="<?php echo $src;?>"/>                    	
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