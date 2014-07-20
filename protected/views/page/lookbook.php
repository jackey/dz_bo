<div class="tabbable form-con">
    <div class="header clearfix">
      <div class="icons">
        <i class="fa fa-edit"></i>
      </div>
      <h4><?php echo Yii::t("strings", isset($contentvideo) ? "Edit Media" : "Lookbook Media Gallery")?></h4>
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
            <input ng-click="UploadMedia($event)" type="button" class="btn btn-primary" value="<?php echo Yii::t("strings", "Upload")?>"/>
            <input type="button" ng-click="RemoveMedia($event)" class="btn btn-primary" value="<?php echo Yii::t("strings", "Remove Selected Image")?>"/>
            <div class="alert alert-success"><?php echo Yii::t("strings", "Image Size: "). " 650x965"?></div>
          </div>
        </div>
      </form>
      <ul class="table media-list clearfix">
        <li ng-repeat="lookbook in lookbookes">
            <div class="thumbnail">
              <img ng-src="{{lookbook.image}}" alt="" />
              <span data-cid="{{lookbook.cid}}"><i class="fa fa-trash-o"></i></span>
            </div>
        </li>
      </ul>
    </div>
  </div>
</div>

