 <?php  
// 	// cara membuat array
// 	// cara lama 
// 	$i = array("senin","selasa","rabu",);
// 	// cara baru 
// 	$j = ["januari","febuari","maret"];
// 	var_dump($i);

 // array multi dimensi
 // $i = [
 // 		["agung","1805","teknik"],
 // 		["jono","1200","ekonomi"]
 // ];
// echo $i[0][0];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan 1</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: salmon;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			
		}
		.clear{
			clear:both;
		}
	</style>
</head>
<body>

<?php 
	$angka = [[1,2,3],[4,5,6]];
 ?>

 <?php foreach ($angka as $a ) : ?>
 	<?php foreach ($a as $b ) : ?>
	<div class="kotak"><?= $b; ?></div>
<?php endforeach; ?>
<div class="clear"></div>
<?php endforeach; ?>

</body>
</html>
