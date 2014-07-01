<!DOCTYPE HTML>
<html lang="en"  ng-app="adminModule">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.dataTables_themeroller.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

	<title><?php echo Yii::t("strings", "Dazzle Brand Managment System")?></title>
  <script type="text/javascript">
    window.baseurl = "<?php echo Yii::app()->baseUrl?>";
    window.brand = "<?php echo Yii::app()->getRequest()->getParam("brand")?>";
  </script>
</head>

<body>
  
  <div class="loading hideme">
    <img src="/css/loader.gif" alt="" />
  </div>

<div class="container-fluid" id="page">

	<div id="header">
		<div id="logo"><?php echo Yii::t("strings", "Dazzle Brand Managment System")?></div>

    <div class="lang-bar">
        <?php if (Yii::app()->language == "zh_cn"): ?><a href="javascript:void(0)" lang="en_us" class="lang_en">English</a><?php endif;?>
        <?php if (Yii::app()->language == "en_us"): ?><a href="javascript:void(0)" lang="zh_cn" class="lang_cn">中文</a><?php endif;?>
    </div>
	</div>
  
  <div id="sidebar" class="">
    <ul class="nav nav-list">
      <?php foreach (Yii::app()->params["shop_brandes"] as $brand_name): ?>
      <li class="nav-header">
      <?php echo Yii::t("strings", $brand_name)?>
      </li>
      <li><a class="<?php echo $this->getActiveClass("page/lookbook", array("brand" => strtolower($brand_name)))?>" href="<?php echo Yii::app()->createUrl("page/lookbook", array("brand" => strtolower($brand_name)))?>"><?php echo Yii::t("strings", "Lookbook Gallery")?></a></li>
      <li><a class="<?php echo $this->getActiveClass("page/arrival", array("brand" => strtolower($brand_name)))?>" href="<?php echo Yii::app()->createUrl("page/arrival", array("brand" => strtolower($brand_name)))?>"><?php echo Yii::t("strings", "Arrivals Gallery")?></a></li>
      <?php endforeach;?>
      
      <li class="nav-header">
        <?php echo Yii::t("strings", "News Managment")?>
      </li>
      <li><a class="<?php echo $this->getActiveClass("content/newsadd")?>" href="<?php echo Yii::app()->createUrl("page/addnews")?>"><?php echo Yii::t("strings", "Create News")?></a></li>
      <li><a class="<?php echo $this->getActiveClass("content/news")?>" href="<?php echo Yii::app()->createUrl("page/news")?>"><?php echo Yii::t("strings", "News Table")?></a></li>
      </ul>
  </div>
  

  <?php if (UserAR::isLogin()) :?>
  <div id="body" class="row-fluid">
    <div id="content" class="span12"><?php echo $content; ?></div>
  </div>
  <?php else: ?>
    <div id="content" class="span9 offset3"><?php echo $content; ?></div>
  <?php endif;?>

	<div class="clear"></div>

<!--	<div id="footer">
	</div>-->
</div>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/jquery_ui/js/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/angular.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/scripts/script.js"></script>
</body>
</html>
