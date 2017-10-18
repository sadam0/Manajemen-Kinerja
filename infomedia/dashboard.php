<?php
session_start();

if(!isset($_SESSION['ses_email']) OR !isset($_SESSION['ses_pass'])){
	
	die("<head>
    </head>
    <body bgcolor='crimson'>
    <div align='center' style='margin-top:200px'><b><h1>Anda Tidak Layak untuk mengakses</b><br>
    <h1>Silahkan Hubungi Develop Nya !</h1><br>
    <h1>Nuhun .. 087887702788(Cepi)</h1>
    </div>");
} else {
?>

<?php

include 'koneksi.php';

$kartu1 = '';
$kartu2 = '';
$kartu3 = '';
$kartu4 = '';
$kartu5 = '';
$kartu6 = '';
$kartu7 = '';
    
$query = "SELECT  id, entry_id, judul_kartu FROM kartu_utama where pemilik_kartu = 'wina' ORDER BY rank_value ASC";
$result = mysql_query($query) or die ('error');
if(mysql_num_rows($result) == 0){
    $kartu1 = '';
    }
else {
        while($row = mysql_fetch_array($result)){
//            var_dump($row);
        $kartu1 .='<li id="entry_'.$row['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row['id'].'">'. $row['judul_kartu'] .'</a> <a href="delete_kartu.php?id='.$row['id'].'" style="text-align:right;"><br><img src="icon/delete.png" style="text-align:left"></a> <a href="print.php?id='.$row['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
          //  var_dump($kartu1);
        }
}

$query2 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'gina' ORDER BY rank_value ASC ";
$result2 = mysql_query($query2) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu2 = '';
    }
else {
        while($row2 = mysql_fetch_array($result2)){
        $kartu2 .='<li id="entry_'.$row2['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row2['id'].'">'. $row2['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row2['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row2['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row2['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
    
//budi
    $query3 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'budi' ORDER BY rank_value ASC ";
$result3 = mysql_query($query3) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu3 = '';
    }
else {
        while($row3 = mysql_fetch_array($result3)){
        $kartu3 .='<li id="entry_'.$row3['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row3['id'].'">'. $row3['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row3['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row3['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row3['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
    
//revi
    $query4 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'revi' ORDER BY rank_value ASC ";
$result4 = mysql_query($query4) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu4 = '';
    }
else {
        while($row4 = mysql_fetch_array($result4)){
        $kartu4 .='<li id="entry_'.$row4['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row4['id'].'">'. $row4['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row4['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row4['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row4['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
    
//fikri
$query5 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'fikri' ORDER BY rank_value ASC ";
$result5 = mysql_query($query5) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu5 = '';
    }
else {
        while($row5 = mysql_fetch_array($result5)){
        $kartu5 .='<li id="entry_'.$row5['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row5['id'].'">'. $row5['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row5['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row5['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row5['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
    
$query6 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'review' ORDER BY rank_value ASC ";
$result6 = mysql_query($query6) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu6 = '';
    }
else {
        while($row6 = mysql_fetch_array($result6)){
        $kartu6 .='<li id="entry_'.$row6['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row6['id'].'">'. $row6['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row6['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row6['id'].'"> <img src="icon/print.png" style="text-align:left"></a><a data-toggle="modal" href="#myUpdated" data-id="'.$row6['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
    
    $query7 = "SELECT id, entry_id, judul_kartu from kartu_utama WHERE pemilik_kartu = 'done' ORDER BY rank_value ASC ";
$result7 = mysql_query($query7) or die ('error');

if(mysql_num_rows($result) == 0){
    $kartu7 = '';
    }
else {
        while($row7 = mysql_fetch_array($result7)){
        $kartu7 .='<li id="entry_'.$row7['entry_id'].'" class="ui-state-default"><a data-toggle="modal" href="#myModal" data-id="'.$row7['id'].'">'. $row7['judul_kartu'].'</a><a href="delete_kartu.php?id='.$row7['id'].'" style="text-align:right;"><br><img src="icon/delete.png"></a><a href="print.php?id='.$row7['id'].'"> <img src="icon/print.png" style="text-align:left"></a>
        <a data-toggle="modal" href="#myUpdated" data-id="'.$row7['id'].'"><img src="icon/edit.png" style="text-align:left"></a></li>';
        //    var_dump($kartu2);
        }
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; utf-8" />
<title><?php echo $_SESSION['ses_email']?></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<style type="text/css">
    body{background:#eee;
        font-family:"Raleway",sans-serif;}
    
    ::-webkit-scrollbar {
    width: 10px;
    height:10px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
     background: crimson;
    height:5px;
    border-radius: 3px;
}
 
::-webkit-scrollbar-thumb {
   
    background: #666; 
    border-radius:10px;
}

    #board {
    white-space: nowrap;
    margin-bottom: 10px;
    overflow-x: auto;
    overflow-y: auto;
    padding-bottom: 10px;
    position: absolute;
    right: 0;
    left: 0;
      background:#eee;
        bottom:0;
}
    #sortable1, #sortable2 ,#sortable3,#sortable4,#sortable5,#sortable6,#sortable7
    {width: 270px;
    margin: 0 5px;
    height: 630;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: top;
    white-space: nowrap;
    text-align: left;
    background:white;}
	#sortable1 li, #sortable2 li,#sortable3 li,#sortable4 li,#sortable5 li,#sortable6 li,#sortable7 li {     background-color: #fff;
    
    border-radius: 3px;
    cursor: pointer;
    margin-bottom: 6px;
    max-width: 300px;
    min-height: 40px;
    background-color:;
    padding:8px;
    z-index: 0;
    margin-right: 10;
    margin-left: -30px;
    display: block;
    font-family:"Raleway",sans-serif;}
</style>
</head>

<nav class="navbar navbar-inverse" style="width:100%; border: none;">
  <div class="container-fluid" style=" height:50px; background-color: #f4645f">
      <ul class="nav navbar-nav">
      <li ><a style="color:white;">User : <?php echo $_SESSION['ses_email']?></a></li>
      <li ></li>
    <li><a data-toggle="modal" href="#mySearch" ><img src="icon/print.png" style="text-align:left"></a></li>
</li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="cek_login.php?OP=out" style="color:white; font-family: Raleway;"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
     <div class="modal fade" id="myModal" role="dialog" style="background:transparent">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:none;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myUpdated" role="dialog" style="background:transparent">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:none;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="updated-data"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mySearch" role="dialog" style="background:transparent">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:none;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="updated-data"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="board">
                  
            <ul id="sortable1" class="connectedSortable">
                <h3>Wina</h3>
                    <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                    <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="wina" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>    
                </form>
                <?php echo $kartu1;?>
            </ul>
                
            <ul id="sortable2" class="connectedSortable">
                <h3>Gina</h3>
                <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                  <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="gina" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu2; ?>
            </ul>
              
            <ul id="sortable3" class="connectedSortable">
                <h3>Budi</h3>
                 <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                  <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="budi" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu3; ?>
            </ul>
                   
            <ul id="sortable4" class="connectedSortable">
                <h3>Revi</h3>
                <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                   <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="revi" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu4; ?>
            </ul>
                    
            <ul id="sortable5" class="connectedSortable">
                <h3>fikri</h3>
                 <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                   <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="fikri" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu5; ?>
            </ul>
                   
            <ul id="sortable6" class="connectedSortable">
                <h3>Review</h3>
                 <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                   <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="review" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu6; ?>
            </ul>
    
            <ul id="sortable7" class="connectedSortable">
                    <h3>Done</h3>
                 <form method="post" action="insert.php" name="form-user" style=" margin-right: 10; margin-left: -30px;">
                    <table>
                        <tr><td>
                        <input type="text" name="judul_kartu" class="form-control">
                            </td><td><input type="submit" name="done" class="btn btn-primary" value="Create" style="background-color: #f4645f"></td>
                        </tr>
                        </table>
                    </form>
                <?php echo $kartu7; ?>
            </ul>
    </div>
<script type="text/javascript">
    var $jnoc = jQuery.noConflict();
$(function() 
{
    $jnoc("#sortable1, #sortable2,#sortable3,#sortable4,#sortable5,#sortable6,#sortable7").sortable(
    {
        connectWith: '.connectedSortable',
        update : function () 
        { 
            $jnoc.ajax(
            {
                type: "POST",
                url: "drag.php",
                data: 
                {
                    sort1:$jnoc("#sortable1").sortable('serialize'),
                    sort2:$jnoc("#sortable2").sortable('serialize'),
                    sort3:$jnoc("#sortable3").sortable('serialize'),
                    sort4:$jnoc("#sortable4").sortable('serialize'),
                    sort5:$jnoc("#sortable5").sortable('serialize'),
                    sort6:$jnoc("#sortable6").sortable('serialize'),
                    sort7:$jnoc("#sortable7").sortable('serialize')
                },
                success: function(html)
                {
                    //$('.success').fadeIn(500);
                }
            });
        } 
    }).disableSelection();
});
</script>
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'GET',
                url : 'checklist.php',
                data :  'id='+ id,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
  var $jc = jQuery.noConflict();
    $jc(document).ready(function(){
        $jc('#myUpdated').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $jc.ajax({
                type : 'GET',
                url : 'update.php',
                data :  'id='+ id,
                success : function(data){
                $('.updated-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
  var $jc = jQuery.noConflict();
    $jc(document).ready(function(){
        $jc('#mySearch').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $jc.ajax({
                type : 'GET',
                url : 'search.php',
                data :  'id='+ id,
                success : function(data){
                $('.updated-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php 
}
    ?>    </body>
</html>