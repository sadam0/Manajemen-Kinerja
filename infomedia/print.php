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
    <body style="background:crimson" onLoad="window.print()">
    <center>
    <img src="ish.png" align="center" width="50px">
    </center>
    <h2 align="center">Laporan Kegiatan</h2>

    <?php
  include "koneksi.php";
 session_start();
   $id = $_GET['id'];
    
    if(isset($id)){
        $kartu = mysql_query("select * from kartu_utama where id = '$id'");
        while($q = mysql_fetch_array($kartu)){
            echo "<table>
            <tr><td>
            Judul Kartu</td> <td>:</td>  <td>$q[judul_kartu]</td>
        </tr>
        <tr>
                <td>Staff HRD</td> <td>:</td> <td>$q[pemilik_kartu]</td></tr> ";}
    
    }
        ?>
<table>
    <tr>
        <td>
        File Lampiran :
        <br>
        <?php
        $download = mysql_query("select * from attachment where kartu_id = '$id'");
        while($r = mysql_fetch_array($download)){
            echo "<table><tr>
                    <td><a href='$r[url]'>$r[file]</a></td>
                    </tr>

                </table>";
        }
        ?>
             <?php
// duedate.php

if (isset($_POST['date'])){ 
$tglsekarang = strtotime(date("y/m/d")); // 26 Juni 2015
$tanggal_tempo = $_POST['duedate']; // 1 Juli 
$tanggal_tempo = date('y-m-d', strtotime($tanggal_tempo));
    var_dump($tglsekarang);
 
// hitung perbedaan  jatuh tempo dengan sekarang 
$beda = $tanggal_tempo - $tglsekarang; // unix time
// konversi $beda kedalam hari
$bedahari = ($beda/24/60/60);
 

// pastikan nilainya positif, kalo negatif berarti sudah lewat.
if ($beda > 0 )
{
    mysql_query ("INSERT INTO duedate (kartu_id,tanggal_tempo,tanggal_sekarang) VALUES ('$id','$tanggal_tempo','$tglsekarang')");
    header('location:dashboard.php');
	if ($bedahari < 5 )
	{
		echo "Waktunya ditagih!!!. Jatuh tempo dalam $bedahari hari.";
	}
	else 
	{
		echo "Masih lama. Nagihnya $bedahari hari lagi.";
	}
}
else
{
	echo "hasilnya kok minus?";
}
}
      ?>
      Target Waktu :
  <?php   
 $tampil = mysql_query("SELECT * FROM duedate where kartu_id = '$id'");
            while ($r = mysql_fetch_array($tampil)){
                echo "$r[tanggal_tempo]";
            }
?>
        </table>
        </form>
       
       
<?php
    if(isset($_POST['kirim'])){
        $sub_kartu = $_POST['sub_kartu'];
        mysql_query("INSERT INTO list_kartu(kartu_utama_id,sub_kartu) VALUES ('$id','$sub_kartu')");
    header('location:dashboard.php#myModal');
    }
    ?>
    
<?php
if(isset($_POST['attach']))
{
    $file = $_FILES['attachment']['name'];
    $ukuran = $_FILES['attachment']['size'];
    
    $uploaddir='file/';
    $alamatfile=$uploaddir.$file;
    
    if(move_uploaded_file($_FILES['attachment'][tmp_name],$alamatfile)){
        $upload = mysql_query("INSERT INTO attachment (kartu_id , file,ukuran , url) VALUES ('$id','$file','$ukuran','$alamatfile')");
        header('location:dashboard.php');
    }
}        
?>
<br>
<br>

<center>
<table border='1px solid'>
<tr>
<th>List Kegiatan</th>
<th>Status</th>
</tr>
    
<?php
$tampil = mysql_query("SELECT * FROM list_kartu WHERE kartu_utama_id = '$id'");
while($q = mysql_fetch_array($tampil)){
    echo "
    
            <tr>
                <td width='400px'>$q[sub_kartu]</td>
                <td>$q[status]</td>
            </tr>
     ";
}?> 
</table>
</center>
        </body>