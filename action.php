<?php
$text = $_POST['text'];

$db_host = "localhost";
$db_user = "admin";
$db_password = "753159";
$db_name = 'admin';

$db = mysql_connect($db_host,$db_user,$db_password) or die("Не могу подключиться к таблице");

mysql_select_db("admin",$db);

mysql_query("SET NAMES 'utf-8'",$db);

$result = mysql_query("INSERT INTO table () VALUES ('$text')");

if ($result = 'true'){
	echo "Информация в БД записана";
}else{
	echo "Информация в БД не записана";
}
?>
