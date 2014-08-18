<?php 

$json = file_get_contents("./store_cn.json");

$stores = (json_decode($json, TRUE));

$con = mysql_connect("localhost","root","admin");

mysql_select_db("dz_db", $con);

mysql_query("SET NAMES utf8");

mysql_query("DELETE FROM shop WHERE language='cn'");

$data = require_once "./protected/data/chinacity.php" ;

// 用城市名字找出城市ID
function getCityID($city) {
	global $data;

	foreach ($data as $province_id => $province_data) {
		foreach ($province_data[1] as $city_id => $city_name) {
			if ($city == $city_name) {
				return $city_id;
			}
		}
	}
}

// 用城市名字找出对应省份的ID
function getProvinceID($city) {
	global $data;

	foreach ($data as $province_id => $province_data) {
		foreach ($province_data[1] as $city_id => $city_name) {
			if ($city == $city_name) {
				return $province_id;
			}
		}
	}
}

foreach($stores as $store) {
	$tmp_shop = array(
		"country" => "中国",
		"city" => getProvinceID($store["city"]), // 省
		"distinct" => getCityID($store["city"]), // 城市 
		"title" => $store["title"],
		"address" => $store["address"],
		"lat" => $store["lat"],
		"lng" => $store["lng"],
		"cdate" => date("Y-m-d H:i:s"),
		"mdate" => date("Y-m-d H:i:s"),
		"status" => 1,
		"type" => 0,
		"star" => 1,
		"language" => "cn",
		"category" => $store["category"],
	);
	$values = "";
	foreach ($tmp_shop as $tmp_shop_value) {
		$values .= ", ". '"'.mysql_escape_string($tmp_shop_value). '"';
	}
	$values = substr($values, 1);
	$sql = "INSERT INTO shop (country, city, `distinct`, title, address, lat, lng, cdate, mdate, status, type, star, language, category) VALUES (".$values.")";

	$ret = mysql_query($sql);

	if (!$ret) {
		print mysql_error();
		print "\r\n";
	}
	else {
		print "Store [ {$store["title"]} ] imported.   [success]\r\n";
	}
}