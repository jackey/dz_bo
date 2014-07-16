<div class="form-con career-form" ng-controller="CareerController" ng-init="init()">
  <form name="careerform">
    <div class="control-group">
      <div class="control-label"><label for=""><?php echo Yii::t("strings", "Title")?></label></div>
      <div class="controls"><input type="text" ng-model="formdata.title" /></div>
    </div>
    <div class="control-group">
      <div class="control-label"><label for=""><?php echo Yii::t("strings", "Job")?></label></div>
      <div class="controls"><textarea ng-model="formdata.body" rows="8" cols="80" /></textarea></div>
    </div>
    <div class="form-actions">
      <button class="btn" ng-click="submitForm()"><?php echo Yii::t("strings", "Save")?></button>
    </div>
    <input type="hidden" name="cid" value="<?php echo ($career) ? $career->cid : 0?>" ng-model="formdata.cid" />
  </form>
</div>