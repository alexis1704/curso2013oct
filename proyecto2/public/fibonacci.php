<?php
/*echo "F = 0,";
$n1 = 1;
$n2 = 0;
$a = 36;
for($i = 0; $i <= $a; $i++){
		$suma = $n1+$n2;
		$n1 = $n2;
		$n2 = $suma;
		//echo $suma . ",";
}*/


echo "F = 0,1,";

$a = 36;
$num = 0;
$num1 = 1;

$f = $num+$num1;

while($f<=$a){
	echo $f.",";
	$num = $num1;
	$num1 = $f;
	$f = $num+$num1;
}