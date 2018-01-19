<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("picanteria");
	$c_platos = $mongo->selectCollection($db,"platos");

	$id = $_GET["id"];

	$condicion = array("_id" => new MongoId($id));
	if ($c_platos->count($condicion) == 1){
		$c_platos->remove($condicion);
	}
	
	header("Refresh: 0;url=index.php?mensaje=1");
?>
