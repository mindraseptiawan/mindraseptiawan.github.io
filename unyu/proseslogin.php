<?php
$mail = "draktul007@gmail.com";
$pwd = 6969;

$email = $_POST["email"];
$password = $_POST["password"];

if ($email == $mail & $password == $pwd) echo "Login Sukses";
else echo "Login gagal";
