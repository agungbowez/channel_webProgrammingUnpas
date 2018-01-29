<?php 

session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'functions.php';

//ambil data dri URL

$id = $_GET["id"];
// var_dump($id);

// query data mahasiswa berdasarkan id
$id_mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])) {

	// start debug tombol submit ubah
	// var_dump($_POST);
	// var_dump($_FILES);
	// die;
	// end debug tombol submit ubah
	
		//cek apakah data berhasil di ubah
		if(ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diUbah!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			alert('data berhasil diUbah!');
			document.location.href = 'index.php';
		";
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah Data mahasiwa</h1>

	<form action="" method="post" enctype="multipart/form-data">
	<!-- membuat hidden id agar tidak terlihat user -->
	<input type="hidden" name="id" value="<?php echo $id_mhs["id"]; ?>">
	<input name="gambarLama" value="<?php echo $id_mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" required
				value="<?php echo $id_mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" required
				value="<?php echo $id_mhs["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email"
				value="<?php echo $id_mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" required
				value="<?php echo $id_mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="../images/<?php echo $id_mhs['gambar']; ?>" width="40"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data</button>
			</li>
		</ul>
	</form>
	<br><br>
	<a href="index.php">kembali</a>
</body>
</html>