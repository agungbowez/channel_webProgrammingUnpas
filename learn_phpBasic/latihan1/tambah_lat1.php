<?php 
require 'functions_lat1.php';
// cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])) {
	// var_dump($_POST);die;
	// apakah data berhasil d tambahkan atau tidak
		if(tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index_lat1.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index_lat1`.php';
			</script>
		";
	}
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Tambah Data</title>
 </head>
 <body>
 	<h1>Tambah Data</h1>

 	<form action="" method="post" ="post" enctype="multipart/form-data">
 		<ul>
 			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<!-- uploaded ubah disini -->
				<input type="file" name="gambar" >
			</li>
 			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
 		</ul>
 	</form>
 </body>
 </html>