<?php
include ('koneksi.php');

$id = $_GET['id'];

mysql_query("delete from attachment where id = '$id'");
header('location:dashboard.php');
?>