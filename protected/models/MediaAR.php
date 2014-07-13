<?php


class MediaAR extends CActiveRecord {
  public static $allowTypes = array("png", "jpg", "jpeg", "bmp", "gif");
  
  public static function model($class= __CLASS__) {
    return parent::model($class);
  }
  
  public function tableName() {
    return "media";
  }
  
  public function primaryKey() {
    return "mid";
  }
  
  public function rules() {
    return array(
        array("mid,name,uri,cdate,mdate,type,cid, field_name", "safe"),
    );
  }
  
  /**
   * 判断上传文件是否符合要求
   * @param CUploadedFile $file
   */
  public static function isAllowed($file = NULL) {
    $type = $file->getType();
    $mimes = explode("/", $type);
    if (array_search($mimes[1], self::$allowTypes) === FALSE) {
      return FALSE;
    }
    
    return TRUE;
  }
  
  /**
   * 保存上传的媒体文件
   * @param CUploadedFile $file
   */
  public static function saveTo($file) {
    $ext = $file->getExtensionName();
    $uniqueFileName = md5(time(). "_". uniqid()).".". $ext;
    $saveTo = Yii::app()->params["uploadDir"]. "/". $uniqueFileName;
    if ($file->saveAs($saveTo)) {
       $root = dirname(Yii::app()->basePath);
       $uri = str_replace($root, "", $saveTo);
       return $uri;
    }
    else {
      return FALSE;
    }
  }
  
  public function beforeSave() {
    if ($this->isNewRecord) {
      $this->cdate = date("Y-m-d H:i:s");
    }
    $this->mdate = date("Y-m-d H:i:s");
    return TRUE;
  }
  
  /**
   * 给一个对象追加图片
   * @param CActiveRecord $obj 需要有图片的对象
   */
  public function saveMediaToObject($obj, $field_name) {
    $request = Yii::app()->getRequest();
    if (!$request->isPostRequest) {
      return;
    }
    $uri = $request->getPost($field_name);
    if (is_string($uri)) {
      if (strpos($uri, "http://") !== FALSE) {
        $uri = str_replace(Yii::app()->getBaseUrl(TRUE), "", $uri);
      }

      $filePath = dirname(Yii::app()->basePath)."/". $uri;
      $name = pathinfo($filePath, PATHINFO_FILENAME);
      $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    }
    else {
      foreach ($uri as &$i) {
        $i = str_replace(Yii::app()->getBaseUrl(TRUE), "", $i);
      }

      $filePath = dirname(Yii::app()->basePath)."/". $i;
      $name = pathinfo($filePath, PATHINFO_FILENAME);
      $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    }
    $attr = array(
        "name" => $name,
        "uri" => serialize($uri),
        "cid" => $obj->getPrimaryKey(),
        "type" => $obj->type, 
        "field_name" => $field_name,
    );
    
    // 先查询是否已经存在一份
    $row = $this->loadMediaWithObject($obj, $field_name);
    if ($row) {
      $row->setAttributes($attr);
      return $row->update();
    }
    else {
      $this->setAttributes($attr);
      return $this->save();
    }
  }
  
  public function loadMediaWithObject($obj, $field_name) {
    $cid = $obj->getPrimaryKey();
    $type = $obj->type;
    $query = new CDbCriteria();
    $query->addCondition("type=:type")
      ->addCondition("field_name=:field_name")
      ->addCondition("cid=:cid");
    
    $query->params[":type"] = $type;
    $query->params[":field_name"] = $field_name;
    $query->params[":cid"] = $cid;
    
    $row = $this->find($query);
    
    return $row;
  }
  
  /**
   * 给一个对象附件图片数据
   * @param CActiveRecord $obj 需要有图片的对象
   */
  public function attachMediaToObject(&$obj, $field_name) {
    $row = $this->loadMediaWithObject($obj, $field_name);
    if ($row) {
      unserialize($row->uri);
      $uri = @unserialize($row->uri);
      
      if (is_string($uri) && $uri != "" ) {
        $obj->{$field_name} = Yii::app()->getBaseUrl(TRUE) .$uri;
      }
      elseif (is_array($uri)) {
        foreach ($uri as &$i) {
          $i = Yii::app()->getBaseUrl(TRUE) .$i;
        }
        $obj->{$field_name} = $uri;
      }
      else {
        $obj->{$field_name} = "";
      }
    }
    else {
      $obj->{$field_name} = "";
    }
  }
  
/**
 * 生成一个缩略图路径
 * @param type $uri 文件路径
 * @param array $size 尺寸大小 , 第一个元素是 width, 第二个元素是height
 */
  public static function thumbnail($uri, $size) {
    if (strpos($uri, "http://") !== FALSE) {
      $uri = str_replace(Yii::app()->getBaseUrl(TRUE), "", $uri);
    }

    $root = dirname(Yii::app()->basePath);
    $absPath = $root.$uri;

    $dir = pathinfo($absPath, PATHINFO_DIRNAME);
    $filename = pathinfo($absPath, PATHINFO_FILENAME);
    $ext = pathinfo($absPath, PATHINFO_EXTENSION);

    $newFilename = $filename."_".$size[0]. "_". $size[1]."_".$ext;

    $newAbspath = $dir.'/'. $newFilename;


    $uri = str_replace($root, "" ,$newAbspath);

    return Yii::app()->getBaseUrl(TRUE). $uri;
  }
  
	public function makeImageThumbnail($path, $save_to, $w, $h, $isOutput = FALSE) {
		$abspath = $path;
		$abssaveto = $save_to;
		$thumb = new EasyImage($abspath);

		$size = getimagesize($abspath);
		$s_w = $size[0];
		$s_h = $size[1];

		$r1 = $w / $s_w;
		$r2 = $h / $s_h;
		$widthSamller = TRUE;
		if ($r1 > $r2) {
			$r = $r1;
		}
		else {
			$widthSamller = FALSE;
			$r = $r2;
		}
		$t_w = $r * $s_w;
		$t_h = $r * $s_h;

		$thumb->resize($t_w, $t_h);
		if (!$widthSamller) {
			$start_x = ($t_w - $w)/2;
			$start_y = 0;
			$thumb->crop($w, $h, $start_x, $start_y);
		}
		else {
			$start_x = 0;
			$start_y = ($t_h - $h);
			$thumb->crop($w, $h, $start_x, $start_y);
		}

		$thumb->save($abssaveto);

		if($isOutput) {
			$fp = fopen($abssaveto, "rb");
			if ($size && $fp) {
				header("Content-type: {$size['mime']}");
				fpassthru($fp);
				exit;
			} else {
				// error
			}
		}
	}
}

