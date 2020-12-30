<?php
session_start();
$_SESSION["userName"] = "admin";
$_SESSION["passWord"] = "123";


$userName = $_POST['username'];
$passWord= $_POST['passWord'];

$result =($userName == 'admin' && $passWord = 123) ? "xin chao wiloke": "Dang nhap that bai";
echo $result;