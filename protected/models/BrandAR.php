<?php

/**
 * 品牌 - Model
 */
class BrandAR extends ContentAR {
  public function getFields() {
    return array("brand_name");
  }
  
  public function getMedia() {
    return array("master_image", "thumbnail_image", "navigation_image");
  }
  
  
}

