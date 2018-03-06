<?php
	$v = $_POST["valor"];
	if($v > 0) echo "Valor Positivo";
	else if($v < 0) echo "Valor Negativo";
	else echo "Igual a Zero";
	echo "<a href='formulario.php'>VOLTAR</a>";
?>