<div class="form-con news-form" ng-controller="NewsForm" ng-init="init()">
  <form name="newsform" action="<?php echo Yii::app()->baseUrl ."/addform"?>" method="post">
    <div class="control-group">
      <div class="control-label">
        <label for=""><?php echo Yii::t("strings", "Title")?></label>
      </div>
      <div class="controls">
        <input type="text" name="title" ng-model="news.title"  required />
        <p class="text-error" ng-show="news.title.$error.required">This field is required</p>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for=""><?php echo Yii::t("strings", "Body")?></label>
      </div>
      <div class="controls">
        <textarea  name="body" ng-model="news.body"  cols="80" rows="10"></textarea>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for=""><?php echo Yii::t("strings", "Category")?></label>
      </div>
      <div class="controls">
        <select ng-model="news.category">
          <?php foreach (Yii::app()->params["brands"] as $brand): ?>
          <option value="<?php echo strtolower($brand)?>"><?php echo ucfirst($brand)?></option>
          <?php endforeach;?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <div class="control-label">
        <label for=""><?php echo Yii::t("strings", "Master Image")?></label>
      </div>
      <div class="conroles clearfix">
        <div class="preview">
          <img ng-src="{{media.image}}" alt="" />
        </div>
        <input type="file" name="media" accept="image/*"/>
          <input type="hidden" name="master_image[]" value="{{news.thumbnail}}" ng-model="news.thumbnail"/>
      </div>
    </div>
    <div class="control-group">
      <div class="conroles">
        <input type="button" ng-click="submitNews($event)" class="btn" value="<?php echo Yii::t("strings", "Submit")?>"/>
      </div>
    </div>
    
    <input type="hidden" name="cid" value="<?php echo $news ? $news->cid : 0?>" ng-model="news.cid" />
  </form>
</div>