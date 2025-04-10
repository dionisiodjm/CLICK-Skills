<?php 
	$valor = 83;
	if ($valor>=0 && $valor<=20) {
		echo "Valor E";
	} elseif ($valor>=21 && $valor<=40) {
		echo "Valor D";
	} elseif ($valor>=41 && $valor<=60) {
		echo "Valor C";
	} elseif ($valor>=61 && $valor<=80) {
		echo "Valor B";
	} elseif ($valor>=81 && $valor<=100) {
		echo "Valor A";
	} else {
		echo "<h3> Valor La Determina</h3>";
	}
 ?>