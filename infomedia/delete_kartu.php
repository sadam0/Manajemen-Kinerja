<?php

include ('koneksi.php');

$id = $_GET['id'];

mysql_query("DELETE from kartu_utama where id = '$id' ");

header('location:dashboard.php')
?>