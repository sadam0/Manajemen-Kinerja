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
    
    if(isset($id)){
        $kartu = mysql_query("select * from kartu_utama where id = '$id'");
        while($q = mysql_fetch_array($kartu)){
            echo "<b>Judul Kartu :  $q[judul_kartu]</b>";}
    }
        ?>
<table>
    <tr>
        <td>
<form method="post" action="checklist.php?id=<?php echo $id?>">
    <table>
        <tr><td>
            <input type="text" name="sub_kartu" class="form-control" style="max-width:400px;" placeholder="Masukan List Kegiatan"></td>
            <td><input type="submit" name="kirim" class="btn btn-success"></td>
        </tr>
         </table>
    </form>
           
            </td>
            <td>
    <form method="post" action="checklist.php?id=<?php echo $id?>" enctype="multipart/form-data">
    <table>
        <tr><td>
            <input type="file" name="attachment" class="form-control" style="max-width:400px;" placeholder="Masukan List Kegiatan"></td>
            <td><input type="submit" name="attach" class="btn btn-success"></td>
        </tr>
         </table>
    </form>
        </td>
        </table>
        <br>
        <?php
        $download = mysql_query("select * from attachment where kartu_id = '$id'");
        while($r = mysql_fetch_array($download)){
            echo "<table><tr>
                    <td><a href='$r[url]'>$r[file]</a></td>
                </tr>
                <tr> <td>$r[ukuran] Kb<a href='deleteattach.php?id=$r[id]'> <span>&nbsp;</span><img src='icon/delete.png'></a></td></tr>

                </table>";
        }
        ?>
        <form method="post" action="checklist.php?id=<?php echo $id?>">
        <table>
            <tr>
                <td>Masukan Duedate :</td>
            </tr>
            <tr>
                <td>
                    <input type="date" name="duedate" class="form-control">
                </td>
                <td>
                    <input type="submit" name="date" class="btn btn-danger">
                </td>
            </tr>
<?php
// duedate.php
        if (isset($_POST['date']))
{ 
        $tglsekarang = date("y/m/d"); // 26 Juni 2015
        $tanggal_tempo = $_POST['duedate']; // 1 Juli 
        $tanggal_tempo = date('y-m-d', strtotime($tanggal_tempo));

        mysql_query("INSERT INTO duedate (kartu_id,tanggal_tempo,tanggal_sekarang) VALUES ('$id','$tanggal_tempo','$tglsekarang')");
            header('location:dashboard.php#myModal');

}
?>
  <?php   
    $tampil = mysql_query("SELECT * FROM duedate where kartu_id = '$id'");
            while ($r = mysql_fetch_array($tampil)){
                echo " Duedate : $r[tanggal_sekarang] <span><a href='deletedue.php?id=$r[id]'> <span>&nbsp;</span><img src='icon/delete.png'></a>";
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



    <h4 align="left">Kartu Checklist</h4>
<?php
$tampil = mysql_query("SELECT * FROM list_kartu WHERE kartu_utama_id = '$id'");
while($q = mysql_fetch_array($tampil)){
    echo "
    <table>
            <tr>
                <td width='400px'>$q[sub_kartu]</td>
                 <td><a href='checked.php?id=$q[id]'> <img src='icon/checked.png'></a></td>
                   <td>&nbsp;</td>
                  <td><a href='unchecked.php?id=$q[id]'> <img src='icon/delete.png'></a></td>
                  <td style='color:green'><b>$q[status]</b></td>
            </tr>
        </table>";
}?> 
        </body>