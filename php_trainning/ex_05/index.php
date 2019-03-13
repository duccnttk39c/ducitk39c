<?php 
	$n = 5;
	$file = "temp.txt";
	$rs = ' ';
	$rtxt ="";
	for ($i = 1; $i <= $n; $i++) {
		$spacers1 = str_repeat("&nbsp;&nbsp;", $n-$i);
		$spacers = str_repeat(" ", $n-$i);
		$str = str_repeat("*", $i*2 - 1);
		$rs = $spacers . $str;
		$rs1 = $spacers1 . $str . "</br>";
		$rtxt .= "\n". $rs;
		
		echo $rs1;
	}
	file_put_contents($file, $rtxt);
?>
<a href="temp.txt" title="">File txt</a>