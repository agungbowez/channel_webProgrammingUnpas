<?php
// koneksi ke database 
$conn= mysqli_connect("localhost","root","","phpdasar"); 


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$nrp =htmlspecialchars( $data['nrp']);
	$nama = htmlspecialchars( $data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	
	// upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	// query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('','$nama','$nrp','$email','$jurusan','$gambar')
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);//jika tidak pakai return alertnya gagal tapi data tetap disimpan
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

function hapus($id){
	global $conn;

	$query = "DELETE FROM mahasiswa where id = $id";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
// htmlspecialchars untuk antisipasi serangan injek dari inputan user
	$id = $data["id"];
	$nrp =htmlspecialchars( $data['nrp']);
	$nama = htmlspecialchars( $data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	// cek apakah user pilih gambar baru
	if($_FILES['gambar']['error'] === 4 ){
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	// $gambar = htmlspecialchars($data['gambar']);

	// query insert data
	$query = "UPDATE mahasiswa SET 
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			   WHERE id = $id
			 ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa
				WHERE 
				nama LIKE '%$keyword%' OR 
				nrp LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR 
				jurusan LIKE '%$keyword%'
			 ";

	return query($query);
}

function registrasi($data){
	global $con;

	$username = strlower(stripslashes($data["username"]));//stslower untuk huruf kecil, striplesh untuk
	$password = mysqli_real_escape_string($data["password"]);
	$password2 = mysqli_real_escape_string($data["password2"]);//agar bisa input karakter back slash

	// cek konfirmasi passsword
	if($psassword !== $password2){
		echo "<script>
				alert('konfirmasi PASSWORD tidak sesuai')
			   </script>"
		return false;
	}
}
 ?>


