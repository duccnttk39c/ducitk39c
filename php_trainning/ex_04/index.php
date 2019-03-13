<?php 
	$hang = '4';
	$cot = '4';
	$arr = array();
	echo "Bài 1: Random ngẫu nhiên" . "</br>";
	// Nhập - Xuất 
	for ($i = 0; $i < $hang; $i++) {
		for ($j = 0; $j < $cot; $j++) {
			$arr[$i][$j] = rand(0,9);
			echo $arr[$i][$j] . ' ';
		}
		echo "<br>";
	}
	$temp = 0;

	echo '</br>';
	echo 'Bài 2: Sắp xếp tăng dần từ 0 đến hàng x cột: ' . "</br>";
	for ($i = 0; $i < $hang; $i++) {
		for ($j = 0; $j < $cot; $j++) {
			$arr[$i][$j] = $temp;
			$temp++;
			echo $arr[$i][$j] . ' ';
		}
		echo "<br>";
	}
?>
