<?php
	$valor = 100;
	$desc = 0.9;
	do{
		$valor *= $desc;
	}while ($valor>100);
	echo $valor;
?>