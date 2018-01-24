<?php
// koneksi ke database 
$conn= mysqli_connect("localhost","root","","phpdasar"); 


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = []; //untuk menampung objek
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


 ?>