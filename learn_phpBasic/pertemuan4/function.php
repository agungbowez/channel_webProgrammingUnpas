<?php
// fuction buatan sendiri

// function salam($nama){
// 	return "selamat datang, $nama";
// }
date_default_timezone_set("Asia/Jakarta");
$b = time();
$hour = date("G",$b);
echo $hour;
// if ($hour >= 0 && $hour <= 11){
// 	echo "selamat pagi :)";
// }

// else if($hour >= 12 && $hour <= 14){
// 	echo "selamat siang :)";
// }

// else if($hour >= 15 && $hour <= 17){
// 	echo "selamat sore :)";
// }

// else if($hour >= 17 && $hour <= 18){
// 	echo "selamat petang :)";
// }

// else if($hour >= 19 && $hour <= 23){
// 	echo "selamat malam :)";
// }
 ?>
<!-- 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>lat function</title>
 </head>
 <body>
 <h1><?php echo salam("agung"); ?></h1>
 	
 </body>
 </html> -->