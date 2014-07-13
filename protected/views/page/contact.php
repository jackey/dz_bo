<div class="form-con contact-form" ng-controller="ContactController" ng-init="init()">
  <form name="contactform">
    <div class="control-group">
      <div class="control-label">
        <label><?php echo Yii::t("strings", "Toll Free Customer Service Tel")?></label>
      </div>
      <div class="controls">
        <input type="text" ng-model="formdata.title" />
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label><?php echo Yii::t("strings", "Working Hour Mon-Fri")?></label>
      </div>
      <div class="controls">
        <input type="text" ng-model="formdata.body" />
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label><?php echo Yii::t("strings", "Contact Email")?></label>
      </div>
      <div class="controls">
        <input type="text" ng-model="formdata.summary" />
      </div>
    </div>
    <div class="form-actions">
      <button class="btn" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
    </div>
  </form>
</div>