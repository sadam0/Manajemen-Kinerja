<?php

include ('koneksi.php');
$email = $_POST['email'];
$password = $_POST['password'];
mysql_query("insert into staff (email , password) VALUES ('$email','$password')");

header('location:login.php');
?>