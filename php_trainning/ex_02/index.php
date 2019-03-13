<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Demo PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="POST"> 
			<h1>Bài tập lập trình cơ bản với PHP</h1>
			<h2>Bài 2</h2>
			<p>Sắp xếp tăng dần, giảm dần N phân tử</p>
			<p><strong>Input:</strong> N = {6, 8, 3, 1, 2}</br> <strong>Output:</strong> 1 2 3 6 8</p>
			<p><strong>Input:</strong> N = {1, 10, 3, 9, 8}</br> <strong>Output:</strong> 10 9 8 3 1</p>
			Nhập số N <input type="text" name="number" value=""></br></br>
			Nhập phần tử <input type="number" name="nb">
			<input type="submit" value="Kết quả">
	</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){	
	$number = $_POST['number'];
	$nb = $_POST['nb'];
	$tach = explode(',', $number);
	
	function Them($tach, $nb) {
		$add = array_push($tach, $nb);
		print_r($tach);
	}

	function Sap_Xep_Tang($tach) {
		$sophantu = count($tach);
		for ($i=0; $i < $sophantu; $i++) { 
			for ($j=$i+1; $j < $sophantu; $j++) { 
				if ($tach[$i] > $tach[$j]) {
					// Hoán vị
					$temp = $tach[$i];
					$tach[$i] = $tach[$j];
					$tach[$j] = $temp;
				}
			}
		}
		return $tach;
	}
	/*// Cách 1
	function Sap_Xep_Giam($tach) {
		arsort($tach);
		foreach ($tach as $key => $value) {
			echo $value . " ";
		}
	}*/
	function Sap_Xep_Giam($tach) {
		$sophantu = count($tach);
		for ($i=0; $i < $sophantu; $i++) { 
			for ($j=$i+1; $j < $sophantu; $j++) { 
				if ($tach[$i] < $tach[$j]) {
					// Hoán vị
					$temp = $tach[$i];
					$tach[$i] = $tach[$j];
					$tach[$j] = $temp;
				}
			}
		}
		return $tach;
	}
	// Hàm xuất ra màn hình
	function Xuat_Ra($tach)
	{
		$sophantu = count($tach);
	    for ($i = 0; $i < $sophantu; $i++){
	        echo $tach[$i] . ' ';
	    }
	}
	echo "</br>";
	// Sắp xếp tăng
	$n1 = Sap_Xep_Tang($tach);
	echo 'Dãy sắp xếp tăng dần: ';
	Xuat_Ra($n1);
	echo "</br>";
	// Sắp xếp giảm
	$n1 = Sap_Xep_Giam($tach);
	// Xuất ra màn hình
	echo 'Dãy sắp xếp giảm dần: ';
	Xuat_Ra($n1);
}
?>