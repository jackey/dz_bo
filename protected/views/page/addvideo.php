<div class="form-con video-form" ng-controller='VideoFormController' ng-init="init()">
  <form name="videoform" class="form-horizontal">
    <div class="header clearfix">
      <div class="icons">
        <i class="fa fa-edit"></i>
      </div>
      <h4><?php echo Yii::t("strings", isset($contentvideo) ? "Edit Media" : "Add Media")?></h4>
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
      <button class="btn btn-primary" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
    </div>
    </div>
  </form>
</div>