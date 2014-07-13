<div class="corporate-form form-con" ng-controller="Corporate" ng-init="init()">
  <form  enctype="multipart/form-data" method="post" name="corporate">
    <div class="control-group">
      <div class="control-label">
        <?php echo Yii::t("strings", "Title")?>
      </div>
      <div class="controls">
        <input type="text" ng-model="formdata.title" />
      </div>
    </div>
    
    <div class="control-group">
      <div class="control-label">
        <?php echo Yii::t("strings", "Body")?>
      </div>
      <div class="controls">
        <textarea ng-model="formdata.body" cols="80" rows="8" /></textarea>
      </div>
    </div>
    
    <div class="control-group">
      <div class="control-label">
        <?php echo Yii::t("strings", "Thumbnail")?>
      </div>
      <div class="controls">
          <span class="preview">
            <img ng-src="{{formdata.thumbnail}}" alt="" />
          </span>
        <input type="file" name="file" onchange="angular.element(this).scope().fileChange(this)" />
        <input type="hidden" ng-model="formdata.thumbnail" />
      </div>
    </div>
    
    <div class="action">
      <button ng-click="submitForm()" class="btn"><?php echo Yii::t("strings", "Save")?></button>
    </div>
  </form>
</div>