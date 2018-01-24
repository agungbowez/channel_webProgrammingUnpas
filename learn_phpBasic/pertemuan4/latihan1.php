<!-- function date -->
<!-- date("harus menggunakan parameter") -->
<?php
	// echo date("l, d M Y");

// time
// unix timestamp
// detik yang berlaku sejak 1 januari 1970
// 60deti-60menit-24jam-hari
	// echo date("l", time()+60*60*24*3);


	// mktime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam,menit,detik,bulan,tanggal,tahun
 echo date("G");
// echo "<br>";
// echo time();

// echo "<br>";

$hari= date("H:i:s");
echo $hari;
// echo date("l",mktime(0,0,0,8,25,1985));
// echo "<br><vbr><br>";
// echo date("l", strtotime("26 mei 1998"));
 ?>