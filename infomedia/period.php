<style>

	th,td{border:0.5px solid; border-color: black;}
	th{padding:5px;}
</style>
<body onload="window.print()">
<center>
<img src="ish.png" width="50px">
<h3>Laporan Manajemen Kinerja</h3>
<table style="border:collapse;">
<tr style="border: collapse">
						<th>No.</th>
						<th>Judul Kartu</th>
						<th>Sub Kartu</th>
						<th>Tanggal Sekarang</th>
						<th>Tanggal Tempo</th>
						<th>Pemilik Kartu</th>
						<th>Status</th>
						</tr>




<?php


include('koneksi.php');

$tgltempo1 = $_POST['tanggal-tempo'];
$tgltempo2 = $_POST['tanggal-tempo2'];
$no = 1;

$tampil = mysql_query("SELECT kartu_utama.id , kartu_utama.judul_kartu, list_kartu.sub_kartu, kartu_utama.pemilik_kartu,duedate.tanggal_sekarang,duedate.tanggal_tempo,list_kartu.status from kartu_utama INNER JOIN duedate on kartu_utama.id = duedate.kartu_id INNER JOIN list_kartu ON kartu_utama.id = list_kartu.kartu_utama_id where tanggal_tempo between 'tgltempo1' and '$tgltempo2' ");

while($r = mysql_fetch_array($tampil)){
	echo "<tr>
							<td align='center'>$no.</td>
							<td>$r[judul_kartu]</td>
							<td>$r[sub_kartu]</td>
							<td>$r[tanggal_sekarang]</td>
							<td>$r[tanggal_tempo]</td>
							<td>$r[pemilik_kartu]</td>
							<td>$r[status]</td>
	</tr>
	";
$no++;
}



?>
</table>