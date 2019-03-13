<?php

$arr = [1,3,5,3,6,4,6];

// Xuat mang
echo "Mảng ban đầu: " . "</br>";
foreach ($arr as $v){
	echo $v."\n";
}


// Thêm phần tử a
$a = 2;
echo "<br>" . "Thêm phần tử $a: \n" . "</br>";
array_push($arr, $a);
foreach ($arr as $v){
	echo $v."\n";
}

// Xóa phần tử n 
$n = 5;
echo "<br>" . "Xóa phần tử $n: \n" . "</br>";
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] == $n){
        unset($arr[$i]);
    }
}
// Xuất mản khi xóa phần tử n
foreach ($arr as $v){
	echo $v."\n";
}
// Sửa phần tử b
$c = 2;

echo "<br>" . "Sửa phần tử $c: \n" . "</br>";
array_splice($arr, 6, 1, 9);
// Xuất mản khi sửa phần tử b
foreach ($arr as $v){
	echo $v."\n";
}
// Sắp xếp tăng
sort($arr);
echo "<br>" . "Mảng được sắp xếp tăng dần: " . "</br>";
// Xuất mảng sau khi sắp xếp tăng
foreach ($arr as $v){
	echo $v."\n";
}

// Sắp xếp giảm
rsort($arr);
echo "<br>" . "Mảng được sắp xếp giảm dần: " . "</br>";
// Xuat mang sau khi sắp xếp giảm
foreach ($arr as $v){
	echo $v."\n";
}

?>
