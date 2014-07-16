<div class="" ng-controller="ShopController" ng-init="init()">
  <div class="">
    <form name="shopform" class="form-horizontal" action="<?php echo Yii::app()->baseUrl ?>/shop/add" method="POST" enctype="multipart/form-data">
      <fieldset>
        <legend><?php echo ($shop) ? Yii::t("strings", "Edit Shop").' <span class="divider"> - </span> '.$shop->title : Yii::t("strings", "Shop") ?></legend>
        
        <div class="control-group">
          <label class="control-label" for=""><?php echo Yii::t("strings", "Location") ?></label>
          <div class="controls">
            <select name="city" id="" ng-change="cityChange()" ng-model="shop.city"  ng-options="c for c in country_city">
              <option value="">--<?php echo Yii::t("strings", "Choose City")?>--</option>
            </select>
            <select name="distinct" id="" ng-model="shop.distinct" ng-change="distinctChange()" ng-options="c for c in city_distinct">
              <option value="">--<?php echo Yii::t("strings", "Choose District")?>--</option>
            </select>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for=""><?php echo Yii::t("strings", "Title") ?></label>
          <div class="controls">
            <input type="text" name="title" ng-model="shop.title"/>
          </div>
        </div>
        
        <div class="control-group">
        <label class="control-label" for=""><?php echo Yii::t("strings", "Address") ?></label>
        <div class="controls">
          <input type="text" name="address" ng-change="addressChanged()" ng-model="shop.address" />
        </div>
        </div>
        
        <div class="control-group">
          <label for="" class="control-label">Lat/ Lng</label>
          <div class="controls">
            <input type="text" name="lat" ng-model="shop.lat"/>
            <input type="text" name="lng" ng-model="shop.lng"/>
          </div>
        </div>
          
      </fieldset>
      
      <fieldset class="fieldset-section form-inline">
        <div class="control-group">
          <div id="shop-map"></div>
        </div>
      </fieldset>
      
      <input type="hidden" name="shop_id" value="<?php echo $shop ? $shop->shop_id : ""?>"/>

      <div class="control-group">
        <input type="button" class="btn" ng-click="submitForm()" value="<?php echo Yii::t("strings", "Submit") ?>"/> 
      </div>
    </form>
  </div></div>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZuVRDtLTr1PXxz7g028BUPYL"></script> 
