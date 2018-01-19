<?php
	$mongo = new Mongo();
	$db = $mongo->selectDB("picanteria");
	$c_platos = $mongo->selectCollection("picanteria","platos");
	
	$namePlato = $_POST["namePlato"];
	$tipo = $_POST["tipo"];
	$precio = $_POST["precio"];

	$nuevoPlato = array("nombre"=>$namePlato,"tipo"=>$tipo,"precio"=>$precio);
	$c_platos->insert($nuevoPlato);

	header("Refresh: 0;url=index.php?mensaje=2")
?>
