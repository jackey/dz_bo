<?php

class ContentController extends Controller {
  
  /**
   * 删除数据
   */
  public function actionDelete() {
    $request = Yii::app()->getRequest();
    
    $cid = $request->getParam("cid", FALSE);
    
    if (!$cid) {
      return $this->responseError("http param error", ErrorAR::ERROR_MISSED_REQUIRED_PARAMS);
    }
    
    $content = ContentAR::model()->findByPk($cid);
    $content->status = ContentAR::STATUS_DISABLE;
    
    $content->save();
    
    return $this->responseJSON("success", "success");
  }
  
  public function actionUpdatecorporate() {
    $request = Yii::app()->getRequest();
    if ($request->isPostRequest) {
      $contentAr = new ContentAR();
      $contentAr->updateCorporate($_POST);
      
      $this->responseJSON($_POST, "success");
    }
    else {
      return $this->responseJSON(array(), "message");
    }
  }
  
  public function actionCorporate() {
      $contentAr = new ContentAR();
      $corporate = $contentAr->loadCorporate();
      $attributes = array();
      if ($corporate) {
        $attributes = $corporate->attributes;
        if (isset($corporate->thumbnail)) {
          $attributes["thumbnail"] = $corporate->thumbnail;
        }
        $this->responseJSON($attributes, "success");
      }
      
      $this->responseJSON("", "success");
  }
  
  public function actionUpdateqrcode() {
    $contentAr = new ContentAR();
    $request = Yii::app()->getRequest();
    if ($request->isPostRequest) {
      $qrcode = $contentAr->updateQrcode($_POST);
      
      return $this->responseJSON($qrcode->qrcodes, "success");
    }
    else {
      $this->responseError("http error");
    }
  }
  
  public function actionQrcode() {
    $contentAr = new ContentAR();
    $qrcode = $contentAr->loadQrcode();
    $this->responseJSON($qrcode->qrcodes, "success");
  }
  
  public function actionUpdateContact() {
    $contentAr = new ContentAR();
    $request = Yii::app()->getRequest();
    if ($request->isPostRequest) {
      $contact = $contentAr->updateContact($_POST);
      return $this->responseJSON($contact, "success");
    }
    else {
      $this->responseError("http error");
    }
  }
  
  public function actionContact() {
    $contentAr = new ContentAR();
    return $this->responseJSON($contentAr->loadContact(), "success");
  }
}

