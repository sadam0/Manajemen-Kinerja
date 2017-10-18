<?php
include ('koneksi.php');

if(isset($_POST['wina'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "wina";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
} else if(isset($_POST['gina'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "gina";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
} else if(isset($_POST['budi'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "budi";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
} else if(isset($_POST['revi'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "revi";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
} else if(isset($_POST['fikri'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "fikri";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
}
else if(isset($_POST['review'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "review";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
}
else if(isset($_POST['done'])){
    $judul = $_POST['judul_kartu'];
    $pemilik = "done";
    mysql_query("INSERT INTO  kartu_utama (judul_kartu,pemilik_kartu) VALUES ('$judul','$pemilik')");
}
header('location:dashboard.php');
?>