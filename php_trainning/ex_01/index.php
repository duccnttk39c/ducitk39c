<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Demo PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="POST"> 
			<h1>Bài tập lập trình cơ bản với PHP</h1>
			<h2>Bài 1</h2>
			<p>Viết chương trình tính xuất ra dãy fibonaci</p>
			<p>F(n) = F(n-1) + F(n-2)</p>
			Nhập số N <input type="number" name="number">
			<input type="submit" value="Kết quả">
	</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){	
	$number = $_POST['number'];
	function fibonaci($number) {
		$f0 = 0;
		$f1 = 1;
		$fn = 1;
		if($number < 0) {
			return -1;
		} elseif ($number == 0 || $number == 1) {
			return $number;
		} else {
			for ($i=2; $i < $number ; $i++) { 
				$f0 = $f1;
				$f1 = $fn;
				$fn = $f0 + $f1;
			}
		}
		return $fn;
	}
	echo '</br>';
	echo 'Xuất ra ' . $number . ' số đầu của dãy Fibonaci: ';
	for ($i = 0; $i < $number; $i++) { 
		echo (fibonaci($i) . " ");
	}
}
?>