<?php
$db_setup = "mysql:host=localhost;dbname=__;charset=utf8";
$db_user="root";
$db_pass="";
$db_errmode=[PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXEPTION];
$conn= new PDO($db_setup,$db_user,$db_pass,$db_errmode);
?>