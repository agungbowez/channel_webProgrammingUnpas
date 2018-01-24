<?php 
	// panggil file koneksi

require 'function2.php';

$mahasiswa =query("SELECT * FROM mahasiswa");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>halaman admin 2</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<table border="1" cellspadding="10" cellspacing="0">
 		<tr>
 			<th>No.</th>
 			<th>Aksi</th>
 			<th>Gambar</th>
 			<th>Nrp</th>
 			<th>Nama</th>
 			<th>Email</th>
 			<th>Jurusan	</th>
 		</tr>
<?php $i=1; ?>
<?php foreach ($mahasiswa as $mhs) : ?>
 		<tr>
 			<td><?php echo $i; ?></td>
 			<td>
 				<a href="">Ubah</a>
 				<a href="">Hapus</a>
 			</td>
 			<td><img src="../images/<?php echo $mhs["gambar"] ; ?>" width="50" alt=""></td>
 			<td><?php echo $mhs["nrp"] ; ?></td>
 			<td><?php echo $mhs["nama"] ; ?></td>
 			<td><?php echo $mhs["email"] ; ?></td>
 			<td><?php echo $mhs["jurusan"] ; ?></td>
 		</tr>
 		 <?php $i++; ?>
 <?php endforeach; ?>

 	</table>
 </body>
 </html>