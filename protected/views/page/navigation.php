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
    <input type="file" name="file" class="hideme" onchange="angular.element(this).scope().fileUpload(this)"/>
    <?php $names = NavigationMenuAR::$names;?>
    <?php foreach ($names as $name): ?>
      <div class="control-group">
        <div class="control-label"><?php echo Yii::t("strings", ucwords(str_replace("title_", "", $name)))?></div>
        <div class="controls">
          <span class="preview" ng-click="triggerImageUpload($event)">
            <img ng-src="{{formdata.<?php echo $name."_media_uri"?>}}" alt="" />
            <span class="preview-tip"><?php echo Yii::t("strings", "Select Image")?></span>
          </span>
          <input type="hidden" name="<?php echo $name."_media_uri"?>" ng-model="formdata.<?php echo $name."_media_uri"?>"/>
          <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="<?php echo $name?>" ng-model="formdata.<?php echo $name?>"/>
        </div>
      </div>
    <?php endforeach;?>

<!--    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Brand Information")?></div>
      <div class="controls">
        <span class="preview"><?php echo Yii::t("strings", "Select Image")?></span>
        <input type="hidden" name="title_brand_media_uri" ng-model="formdata.title_brand_media_uri"/>
        <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="title_brand" ng-model="formdata.title_brand"/>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Careers")?></div>
      <div class="controls">
        <span class="preview"><?php echo Yii::t("strings", "Select Image")?></span>
        <input type="hidden" name="title_career_media_uri" ng-model="formdata.title_career_media_uri"/>
        <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="title_career" ng-model="formdata.title_career"/>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Media")?></div>
      <div class="controls">
        <span class="preview"><?php echo Yii::t("strings", "Select Image")?></span>
        <input type="hidden" name="title_media_media_uri" ng-model="formdata.title_media_media_uri"/>
        <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="title_media" ng-model="formdata.title_media"/>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Home")?></div>
      <div class="controls">
        <span class="preview"><?php echo Yii::t("strings", "Select Image")?></span>
        <input type="hidden" name="title_home_media_uri" ng-model="formdata.title_home_media_uri"/>
        <input type="text" placeholder="<?php echo Yii::t("strings", "menu navigation title")?>" name="title_home" ng-model="formdata.title_home"/>
      </div>
    </div>-->
    <div class="form-actions">
      <button class="btn btn-primary" ng-click="submitForm()" ><?php echo Yii::t("strings" ,"Save")?></button>
    </div>
  </form>
</div>
