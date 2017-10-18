<html>
<head>
</head>
<body>
<h2>Filter Laporan</h2>
<p>Berdasarkan Tanggal Tempo:</p>
	<form action="period.php" method="post">
	<input type="date" name="tanggal-tempo" placeholder="Tanggal Awal">
	<input type="date" name="tanggal-tempo2" placeholder="Tanggal Selanjutnya">
		 <input type="submit" name="cari" class="btn-danger" value="Print">
	</form>

<p>Berdasarkan Pemilik Kartu :</p>
<form action="cari.php" method="post">
        <select name="mode" style="margin-top:14px">
            <option value="all">all</option>
            <option value="wina">wina</option>
            <option value="gina">gina</option>
            <option value="budi">budi</option>
            <option value="revi">Revi</option>
            <option value="fikri">Fikri</option>
            <option value="review">Review</option>
            <option value="done">Done</option>
            <option value="finish">finish</option>
            <option value="unfinish">unfinish</option>

        </select>
        <input type="submit" class="btn-danger" value="Print">
    </form>


	
</body>
</html>