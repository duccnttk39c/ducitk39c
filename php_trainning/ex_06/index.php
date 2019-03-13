
<!DOCTYPE html>
<html>
<head>
	<title>Phân trang</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="?number=" method="GET">
		<h1>Phân trang</h1></br>
		<input type="number"name="number">
		<input type="submit" value="Kết quả">
	</form>
</body>
</html>
<?php 
	if(isset($_GET['number'])){	
		$n = $_GET['number'];
		$arr = array();
		$arr = range(1,100);
		$arrcon = array_chunk($arr, 10);
		$a = array_values($arrcon);
		print_r($a);
	}
?> 