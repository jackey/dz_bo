<div class="form-con qrcode-form" ng-controller='QrcodeController' ng-init="init()">
  <form name="qrcodeform">
   <?php foreach(Yii::app()->params["brands"] as $key => $name): ?>
    <div class="control-group">
      <div class="control-label"><?php echo ucfirst($name)?></div>
      <div class="controls">
        <div class="preview">
          <img ng-src="{{formdata.qrcode_<?php echo strtolower($name)?>}}" alt="" />
        </div>
        <input type="file" accept="image/*" onchange="angular.element(this).scope().filechange(this)"/>
        <input type="hidden" ng-model="formdata.qrcode_<?php echo strtolower($name)?>" />
      </div>
    </div>
   <?php endforeach;?>
    <div class="form-actions">
      <button class="btn" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
    </div>
  </form>
</div>