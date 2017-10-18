<?php
session_start();

include('koneksi.php'); //berfungsi memanggil kelas koneksi.php
error_reporting(0);

$v_email 	= $_POST['email']; //membuat variabel, dimana email diambil dari nama text di kelas login
$v_pass 	= $_POST['pass']; //membuat variabel, dimana password diambil dari nama text di kelas login
$OP	     	= $_GET['OP']; //membuat variabel, dimana OP dibaca di action di kelas login


if($OP=="in"){ //kondisi apakah login
    $cek	= mysql_query("SELECT * FROM staff WHERE email='$v_email' AND password='$v_pass'");
	$c		= mysql_fetch_array($cek);
    if(mysql_num_rows($cek)==1){ //jika berhasil akan bernilai 1
		$_SESSION['ses_email']	= $c['email'];
		$_SESSION['ses_pass'] 	= $c['password'];
        header("location:dashboard.php"); 
    }else{ //jika tidak bernilai 1 maka akan gagal login
         die("<head><link rel='stylesheet' type='text/css' href='web2.css'></head><body bgcolor='#1D1F21'><div align='center'><b>Login Gagal!</b> Nama atau password anda salah, 
		 silahkan <a href=\"javascript:history.back()\">coba lagi.</a><br> <img src='coper.png'></div></body>");
    }
}else if($OP=="out"){ //kondisi apakah logout
	unset($_SESSION['ses_email']);
	unset($_SESSION['ses_password']);
    header("location:login.php");
}
?>
