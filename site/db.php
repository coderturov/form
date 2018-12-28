<?php

$connection = mysql_connect("localhost", "mybd_user", "admin123");
$db = mysql_select_db("my_bd");
mysql_set_charset("utf8");
if(!$connection || !$db)
{
    exit(mysql_error());
}
?>