
<html>
<head>
<style>
	table ,th,td{border: 1px solid;
				font-family: calibri}
	tr{border:0px;}
	th{padding:6px;
		background-color: deepskyblue}
</style>
</head>
<body onload="window.print()">
<center>
<img src="ish.png" width="50px">
<h2>Laporan Kinerja</h2>
<section>
<?php
include('koneksi.php');

$mode = $_POST['mode'];

switch($mode)
{
	case 'all' : 	echo "<table>
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query7 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id");
					while($all = mysql_fetch_array($query7))
					{
						echo "<tr>
							<td>$no</td>
							<td>$all[judul_kartu]</td>
							<td>$all[sub_kartu]</td>
							<td>$all[tanggal_sekarang]</td>
							<td>$all[tanggal_tempo]</td>
							<td>$all[pemilik_kartu]</td>
							<td>$all[status]</td>
							</tr>";

					$no++;
					}

	break;				

	case 'wina' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					 $query = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'wina'");
					while($wina = mysql_fetch_array($query))
					{
						echo "<tr>
							<td>$no</td>
							<td>$wina[judul_kartu]</td>
							<td>$wina[sub_kartu]</td>
							<td>$wina[tanggal_sekarang]</td>
							<td>$wina[tanggal_tempo]</td>
							<td>$wina[pemilik_kartu]</td>
							<td>$wina[status]</td>
							</tr>";
							$no++;
					}
	break;


	case 'gina' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query1 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'gina'");
					while($gina = mysql_fetch_array($query1))
					{
						echo "<tr>
							<td>$no</td>
							<td>$gina[judul_kartu]</td>
							<td>$gina[sub_kartu]</td>
							<td>$gina[tanggal_sekarang]</td>
							<td>$gina[tanggal_tempo]</td>
							<td>$gina[pemilik_kartu]</td>
							<td>$gina[status]</td>
							</tr>";
					$no++;
					}
	break;
	case 'budi' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query2 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'budi' ");
					while($budi = mysql_fetch_array($query2))
					{
						echo "<tr>
							<td>$no</td>
							<td>$budi[judul_kartu]</td>
							<td>$budi[sub_kartu]</td>
							<td>$budi[tanggal_sekarang]</td>
							<td>$budi[tanggal_tempo]</td>
							<td>$budi[pemilik_kartu]</td>
							<td>$budi[status]</td>
							</tr>";
					$no++;
					}
	break;			
	case 'revi' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query3 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'revi'");
					while($revi = mysql_fetch_array($query3))
					{
						echo "<tr>
							<td>$no</td>
							<td>$revi[judul_kartu]</td>
							<td>$revi[sub_kartu]</td>
							<td>$revi[tanggal_sekarang]</td>
							<td>$revi[tanggal_tempo]</td>
							<td>$revi[pemilik_kartu]</td>
							<td>$revi[status]</td>
							</tr>";
					$no++;
					}
	break;
	case 'fikri' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query4 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'fikri'");
					while($fikri = mysql_fetch_array($query4))
					{
						echo "<tr>
							<td>$no</td>
							<td>$fikri[judul_kartu]</td>
							<td>$fikri[sub_kartu]</td>
							<td>$fikri[tanggal_sekarang]</td>
							<td>$fikri[tanggal_tempo]</td>
							<td>$fikri[pemilik_kartu]</td>
							<td>$fikri[status]</td>
							</tr>";
					$no++;
					}
	break;
	case 'review' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query5 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'review'");
					while($review = mysql_fetch_array($query5))
					{
						echo "<tr>
							<td>$no</td>
							<td>$review[judul_kartu]</td>
							<td>$review[sub_kartu]</td>
							<td>$review[tanggal_sekarang]</td>
							<td>$review[tanggal_tempo]</td>
							<td>$review[pemilik_kartu]</td>
							<td>$review[status]</td>
							</tr>";
					$no++;
					}
	break;
	case 'done' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query6 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where pemilik_kartu = 'done' ");
					while($done = mysql_fetch_array($query6))
					{
						echo "<tr>
							<td>$no</td>
							<td>$done[judul_kartu]</td>
							<td>$done[sub_kartu]</td>
							<td>$done[tanggal_sekarang]</td>
							<td>$done[tanggal_tempo]</td>
							<td>$done[pemilik_kartu]</td>
							<td>$done[status]</td>
							</tr>";
					$no++;
					}
	break;

case 'finish' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query7 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where status = 'finish' ");
					while($finish = mysql_fetch_array($query7))
					{
						echo "<tr>
							<td>$no</td>
							<td>$finish[judul_kartu]</td>
							<td>$finish[sub_kartu]</td>
							<td>$finish[tanggal_sekarang]</td>
							<td>$finish[tanggal_tempo]</td>
							<td>$finish[pemilik_kartu]</td>
							<td>$finish[status]</td>
							</tr>";
					$no++;
					}
	break;

case 'unfinish' : 	echo "<table >
							<tr>
							<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>";
						$no = 1 ;
					$query8 = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where status = '' ");
					while($uf = mysql_fetch_array($query8))
					{
						echo "<tr>
							<td>$no</td>
							<td>$uf[judul_kartu]</td>
							<td>$uf[sub_kartu]</td>
							<td>$uf[tanggal_sekarang]</td>
							<td>$uf[tanggal_tempo]</td>
							<td>$uf[pemilik_kartu]</td>
							<td>$uf[status]</td>
							</tr>";
					$no++;
					}
	break;
}
?>
</section>

</body>