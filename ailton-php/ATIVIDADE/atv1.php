<?php
	$v = $_POST["valor"];
	if ($v > 10) echo "O valor é maior que 10";
	else echo "O valor é menor que 10";
	echo "<a href='formulario.php'>VOLTAR</a>";
?>