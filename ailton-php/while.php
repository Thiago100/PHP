<?php
	$cond = true;
	while($cond){
		$num = rand(1 , 10);
		if($num === 3){ 
			echo "TRES";
			break;
		}
		echo $num." , ";
	}
?>