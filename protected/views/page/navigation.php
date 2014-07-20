<div class="navigation-form form-con" ng-controller="MenuNavigation" ng-init="init()">

  <form class="form" name="navigationform">
    <div class="header clearfix">
      <div class="icons">
        <i class="fa fa-edit"></i>
      </div>
      <h4><?php echo Yii::t("strings", "Update Navigation Menu")?></h4>
      <div class="toolbar">
        <nav style="padding: 8px;">
          <a href="javascript:;" class="btn btn-default btn-xs full-box">
            <i class="fa fa-expand"></i>
          </a> 
          <a href="javascript:;" class="btn btn-danger btn-xs close-box">
            <i class="fa fa-times"></i>
          </a> 
        </nav>
      </div>
    </div>
    <?php $names = NavigationMenuAR::$names;?>
    <?php foreach ($names as $name): ?>
      <div class="control-group imagepreview">
        <div class="control-label"><?php echo Yii::t("strings", ucwords(str_replace("title_", "", $name)))?></div>
        <div class="controls">
          <span class="preview" ng-click="triggerImageUpload($event)">
            <img ng-src="{{formdata.<?php echo $name."_media_uri"?>}}" alt="" />
          </span>
          <input type="file" name="file" class="hideme" onchange="angular.element(this).scope().fileUpload(this)"/>
          <div class="alert alert-success"><?php echo Yii::t("strings", "Image Size: "). " 264x246"?></div>
          <input type="hidden" name="<?php echo $name."_media_uri"?>" ng-model="formdata.<?php echo $name."_media_uri"?>"/>
          <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="<?php echo $name?>" ng-model="formdata.<?php echo $name?>"/>
        </div>
      </div>
    <?php endforeach;?>
    <div class="form-actions">
      <button class="btn btn-primary" ng-click="submitForm()" ><?php echo Yii::t("strings" ,"Save")?></button>
    </div>
  </form>
</div>
