<?php 

$json = file_get_contents("./store_en.json");

$stores = (json_decode($json, TRUE));

$con = mysql_connect("localhost","root","admin");

mysql_select_db("dz_db", $con);

mysql_query("SET NAMES utf8");

mysql_query("DELETE FROM shop WHERE language='en'");

foreach($stores as $store) {
	$tmp_shop = array(
		"country" => "中国",
		"city" => $store["city"],
		"distinct" => "",
		"title" => $store["title"],
		"address" => $store["address"],
		"lat" => $store["lat"],
		"lng" => $store["lng"],
		"cdate" => date("Y-m-d H:i:s"),
		"mdate" => date("Y-m-d H:i:s"),
		"status" => 1,
		"type" => 0,
		"star" => 1,
		"language" => "en",
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