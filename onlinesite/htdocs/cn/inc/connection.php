<?php
$con = mysql_connect("localhost","root","admin");
// Connect DataBase
mysql_select_db("dzonline", $con);
// Set Char SET
mysql_query("SET NAMES utf8");
?>
