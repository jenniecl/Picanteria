<?php 
	$mongo = new Mongo();
	$db = $mongo->selectDB("picanteria");
	$c_platos = $mongo->selectCollection($db,"platos");

?>
