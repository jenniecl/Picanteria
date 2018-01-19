<?php
$accesos=1;

if (isset ($_COOKIE['numero_accesos'])) {
	$accesos = $_COOKIE['numero_accesos'] + 1;
}

setcookie ("numero_accesos", $accesos, time()+3600);

	if ($accesos > 1)
		echo "Esta es la <B>$accesos </B> vez que nos visitas!";
	else
		echo "Bienvenido a la página web";

?>
