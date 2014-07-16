<div class="table-content" ng-controller="CareerTable" ng-init="init()">
      <a href="<?php echo Yii::app()->createUrl("page/addcareer")?>"><?php echo Yii::t("strings", "Career Add New")?></a>
    </div>
    <table class="table table-striped">
      <thead>
        <td><?php echo Yii::t("strings", "Title")?></td>
        <td><?php echo Yii::t("strings", "Date")?></td>
        <td><?php echo Yii::t("strings", "Actions")?></td>
      </thead>
      <tbody>
        <?php foreach ($careeres as $career): ?>
        <tr>
          <td><?php echo $career->title?></td>
          <td><?php echo $career->cdate?></td>
          <td><a href="<?php echo Yii::app()->createUrl("page/addcareer", array("id" => $career->cid))?>"><?php echo Yii::t("strings", "Edit")?></a>&nbsp;&nbsp;| <a href="#"><?php echo Yii::t("strings", "Delete")?></a> </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>

</div>