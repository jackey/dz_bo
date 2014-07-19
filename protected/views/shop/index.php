<div class="table-bar">
  <i class="fa fa-plus-square"></i><a href="<?php echo Yii::app()->createUrl("shop/add")?>"><?php echo Yii::t("strings", "Add New Shop")?></a>
</div>
<div class="shop-table table-content" ng-controller="ShopTable">
  <header>
    <div class="icons">
      <i class="fa fa-table"></i>
    </div>
    <h5><?php echo Yii::t("strings", "Shop Table")?></h5>
  </header>
  <table class="table table-striped">
    <thead>
      <td><?php echo Yii::t("strings", "City")?></td>
      <td><?php echo Yii::t("strings", "Distinct")?></td>
      <td><?php echo Yii::t("strings", "Title")?></td>
      <td><?php echo Yii::t("strings", "Address")?></td>
      <td><?php echo Yii::t("strings", "Map")?></td>
      <td><?php echo Yii::t("strings", "Status")?></td>
      <td><?php echo Yii::t("strings", "Star")?></td>
      <td><?php echo Yii::t("strings", "Actions")?></td>
    </thead>
    <tbody>
      <?php foreach($shopes as $shop) :?>
      <tr>
        <td><?php echo $shop->city?></td>
        <td><?php echo $shop->distinct?></td>
        <td><?php echo $shop->title?></td>
        <td><?php echo $shop->address?></td>
        <td><?php echo "Click To View"?></td>
        <td><?php echo $shop->status == ShopAR::STATUS_CLOSED ? Yii::t("strings", "Closed" ) : Yii::t("strings", "Normal")?></td>
        <td><?php echo $shop->star == 1 ? "Star" : "No"?></td>
        <td>
          <a href="<?php echo Yii::app()->baseUrl."/shop/edit?shop_id=". $shop->shop_id?>"><?php echo Yii::t("strings", "Edit")?></a>
          <a href="javascript:void(0)" data-sid="<?php echo $shop->shop_id?>"><?php echo Yii::t("strings", "Close Shop")?></a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>