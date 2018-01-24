<!-- cek apakah tIDAK ada data di get -->
<?php
	if( !isset($_GET["nama"]) ||
		!isset($_GET["npm"]) ||
		!isset($_GET["email"]) ||
		!isset($_GET["jurusan"]) ||
		!isset($_GET["gambar"]) ){
		// redirect
		header("Location: latihan1.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>detail mahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="../images/<?php echo $_GET["gambar"] ?>"</li>
		<li><?php echo $_GET["nama"] ?></li>
		<li><?php echo $_GET["npm"] ?></li>
		<li><?php echo $_GET["email"] ?></li>
		<li><?php echo $_GET["jurusan"] ?></li>
	</ul>
	<a href="latihan1.php">kembali</a>
</body>
</html>