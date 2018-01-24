<!-- variable scope / lingkup variable -->

<!--  superglobal  merupakan variable global milik php,
dan merupakan array associatif
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV -->

<?php 
	// $x = 10;
	// function tampilx() {
	// 	// keyword global untuk mencari nilai variable di luar function
	// 	global $x;
	// 	echo $x;
	// }

	// tampilx();

// start $_GET
$mahasiswa = [
	[
		"nama" => "agung",
		"npm" => "1805",
		"email" => "bowez88@gmail.com",
		"jurusan" => "teknik informatika",
		"gambar" => "1.jpg"
		],
	[
		"nama" => "novi",
		"npm" => "1806",
		"email" => "no8@gmail.com",
		"jurusan" => "ekonomi",
		"gambar" => "2.jpg"
	]
];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>get</title>
 </head>
 <body>
 	<h1>daftar mahasiswa </h1>
 	<ul>
 		<?php foreach ($mahasiswa as $mhs) : ?>
 		
 			<li>
 				<a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&npm=
 				<?php echo $mhs["npm"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
 			</li>
 			
 		<?php endforeach; ?>
 	</ul>
 </body>
 </html>

