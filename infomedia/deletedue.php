<?php
include ('koneksi.php');

$id = $_GET['id'];

mysql_query("delete from duedate where id = '$id'");
header('location:dashboard.php');
?>