<?php 
	require 'functions.php';

	if(isset($_POST["login"])){

		$username = $_POST["username"];
		$password = $_POST["password"];

		// ada atau tidak username yang diinputkan pada saat login
		// panggil mysqli_query dari koneksi $conn, cek ada atau tidak username di table user
		$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

		//cek username, menghitung berapa baris yang dikembalikan dari fungsi SELECT
		// jika ada usernamenya bernilai 1 jika tidak ada bernilai 0
		if(mysqli_num_rows($result) === 1){

			// jika ada, cek pasword
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password,$row["password"])){  //fungsi dari fungsi password_verify adlah kebalikan dari fungsi hash
				header("Location: index.php"); //jika password cocok,arahkan ke file index.php
				exit;
			}
		}
		$error = true; 
		//jika username tidak ditemukan maka langsung dijalankan script $error = true, begitu juga jika pass tidak cocok
		//variable $error bisa digunakan untuk mmembuat pesan kesalahan
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>

<!-- jika user dan password salah, panggil variable $error disini -->
	<?php if(isset($error)) : ?> 
		<p style="color : red; font-style: italic;"> username atau password salah</p>
	<?php endif; ?>
<!-- end pesan error -->

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Passwoerd :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>