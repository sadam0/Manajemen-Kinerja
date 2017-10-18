<?php

include ('koneksi.php');

$id = $_POST['id'];
$judul = $_POST['judul'];

$sql = "UPDATE kartu_utama SET judul_kartu = '$judul' where id = '$id' ";
mysql_query($sql);

header('location:dashboard.php');
// var_dump($id , $judul);
?>