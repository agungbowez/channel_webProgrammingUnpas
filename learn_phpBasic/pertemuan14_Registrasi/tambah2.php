<?php
	require 'functions.php';
	

	if (isset($_POST["submit"])) {
		if(tambah($_POST) > 0 ){
			echo "<script>
					alert('data baerhasil disimpan');
					document.location.href= 'index.php';
			      </script>";
		}else{
			echo "<script>
					alert('data gagal disimpan');
					document.location.href = 'index.php'
				  </script>";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tambah 2</title>
</head>
<body>
	<h1> Tambah data</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">Nrp :</label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email</label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>