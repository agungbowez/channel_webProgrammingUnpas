<?php 
	require 'functions_lat1.php';

	$mahasiswa = tampilData("SELECT * FROM mahasiswa");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Data Mahasiswa</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
	
	<a href="tambah_lat1.php">Tambah Data</a>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<tr>
 			<th>No</th>
 			<th>Aksi</th>
 			<th>Nama</th>
 			<th>Nrp</th>
 			<th>Email</th>
 			<th>Jurusan</th>
 		</tr>

<?php $i = 1; ?>
<?php foreach ($mahasiswa as $mhs) : ?>
 		<tr>
 			<td><?php echo $i; ?></td>
 			<td>
 				<a href="ubah_lat1.php">Ubah</a>
 				<a href="hapus_lat1.php?id=<?php echo $mhs["id"] ; ?>" onclick="return confirm ('yakin?')">Hapu</a>
 			</td>
 			<td><img src="../images/<?php echo $mhs["gambar"]  ?>" width="50" alt=""></td>
 			<td><?php echo $mhs["nama"] ; ?></td>
 			<td><?php echo $mhs["nrp"] ; ?></td>
 			<td><?php echo $mhs["email"] ; ?></td>
 			<td><?php echo $mhs["jurusan"] ; ?></td>
 		</tr>
 		<?php $i++; ?>
 	<?php endforeach; ?>
 	</table>
 </body>
 </html>