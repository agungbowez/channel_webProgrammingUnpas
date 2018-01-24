<?php
//pertemuan 2 - php dasar
// sintak php

//Sintak Output
//echo, print echo"Sandikha Galih";
//var_dump untuk debugging

//penulisan sintak PHP
//1.PHP didalam HTML
//2.HTML didalam PHP

//variable dan tipe data
//variable diawali dengan tanda $
//tidak boleh diawali dengan angka
//kutip 2 untuk mencetak isi variable

//operator
//aritmatika
//= + - *
// $x = 10;
// $y = 11;
//echo $x * $y ;

//penggabungan string / concatenation / concat /.

$nama_depan="sandikha";
$nama_belakang="galih";
echo $nama_depan." ".$nama_belakang;

//operator assigment
//=, +=, -=, *=, /=, %=, .=
$x = 1;
$x -=5;
echo $x;

//perbandingan 
//<,>,<=,>=, ==

$nama= "Sandikha";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, /selamat datang <?php echo $nama; ?></h1>
</body>
</html>