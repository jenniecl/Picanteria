<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <?php include('header.html');?>
<script src="funciones.js" language="JavaScript"></script>

</head>

<body>

  <section class="main">
    <div class="wrapp">
      <div class="mensaje">
        <h1> Gestión del Menú</h1>
      </div>
 
      <div class="articulo_ini">
        <article>
<br/><br/><h1 style="text-align: center;">Carta</h1><br/>


<center>
<table class="menu">
  
  <tr>
    <td bgcolor="#F5DA81">Nombre</td>
    <td bgcolor="#F5DA81">Tipo</td>
    <td bgcolor="#F5DA81">Precio</td>
    <td bgcolor="#F5DA81">Modificar</td>
    <td bgcolor="#F5DA81">Eliminar</td>
  </tr>

<?php
  $mongo = new Mongo();
  $db = $mongo->selectDB("picanteria");
  $c_platos = $mongo->selectCollection($db,"platos");

  if ($c_platos->count()>0)
            {
              $platos = $c_platos->find();
              foreach ($platos as $plato) {

  ?>
      <tr>
        <td><?php echo $plato["nombre"];?></td>
        <td><?php echo $plato["tipo"];?></td>
        <td>S/.<?php echo $plato["precio"];?>.00</td>
        <td> <a href="edit_int.php?id=<?php echo $plato['_id'] ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Modificar </td>
        <td> <a href="delete.php?id=<?php echo $plato['_id'] ?>" class="btn btn-warning"><i class="icon-remove icon-white"></i> Eliminar </td>
      </tr>
    <?php
            }
          }else{
    ?>
    <tr>
          <td colspan="4"><h4><i class="icon-info-sign"></i> No hay Menú que mostrar</h4></td>
        </tr>
        <?php } ?>


</table>
</center>



</br> </br> </br> 

<h1> Añadir Platos</h1>
<?php
      error_reporting(0);
      $mensaje = $_GET["mensaje"];
      if ($mensaje == 1) {
        echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El Plato fue eliminado.</p><br><br>";
      }
      if ($mensaje == 2) {
        echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El Plato fue creado.</p><br><br>";
      }
      if ($mensaje == 3) {
        echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El plato fue modificado.</p><br><br>";
      }
    ?>
    <form class="form-horizontal" action="add.php" method="post">
        <div class="control-group">
          <label class="control-label" for="inputNamePlato">Nombre: &nbsp;&nbsp; </label>
          <div class="controls">
              <input type="text" name="namePlato" id="inputNamePlato" class="input-xlarge" placeholder="Nombre del Plato"/>
          </div>
        </div>
    
        <div class="control-group">
          <label class="control-label" for="inputTipo">Tipo:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; </label>
          <div class="controls">
              <input  type="text" name="tipo" rows="6" class="input-xlarge" placeholder="Tipo de Plato"></input >
          </div>
        </div>

        
        <div class="control-group">
          <label class="control-label" for="inputPrecio">Precio: &nbsp;&nbsp;  &nbsp; </label>
          <div class="controls">
              <input  name="precio" rows="6" class="input-xlarge" placeholder="Precio del Plato"></input >
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
              <button type="submit" class="btn btn-large btn-primary"><i class="icon-book icon-white"></i> Guardar</button>
          </div>
        </div>
    </form>



</br> </br> </br> 

<center><a href="#"><img src="img/triple.jpg" WIDTH=500 alt="triple"></a></center>
<br/>
<br/>
<h1 style="text-align: center;">Paquetes Especiales</h1>
<div style="text-align: center;">
    <ul>
      <li><a id="enlace1" href="paquetes.php?cod=1">Cumpleaños</a></li>
      <li><a id="enlace2" href="paquetes.php?cod=2">Aniversario</a></li>
      <li><a id="enlace3" href="paquetes.php?cod=3">Reencuentro</a></li>
      <li><a id="enlace4" href="paquetes.php?cod=4">Empresas</a></li>
    </ul>
</div>

<br/>
<div style="text-align: center;" id="detalles">Seleccione el paquete que le interesa.</div>



<p style="text-align: center;"> </br>  *Los platos se encuentran disponibles desde el medio dia (12:00 p.m.) </p>
        </article>
      </div>
 



    </div>
  </section>
  </body>
<footer>
<?php include('footer.html');?>

</footer>
</html>
