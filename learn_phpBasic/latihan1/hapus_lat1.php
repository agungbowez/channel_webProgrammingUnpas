<?php 
require 'functions_lat1.php';

$id = $_GET["id"];

if(hapus($id) > 0){
	echo "<script>
					alert('data baerhasil dihapus');
					document.location.href= 'index_lat1.php';
			      </script>";
		}else{
			echo "<script>
					alert('data gagal dihapus');
					document.location.href = 'index_lat1.php'
				  </script>";
}

 ?>
