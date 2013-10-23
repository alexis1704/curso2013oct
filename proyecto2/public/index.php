<?php

$filas = 4;
$columnas = 4;

echo "<table border='1'>";
for($i = 0 ; $i <= $filas; $i++){
	echo "<tr>";
		for($j = 0; $j <= $columnas; $j++){
			if($i == 0){
				$num = "";			
				if($j != 0) $num = $j;
				echo "<td>".$num."</td>";
			}else if($j == 0){
				echo "<td>".$i."</td>";
			}else{
				echo "<td>".$i*$j."</td>";
			}
		}
	echo "</tr>";
}
echo "</table>";