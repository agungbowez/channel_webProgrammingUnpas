<?php
 require 'functions.php';
 $mahasiswa = query("SELECT * FROM mahasiswa");//query adalah function
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>halaman admin</title>
</head>
<body>
	<h1>Daftar mahasiswa</h1>
	<table border="1" cellspadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nip</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
<?php $i=1; ?>
	<?php  foreach ($mahasiswa as $mhs) : ?>
		<tr>
		
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a>
				<a href="">Hapus</a>
			</td>
			<td><img src="../images/<?php echo $mhs["gambar"] ; ?>" width="50" alt=""></td>
			<td><?php echo $mhs["nrp"] ;?></td>
			<td><?php echo $mhs["nama"] ; ?></td>
			<td><?php echo $mhs["email"] ; ?></td>
			<td><?php echo $mhs ["jurusan"] ; ?></td>
		</tr>
<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</body>
</html>