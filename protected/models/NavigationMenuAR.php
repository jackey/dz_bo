<?php

class NavigationMenuAR extends CActiveRecord {
  public static $names = array(
      "title_coporation", "title_brand", "title_career", "title_media", "title_home"
  );
  public function tableName() {
    return "navigation_menu";
  }
  
  public static function model($class = __CLASS__) {
    return parent::model($class);
  }
  
  public function primaryKey() {
    return "nm_id";
  }
  
  public function rules() {
    return array(
        array("nm_id, name, text, media_uri, url", "safe"),
    );
  }
  
  /**
   * 返回一个名字下的 Menu Nav
   * @param type $name
   * @return boolean
   */
  public function getNavMenuByName($name) {
    $names = self::$names;
    if (array_search($name, $names) === FALSE) {
      return FALSE;
    }
    $query = new CDbCriteria();
    $query->addCondition("name=:name");
    $query->params[":name"] = $name;
    
    return self::model()->find($query);
  }
  
  /**
   * 更新一个名字下的Menu Nav
   * @param type $name
   * @param type $data
   */
  public function updateNavMenuByName($name, $data) {
    $menu = $this->getNavMenuByName($name);
    // 如果没有数据 就添加一个
    if (!$menu) {
      $tmp_menu = array(
          "name" => $name,
          "text" => $data["text"],
          "media_uri" => $data["media_uri"],
          "url" => "",
      );
      $newNavMenu = new NavigationMenuAR();
      $newNavMenu->attributes = $tmp_menu;
      $newNavMenu->insert();
      return $newNavMenu->getPrimaryKey();
    }
    if ($data["text"]) {
      $menu["text"] = $data["text"];
    }
    if ($data["media_uri"]) {
      $menu["media_uri"] = $data["media_uri"];
    }
    
    $menu->update();
    
    return $menu;
  }
  
  public function beforeSave() {
    if ($this->isNewRecord) {
      $this->cdate = date("Y-m-d H:i:s");
    }
    $this->udate = date("Y-m-d H:i:s");
    
    return parent::beforeSave();
  }
}
