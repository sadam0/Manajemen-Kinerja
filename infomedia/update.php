<html>
    <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
      
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body style="background:white;
    font-family: Raleway">
    <?php
  include "koneksi.php";
 session_start();
   $id = $_GET['id'];

        $kartu = mysql_query("select * from kartu_utama where id = '$id'");
        while($q = mysql_fetch_array($kartu)){
        ?>
        <form action="updated.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $q['id'];?>">
            <input type="text" value="<?php echo $q['judul_kartu'];?>" name="judul">
            <input type="submit">
        </form>
        <?php
        }
        ?>

        
        </body>