<div class="form-con qrcode-form" ng-controller='QrcodeController' ng-init="init()">
  <div class="header clearfix">
    <div class="icons">
      <i class="fa fa-edit"></i>
    </div>
    <h4><?php echo Yii::t("strings", "Update Social QRCode")?></h4>
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
  <form name="qrcodeform" class="clearfix form">
   <?php foreach(Yii::app()->params["brands"] as $key => $name): ?>
    <div class="control-group imagepreview">
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
      <button class="btn btn-primary" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
      <button class="btn btn-primary" ng-click="submitForm()"><?php echo Yii::t("strings", "Cancel")?></button>
    </div>
  </form>
</div>