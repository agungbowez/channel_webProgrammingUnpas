<?php 
	// koneksi
	$con = mysqli_connect("localhost","root","","phpdasar");

	function tampilData($query){
		global $con;

		$result = mysqli_query($con,$query);
		$rows = [];

		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
function tambah($inputan){
	global $con;

	$nama = htmlspecialchars($inputan["nama"]);
	$nrp = htmlspecialchars($inputan["nrp"]);
	$email = htmlspecialchars($inputan["email"]);
	$jurusan = htmlspecialchars($inputan["jurusan"]);
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO mahasiswa
			  VALUES 
			  ('','$nama','$nrp','$email','$jurusan','$gambar')
			   ";

	mysqli_query($con,$query);

	return mysqli_affected_rows($con);
}

function hapus($id){
	global $con;

	$mahasiswa = "DELETE FROM mahasiswa WHERE id=$id";

	mysqli_query($con,$mahasiswa);

	return mysqli_affected_rows($con);
}


function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload
	if($error === 4){
		echo "<script>
				alert('pilih gambar terlebih dulu');
			  </script>";

		return false;
	}

	// cek apakah yang si uploaded adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower( end($ekstensiGambar) );
	if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
		echo "<script>
			  alert('yang anda upload bukan gambar');
			  </script>";
			  return false;
	}

	// cek jika ukuran gambar terlalu besar
	if($ukuranFile > 1000000){
		echo "<script>
			  alert('ukuran gambar terlalu besar');
			  </script>";
			  return false;
	}
 
	// lolos pengecekan, gambar akan di uploaded
	// generate nama gambar baru agar tidak ada nama yg sama antar usser
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	  // var_dump($namaFileBaru);die;
	move_uploaded_file($tmpName, '../images/' . $namaFileBaru);
	return $namaFileBaru;

}


?>