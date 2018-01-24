<?php
	$mahasiswa = [
		["agung","1805","teknik","email"],
		["sandhika","200","ekonomi","email"]
	]; 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar mahasiswa</h1>
 	<?php foreach ($mahasiswa as $mhs ) : ?>
 	<ul>
 		<!-- looping -->
 			<li><?= $mhs[0]; ?></li>
 			<li><?= $mhs[1]; ?></li>
 			<li><?= $mhs[2]; ?></li>
 			<li><?= $mhs[3]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>