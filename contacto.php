<html>
<head>
  <?php include('header.html');?>
  <script src="funciones.js" language="JavaScript"></script>
  <script type="text/javascript" ></script>
</head>

<body>
  <section class="main">
    <div class="wrapp">
      <div class="mensaje">
        <h1>Reservaciones</h1>
      </div>
      <div class="articulo">
        <form method="post" action="enviar_mail.php">
          <fieldset>
          <legend> Información Requerida </legend>

          <div>
          <label for="nombre">Nombre: </label>
          <input type="text" name="nombre" id="nombre">
          <img src = "img/excl.gif" alt="" height ="15" onmouseover="mostrar(this)" onmouseout="ocultar(this)"/>
          <span class="tooltip"> Nombres y apellidos</span>
          </div>

          <div>
          <label for="apellidos">Email: </label>
          <input type="text" name="email1" id="email1" />
          <img src = "img/excl.gif" alt="" height ="15" onmouseover="mostrar(this)" onmouseout="ocultar(this)"/>
          <span class="tooltip"> El que usas con más frecuencia</span>
          </div>

          <div>
          <label for="apellidos">Telefono: </label>
          <input type="text" name="telefono" id="telefono" />
          </div>

          <div>
          <label for="apellidos">Nro Personas: </label>
          <input type="text" name="personas" id="personas" />
          </div>

          <div>
          <label for="apellidos">Tipo de evento: </label>
          <select name="conocio" id="conocio">
            <option selected="selected"></option>
            <option>Corporativo</option>
            <option>Cumplea&ntildeos</option>
            <option>Bodas</option>
            <option>Aniversario</option>
          </select>
          </div>

          <div>
          <label for="platos">Platos : </label>

          <input name="cbipeliculas" type="checkbox" /> Platos de fondo
          <input name="cbipeliculas" type="checkbox" /> Piqueos
          <input name="cbipeliculas" type="checkbox" /> Entrada
          <input name="cbipeliculas" type="checkbox" /> Bebidas
          <img src = "img/excl.gif" alt="" height ="15" onmouseover="mostrar(this)" onmouseout="ocultar(this)"/>
          <span class="tooltip"> ¡Elige todos los que quieras!</span>
          </div>

          </form>
          <form>
            <div>
              <label for="invitados">Invitados : </label>
              <input type="text" id="nuevo_li"</label>
              <input type="submit" name="boton2" onclick="return add_li()" value="añadir li">
              <img src = "img/excl.gif" alt="" height ="15" onmouseover="mostrar(this)" onmouseout="ocultar(this)"/>
              <span class="tooltip">Usa la X para borrar un nombre</span>
              <ul id='listaDesordenada'></ul>
            </div>
          </form>
          <form method="post" action="enviar_mail.php">
          <div><br>
          <input type="submit" name="boton1" class="button" value="Enviar" />
          <input type="reset" class="button" value="Restablecer" /><br><br>
          </div>
          </fieldset>
        </form>
      </div>
    </div>
  </section>

  <?php include('footer.html');?>
</body>
</html>
