<div class="row-fluid index-panel">
  <div class="wrapper">
    <div class="header">
      <h4><?php echo Yii::t("strings", "Dashboard")?></h4>
    </div>
    <ul class="row-fluid dashboard">
      <li class="item">
        <i class="fa fa-book"></i><a href="<?php echo Yii::app()->createUrl("page/news")?>"><?php echo Yii::t("strings", "News")?></a>
      </li>
      <li class="item">
        <i class="fa fa-shopping-cart"></i><a href="<?php echo Yii::app()->createUrl("shop/index")?>"><?php echo Yii::t("strings", "Store")?></a>
      </li>
      <li class="item">
        <i class="fa fa-user"></i><a href="<?php echo Yii::app()->createUrl("page/careers")?>"><?php echo Yii::t("strings", "Position")?></a>
      </li>
      <li class="item">
        <i class="fa fa-video-camera"></i><a href="<?php echo Yii::app()->createUrl("page/video")?>"><?php echo Yii::t("strings", "Video")?></a>
      </li>
    </ul>
  </div>
</div>