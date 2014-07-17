<div class="tabbable">
  <div class="nav nav-tabs">
    <li class="active"><a href="<?php echo Yii::app()->createUrl("page/lookbook", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "Lookbook")?></a></li>
    <li><a href="<?php echo Yii::app()->createUrl("page/arrival", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "New Arrival")?></a></li>
    <li><a href="<?php echo Yii::app()->createUrl("page/brand", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "Brand Story")?></a></li>  
  </div>
  <div class="tab-content">
    <div class="row-fluid" ng-controller="MediaGallery" ng-init="GalleryInit()">
      <form class="form" name="MediaForm" enctype="multipart/form-data">
        <div class="control-group">
          <div class="controls">
            <input type="file" name="media" accept="image/*"/>
            <input type="hidden" name="title" ng-model="object.title"/>
            <input ng-click="UploadMedia($event)" type="button" class="btn btn-info" value="<?php echo Yii::t("strings", "Upload")?>"/>
          </div>
        </div>
      </form>
      <ul class="table media-list">
        <li ng-repeat="lookbook in lookbookes">
            <div class="thumbnail">
              <img ng-src="{{lookbook.image}}" alt="" />
            </div>
        </li>
    </div>
  </div>
</div>

