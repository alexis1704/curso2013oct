<?php

echo "<b>COMBINATORIA</b>";
echo "<br/>";

/*
 * Si se seleccionan cinco cartas de un grupo de nueve, ¿cuantas combinaciones de cinco cartas habría?
 */

echo getCombinatoria(9,5);

function getCombinatoria($n,$r){
	
	$comb = factorial($n)/(factorial($r)*factorial($n-$r));
	
	
	return $comb;
}

function factorial($n){
	if ($n==1) return 1;
	else return $n * factorial($n-1);
}

