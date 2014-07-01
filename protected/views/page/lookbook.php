<div class="row-fluid" ng-controller="MediaGallery" ng-init="GalleryInit()">
  <form action="/#/index.php" class="form" name="MediaForm" enctype="multipart/form-data">
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
          <img src="{{lookbook.image}}" alt="" />
          <a href="#!/index.php"><?php echo Yii::t("strings", "Offline")?></a>
        </div>
    </li>
  </table>
</div>