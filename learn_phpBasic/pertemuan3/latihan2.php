<?php
// penhkondisian / percabangan
// if else
 // if else if else
// ternary
// switch

// $x = 20;
// if( $x < 20){
// 	echo "benar <br>";
// }else if( $x == 20){
// 	echo "bingo <br>";
// }

// else{
// 	echo "salah <br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan 3</title>
	<style>
		.warna-baris{
			background-color: silver;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for( $i = 1; $i<=5; $i++) : ?>
			<?php if( $i % 2 == 1) : ?>
				<tr class="warna-baris">
			<?php else : ?>
				<tr>
			<?php endif; ?>
			<?php for($j = 5; $j>= 1; $j--) : ?>
				<td><?php echo "$i,$j"; ?></td>
			<?php endfor; ?>
	    <?php endfor; ?>	
	</table>
	
</body>
</html>