<?php 
require 'functions.php';
	// cek apakah tombol submit/register sudah ditekan
	if(isset($_POST["register"])){
		if(registrasi($_POST) > 0){
			echo "<script>
					alert('user baru sudah ditambahkan');
				  </script>";
		}else{
			echo mysqli_error($conn);
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Halaman Registrasi</h1>

	<form action=""  method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi passsword :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<button type="submit" name="register">Registter</button>
		</ul>
	</form>
</body>
</html>