<div class="top-bar">
  <a href="<?php echo Yii::app()->createUrl("page/addvideo")?>"><?php echo Yii::t("strings", "Add Video")?></a>
</div>

<div class="table-content" ng-controller="VideoTable" ng-init="init()">
  <table class="table table-striped">
    <thead>
      <td><?php echo Yii::t("strings", "Title")?></td>
      <td><?php echo Yii::t("strings", "Date")?></td>
      <td><?php echo Yii::t("strings", "Thumbnail")?></td>
      <td><?php echo Yii::t("strings", "Actions")?></td>
    </thead>
    <tbody>
        <?php foreach ($videocontentes as $content): ?>
      <tr>
        <td><?php echo $content->title?></td>
        <td><?php echo $content->cdate?></td>
        <td><img src="<?php echo MediaAR::thumbnail($content->thumbnail, array(50, 50))?>" alt="" /></td>
        <td>
          <a href="<?php echo Yii::app()->createUrl("page/addvideo", array("id" => $content->cid))?>"><?php echo Yii::t("strings", "Edit")?>&nbsp;|&nbsp;</a>
          <a href="javascript:void(0)" ng-click='delete(<?php echo $content->cid?>)'><?php echo Yii::t("strings", "Delete")?></a>
        </td>
      </tr>
        <?php endforeach;?>
    </tbody>
  </table>
</div>