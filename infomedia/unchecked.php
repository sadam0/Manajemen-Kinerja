<?php

include ('koneksi.php');

$id = $_GET['id'];
$status = "";
    mysql_query("UPDATE list_kartu SET status = '$status' WHERE id = '$id'");
header('location:dashboard.php');
?>