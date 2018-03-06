<?php
	$pessoas = array();
	array_push($pessoas,array('nome' => 'joao' , 'idade' => 21));
	array_push($pessoas,array('nome' => 'thiago' , 'idade' => 17));
	echo json_encode($pessoas);
?>