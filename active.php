<?php

$text = $_POST['text'];

$db_host = "localhost";
$db_user = "admin";
$db_password = "753159";
$db_name = 'admin';

$db = mysql_connect($db_host,$db_user,$db_password);

if(!$db) echo "Error, connection is imposible";
else
{   
    mysql_select_db('admin');

    $sql = mysql_query("INSERT INTO `admin`.`tests` (`samples`) VALUES ('$text')");

    if ($sql == true){
    	echo "Date is recoded!";
    } else {
    	echo "Reply from DB server\n";
    	echo $sql;
    	echo "Date is NOT recoded!";
    
    }

    mysql_close();
}

?>