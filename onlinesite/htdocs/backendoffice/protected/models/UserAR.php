<?php

class UserAR extends CActiveRecord {
  public static function login($username, $password) {
    if ($username == "admin" && $password == "admin") {
      Yii::app()->session["login"] = TRUE;
      return TRUE;
    }
    return FALSE;
  }
  
  public static  function isLogin() {
    return !!Yii::app()->session["login"];
  }
  
  public static function logout() {
    unset(Yii::app()->session["login"]);
  }
}

