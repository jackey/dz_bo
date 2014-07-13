<div class="form-con video-form" ng-controller='VideoFormController' ng-init="init()">
  <form name="videoform">
    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Title")?></div>
      <div class="controls">
        <input type="text" name="title" ng-model='formdata.title'/>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label"><?php echo Yii::t("strings", "Thumbnail")?></div>
      <div class="controls">
        <div class="preview">
          <img ng-src='{{formdata.thumbnail}}' alt="" />
        </div>
        <input type="file" accept="image/*" onchange='angular.element(this).scope().filechange(this)'/>
        <input type="hidden" name="thumbnail" ng-model="formdata.thumbnail"/>
      </div>
    </div>
    
    <fieldset>
      <legend><?php echo Yii::t("strings", "Video")?></legend>
      <label><?php echo Yii::t("strings", "MP4 Format")?></label>
      <input type="file" accept="video/*" onchange='angular.element(this).scope().filechange(this)'/>
      <input type="hidden" ng-model="formdata.video_mp4" />
      <label for=""><?php echo Yii::t("strings", "webm Format")?></label>
      <input type="file" accept='video/*' onchange='angular.element(this).scope().filechange(this)'/>
      <input type="hidden" ng-model="formdata.video_webm" />
    </fieldset>
    
    <input type="hidden" name="cid" ng-model="formdata.cid" value="<?php if (isset($contentvideo)) echo $contentvideo->cid?>" />
    
    <div class="form-actions">
      <button class="btn" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
    </div>
    </div>
  </form>
</div>