 <html>
 <head>
 <?php include('header.html');?>
</head>
<body>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Reservaciones</h1>
			</div>
 
<?php  

        echo "<img src='img/enviado.png' alt='texto alternativo' width='150' height='100' />";
        if( php_sapi_name() !== '')/*if(session_id() == '')*/ 
        {
            function recogeDato($campo)
            { 
                return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
            } 

            $email1    = recogeDato('email1');
            $email2    = recogeDato('email2'); 
            $consulta  = recogeDato('consulta');
            $nombre    = recogeDato('nombre');
            $conocio   = recogeDato('conocio');
            $referente = recogeDato('referente');
            $algunerror = FALSE;

            if($email1=='')
            { 
                $algunerror = TRUE; 
                echo "<p class=\"erroneo\">No has introducido tu eMail</p>\n";
            } 
            elseif($email1!=$email2)
            { 
                $algunerror = TRUE;
                echo "Estimado, " .  $_POST ['nombre'] ."</b></br> No podremos comunicarnos en este momento por:<BR>";
                echo "<p class=\"erroneo\">Los Emails introducidos no coinciden.</p>\n";
            }
            if($nombre=='')
            { 
                $algunerror = TRUE;
                echo "<p class=\"erroneo\">No has introducido tu nombre.</p>\n";
            }
            if($consulta=='')
            { 
                $algunerror = TRUE;
                echo "<p class=\"erroneo\">El area de la consulta no puede quedar en blanco.</p>\n";
            }
            if ($algunerror)
            { 
                echo "<p>&nbsp;</p>\n"; //si los hay, se lo indicamos al usuario
                echo "<p>No se ha podido enviar el mensaje por los errores que se detallan arriba.</p>\n";
                echo "<p>Por favor, vuelve a rellenar el formulario.</p>\n";
                echo "<p class=\"centrado\"><a href=\"contacto.php\">
                </br>Volver al formulario</a></p>\n";
            }
            else
            {
                $para="ejemplo.aulaclic@gmail.com"; 
                $asunto="Contacto web Flores - consulta sobre ".$referente;
                $mensaje="Datos del formulario de contacto:\n". 
                "Nombre: ".$nombre." \n".
                "eMail:  ".$email1."\n".
                "Nos conocio por: ".$conocio." \n".
                "Pregunta: ".$consulta;
                mail($para, $asunto, $mensaje);
                echo "Gracias:  " .  $_POST ['nombre'] ."</b></br> Su registro es satisfactorio<BR><BR>";
                echo "<p>Tu mensaje se ha enviado correctamente.</p>\n";
                echo "<p>Nos pondremos en contacto lo antes posible.</p>\n";
            }
                           
        }

        else
        {
            ?>
            <script> alert('Necesitas logearte para poder realizar una reserva' ) </script> <?php
            echo "<p class=\"erroneo\">No te has logeado!</p>\n";
        }
        

        
    

?>
</section>
<?php include('footer.html');?>
</body>
</html>
