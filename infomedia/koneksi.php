<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "ish_database"; // Nama databasenya

mysql_connect ($host,$username,$password);
mysql_select_db($database);
?>
