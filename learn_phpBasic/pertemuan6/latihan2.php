<?php 
	// $karyawan = [
	// 				["agung","835","safety"],
	// 				["pandu","1880","safety"]
					
	// 			]

// array assosiatif

$mahasiswa = [
			["nama" => "agung","npm" => "1805","jurusan" => "Teknik informatika"],
			["nama" => "novi","npm" => "1202","jurusan" => "ekonomi"],
			["nama" => "naura","npm" => "22200", "jurusan" => "sastra"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>asossiatif</title>
</head>
<body>
	<h1> Daftar mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li><?php echo $mhs["nama"]; ?></li>
			<li><?php echo $mhs["npm"]; ?></li>
			<li><?php echo $mhs["jurusan"]; ?></li>
	
		</ul>
	<?php endforeach; ?>
</body>
</html>