<?php
// koneksi ke database 
$conn= mysqli_connect("localhost","root","","phpdasar"); 

// ambil data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
	// var_dump($result);
	// if(!$result){
	// 	echo mysqli_error($conn);

// ambil data (fetch) mahasiswa dari object resault
// mysqli_fetch_row() // array numeric
// mysqli_fetch_assoc() //array assosiative
// mysqli_fetch_array() //bisa array numeric dan assosiative
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
 //while ($mhs = mysqli_fetch_assoc($result) ){
// // $mhs = mysqli_fetch_array$result);
// // $mhs = mysqli_fetch_object($result);

 //var_dump($mhs);//[isinya]
 //}
	
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
<?php  while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
		
			<td><?php echo $i; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td><img src="../images/<?php echo $row["gambar"] ; ?>" width="50" alt=""></td>
			<td><?php echo $row["nrp"] ;?></td>
			<td><?php echo $row["nama"] ; ?></td>
			<td><?php echo $row["email"] ; ?></td>
			<td><?php echo $row ["jurusan"] ; ?></td>
		</tr>
		<?php $i++; ?>
<?php endwhile; ?>
	</table>
</body>
</html>