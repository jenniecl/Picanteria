<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("picanteria");
	$c_platos = $mongo->selectCollection($db,"platos");

	$id = $_POST['id'];
	$namePlato = $_POST['namePlato'];
	$tipo = $_POST["tipo"];
	$id = $_POST["id"];
	$precio = $_POST['precio'];

	$condicion = array("_id" => new MongoId($id));
	$modPlato = array("nombre"=>$namePlato, "tipo"=>$tipo, "precio"=>$precio);
	$c_platos->update($condicion, $modPlato);

	header("Refresh: 0;url=index.php?mensaje=3")
?>
