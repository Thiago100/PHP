<?php
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];
	$d = $_POST["d"];
	if($a + $c > $b * $d) echo "A+C é maior que B+D";
	else if ($a + $c < $b * $d) echo "A+C é menor que B+D";
	else echo "A+C é igual que B+D"; 
?>