<!DOCTYPE html>
<html>            <!---Template HTML --------->
  <head>
    <title>Mostrar informacion en la bd</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="icono.ico" />
  </head>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      <div class="row main-container middle-xs center-xs">
    		<div class="col-md-8 col-sm-10 col-xs-11">
    			<div class="box">
    				<div class="card animated slideInDown">
    					<header class="main-header">
    						<nav class="main-nav">
    							<p class="ubuntu-textW">TABLA DE INFORMACIÓN</p>
    						</nav>
    					</header>
    					<article class="body">
    						<header class="text-center">
                  <div class="tableCenter">
                    <?php
                      $usuario = "id11031570_root";
                      $contraseña = "0okmju7";
                      $servidor = "localhost";
                      $baseDeDatos = "id11031570_web";

                      $conexion = mysqli_connect($servidor, $usuario, "0okmju7") or die ("Error 0");

                      $bd = mysqli_select_db($conexion, $baseDeDatos) or die ("no se pudo conectar con la BD");

                      $consulta = 'SELECT * FROM persona';

                      $resultado = mysqli_query($conexion, $consulta) or die ("Error en consultar datos.");

                      echo "<table border = 1>";
                      echo "<tr>";
                      echo "<td>ID</td>";
                      echo "<td>NOMBRE</td>";
                      echo "<td>APELLIDO</td>";
                      echo "</tr>";

                      while($columna = mysqli_fetch_array($resultado)){
                          echo "<tr>";
                          echo "<td>" . $columna['id_persona'] . "</td> <td>" . $columna['nombre'] . "</td> <td>" . $columna['apellido'] . "</td>";
                          echo "</tr>";
                      }
                    ?>
                 </div>
    						</header>
    					</article>
    				</div>
    			</div>
    		</div>
    	</div>
                                    <!--   PHP   -->

    </form>
  </body>
</html>
