<?php

class PageController extends Controller {
  
  public function beforeAction($action) {
    if (!UserAR::isLogin() && $action->id != "login" && $action->id != "error") {
      return $this->redirect(Yii::app()->getBaseUrl()."/index/login");
    }
    return parent::beforeAction($action);
  }
  
  public function actionLookbook() {
    $request = Yii::app()->getRequest();
    $brand = strtolower($request->getParam("brand"));
    if (!$brand) {
      return $this->redirect("/index/index");
    }
    $lookbookes = LookbookAR::model()->loadLookbookWithBrand($brand);
    $this->render("lookbook", array("lookbookes" => $lookbookes));
  }
  
  public function actionArrival() {
    $request = Yii::app()->getRequest();
    $brand = strtolower($request->getParam("brand"));
    if (!$brand) {
      return $this->redirect("/index/index");
    }
    $lookbookes = LookbookAR::model()->loadLookbookWithBrand($brand);
    $this->render("arrival", array("lookbookes" => $lookbookes));
  }
  
  public function actionNews() {
    $list = NewsAR::model()->getList();
    $this->render("news", array("news_list" => $list));
  }
  
  public function actionAddnews() {
    $request = Yii::app()->getRequest();
    $id = $request->getParam("id", FALSE);
    $news = NewsAR::model()->findByPk($id);
    if ($id && !$news) {
      $this->redirect(array("news"));
    }
    $this->render("addnews", array("news" => $news));
  }
}

