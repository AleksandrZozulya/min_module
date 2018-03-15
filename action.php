<?php
$text = $_POST['text'];

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_table = "newtable";

$db = $mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу подключиться к таблице");

mysql_select_db("pole",$db);

mysql_query("SET NAMES 'utf-8'",$db);

$result = mysql_query("INSERT INTO table (text) VALUES ('$text')");

if ($result = 'true'){
	echo "Информация в БД записана";
}else{
	echo "Информация в БД не записана";
}
?>