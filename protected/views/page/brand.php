<div class="tabbable">
  <div class="nav nav-tabs">
    <li ><a href="<?php echo Yii::app()->createUrl("page/lookbook", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "Lookbook")?></a></li>
    <li><a href="<?php echo Yii::app()->createUrl("page/arrival", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "New Arrival")?></a></li>
    <li class="active"><a href="<?php echo Yii::app()->createUrl("page/brand", array("brand" => Yii::app()->getRequest()->getParam("brand")))?>"><?php echo Yii::t("strings", "Brand Story")?></a></li>  
  </div>
  <div class="tab-content">
    <div class="form-con brand-info-form" ng-controller="BrandController" ng-init="init()">
      <form name="brandform">
        <div class="control-group">
          <div class="control-label">
            <label><?php echo Yii::t("strings", "Title")?></label>
          </div>
          <div class="controls">
            <input type="text" ng-model="formdata.title" />
          </div>
        </div>
        <div class="control-group">
          <div class="control-label">
            <label><?php echo Yii::t("strings", "body")?></label>
          </div>
          <div class="controls">
            <textarea type="text" rows="10" cols="80" ng-model="formdata.body"></textarea>
          </div>
        </div>
        <div class="control-group">
          <div class="control-label">
            <?php echo Yii::t("strings", "Master Image")?>
          </div>
          <div class="controls">
            <div class="preview">
              <img ng-src="{{formdata.brand_master_image}}" alt="" />
            </div>
            <input type="file"  accept="image/*" onchange="angular.element(this).scope().filechange(this)" />
            <input type="hidden" ng-model="formdata.brand_master_image" />
          </div>
          
          <div class="control-label">
            <?php echo Yii::t("strings", "Master Image")?>
          </div>
          <div class="controls">
            <div class="preview">
              <img ng-src="{{formdata.brand_thumbnail_image}}" alt="" />
            </div>
            <input type="file" accept="image/*" onchange="angular.element(this).scope().filechange(this)" />
            <input type="hidden" ng-model="formdata.brand_thumbnail_image" />
          </div>
          
          <div class="control-label">
            <?php echo Yii::t("strings", "Navigation Image")?>
          </div>
          <div class="controls">
            <div class="preview">
              <img ng-src="{{formdata.brand_navigation_image}}" alt="" />
            </div>
            <input type="file" accept="image/*"  onchange="angular.element(this).scope().filechange(this)" />
            <input type="hidden" ng-model="formdata.brand_navigation_image" />
          </div>
        </div>
        
        <input type="hidden" name="brand" value="<?php echo Yii::app()->getRequest()->getParam("brand")?>"/>
        
        <div class="form-actions">
          <button class="btn" ng-click="submitForm()"><?php echo Yii::t("strings" ,"Save")?></button>
        </div>
      </form>
    </div>
  </div>
</div>

