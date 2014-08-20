    <title><?php echo($PageTitle) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>   
    <script type="text/javascript" src="/js/jwplayer.js"></script>    
	<script type="text/javascript" src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <link href="/css/master.css" rel="stylesheet" media="screen"> 
    <link href="/css/style.css" rel="stylesheet" media="screen"> 
    <link href="/css/fixed.css" rel="stylesheet" media="screen"> 
    <link rel="stylesheet" type="text/css" media="screen and (max-width:1800px) and (min-width: 1680px) " href="/css/sizemedium.css" />
    <link rel="stylesheet" type="text/css" media="screen and (max-width:1679px)" href="/css/sizesmall.css" />

    <script src="/js/jquery.mousewheel.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/js/plugin/pluginwheelsence.js"></script>        
    
    
<?php 

$root = dirname(dirname(dirname(__FILE__)));

define("ROOT_PATH", $root);

require_once(ROOT_PATH."/backendoffice/yii/yii.php");

$config = ROOT_PATH.'/backendoffice/protected/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

$app = Yii::createWebApplication($config);

$scriptUrl = Yii::app()->getRequest()->getScriptUrl();

$ret = Yii::app()->getRequest()->getBaseUrl();
Yii::app()->getRequest()->setBaseUrl($ret . "/backendoffice");

Yii::app()->language = "en_us";

if (Yii::app()->language == "zh_cn") {
  $language = "cn";
}
else {
  $language = "en";
}

function getThumbnailURL($thumbnail) {
  if (strpos($thumbnail, "backendoffice") !== FALSE) {
    return $thumbnail;
  }
  if ($thumbnail[0] == "/") {
    return "/backendoffice".$thumbnail;
  }
  else {
    return "/backendoffice/".$thumbnail;
  }
}

function loadNews() {
  $news = NewsAR::model()->getNewsInCategory();
  
  return $news;
}

function loadCorporate() {
  return ContentAR::model()->loadCorporate();
}

function loadBrandInformation() {
  $brandinfo = ContentAR::model()->loadBrandInformationContent();
  if (strpos($brandinfo->dazzle_thumbnail, "http://") !== FALSE) {
    $dazzle_thumbnail = str_replace(Yii::app()->getBaseUrl(TRUE), "", $brandinfo->dazzle_thumbnail);
    $brandinfo->dazzle_thumbnail = $dazzle_thumbnail;
  }
  
  return $brandinfo;
}

function getVideoList() {
  $videoes = VideoContentAR::model()->getList();
  $ret = array();
  foreach($videoes as $video) {
    // thumbnail
    $thumbnail_uri = $video->thumbnail;
    if (strpos($thumbnail_uri, "http://") !== FALSE) {
      $thumbnail_uri = str_replace(Yii::app()->getBaseUrl(TRUE), "", $thumbnail_uri);
      $video->thumbnail = getThumbnailURL($thumbnail_uri);
    }
    
    // video mp3/ webm
    $mp_4 = $video->video_mp4;
    if (strpos($mp_4, "http://") !== FALSE) {
      $mp_4 = str_replace(Yii::app()->getBaseUrl(TRUE), "", $mp_4);
      $video->video_mp4 = getThumbnailURL($mp_4);
    }
    $video_webm = $video->video_webm;
    if (strpos($video_webm, "http://") !== FALSE) {
      $video_webm = str_replace(Yii::app()->getBaseUrl(TRUE), "", $video_webm);
      $video->video_webm = getThumbnailURL($video_webm);
    }
    
    $ret[] = $video;
  }
  
  return $ret;
}

function getCareerList() {
  return JobAR::model()->getList();
}

function getBrand($brandName) {
  if (!$brandName) {
    return FALSE;
  }
  $brand = ContentAR::model()->loadBrandInfo($brandName);
  $mediaNames = array("brand_master_image", "brand_thumbnail_image", "brand_navigation_image", "brand_navigation_full_image");
  foreach ($mediaNames as $mediaName) {
    $media = $brand->{$mediaName};
    if (strpos($media, "http://") !== FALSE) {
      $media = str_replace(Yii::app()->getBaseUrl(TRUE), "", $media);
      $brand->{$mediaName} = $media;
    }
  }
  return $brand;
}

function getBrandNames() {
  return array("Dazzle" => "Dazzle", "Diamond" => "Diamond Dazzle", "dzzit" => "D'zzit");
}

function getLookbookWithBrandName($brandName) {
  $brandNames = getBrandNames();
  if (isset($brandNames[$brandName])) {
    $brandName = $brandNames[$brandName];
  }
  else if (isset($brandNames[strtolower($brandName)])) {
    $brandName = $brandNames[strtolower($brandName)];
  }
  elseif (isset($brandNames[ucfirst($brandName)])) {
    $brandName = $brandNames[ucfirst($brandName)];
  }

  $lookbookes = LookbookAR::model()->loadLookbookWithBrand($brandName);

  foreach ($lookbookes as &$lookbook) {
    $mediaName = "image";
    $media = $lookbook->{$mediaName};
    if (strpos($media, "http://") !== FALSE) {
      $media = str_replace(Yii::app()->getBaseUrl(TRUE), "", $media);
      $lookbook->{$mediaName} = $media;
    }
  }

  return $lookbookes;
}

function getArrivalWithBrandName($brandName) {
  $brandNames = getBrandNames();
  if (isset($brandNames[$brandName])) {
    $brandName = $brandNames[$brandName];
  }
  else if (isset($brandNames[strtolower($brandName)])) {
    $brandName = $brandNames[strtolower($brandName)];
  }
  elseif (isset($brandNames[ucfirst($brandName)])) {
    $brandName = $brandNames[ucfirst($brandName)];
  }

  $arrivals = ArrivalAR::model()->loadArrivalWithBrand($brandName);

  foreach ($arrivals as &$arrival) {
    $mediaName = "image";
    $media = $arrival->{$mediaName};
    if (strpos($media, "http://") !== FALSE) {
      $media = str_replace(Yii::app()->getBaseUrl(TRUE), "", $media);
      $arrival->{$mediaName} = $media;
    }
  }

  return $arrivals;
}

function getQrcodes() {
  $qrcodes = QacodeAR::model()->getList();
  foreach ($qrcodes as &$qrcode) {
    $mediaName = "thumbnail";
    $media = $qrcode->{$mediaName};
    if (strpos($media, "http://") !== FALSE) {
      $media = str_replace(Yii::app()->getBaseUrl(TRUE), "", $media);
      $qrcode->{$mediaName} = $media;
    }
  }

  return $qrcodes;
}

function getContact() {
  return ContentAR::model()->loadContact();
}

function getMenuNavigation() {
  $query = new CDbCriteria();
  $query->addCondition("name <> :name");
  $query->params[":name"] = "title_home";
  $list = NavigationMenuAR::model()->findAll($query);

  $order = array("title_coporation", "title_media", "title_brand", "title_career");

  $new_list = array();
  foreach ($order as $name) {
    foreach ($list as $item) {
      if ($item->name == $name) {
        $new_list[$item->name] = $item;
      }
    }
  }

  return $new_list;
}

function getMenuTitleId($menu_name) {
  $ids = array (
    "title_coporation"=> "menucorporate",
    "title_brand"=> "menubrand",
    "title_career" => "menucareers",
    "title_media" => "menuinvestors"
  );

  return $ids[$menu_name];
}

function getHomeNavigationMenu() {
  return NavigationMenuAR::model()->getNavMenuByName("title_home");
}
?>