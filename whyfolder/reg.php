<?php
if(!empty($_POST['login'])){
require_once 'connection.php';
$check_user = $conn -> prepare("SELECT * FROM users WHERE login = ? ");
$check_user -> execute([$_POST['login']]);
$check_user= $check_user -> fetch;
if ($_POST['login'] == $check_user['login']){
    $location= "../index.php?message='Логин занят'";
}
header( "location".$location);
}
?>