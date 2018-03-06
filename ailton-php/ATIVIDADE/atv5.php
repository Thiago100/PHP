<?php
	$a = $_POST["a"];
	$b = $_POST["b"];
	if($a > $b) {
		echo $b;
		echo " ";
		echo $a;
	}
	else echo $a."<".$b;
?>