<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilof.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="css/mi-slider.css">
    <link rel="stylesheet" type="text/css" href="themes/default/default.css">
    <meta charset="UTF-8">
    <title>Modificar Datos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.nivo.slider.js"></script>
    
    <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script>
</head>
<body>
    <header>
    <div class="slider-wrap theme-mi-slider">
        <div id="slider" class="nivoSlider">     
            <img src="img/1.jpg" alt="" title="tu mejor cine" />    
            <img src="img/2.jpg" alt="" title="Para compartir y disfrutar" />    
            <img src="img/3.jpg" alt="" title="Te esperamos" />     
        </div> 
    
            <?php 
    session_start();
    $conexion = mysqli_connect("localhost","root","","peliculas");?>
     
      <nav>
            <ul class="menu">
                <li><a href= "index.php">Inicio</a></li> 
          <?php   if(isset($_SESSION['username'])){         ?>        
                
                <li><a href="formulario.php">Agregar Pelicula</a></li>
                <li><a href="actualizar.php">Modificar Pelicula</a></li>
                <li><a href="eliminarm.php">Eliminar Pelicula</a></li>
                <li><a href="tabla.php">Registros en BD</a></li>
                <li><a href="registrarad.php">Registro de Usuarios</a></li>
                <li><a href="destruirses.php">Cerrar Sesion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
	<article>
		<table class="tb1">
			<?php
				$conexion = mysqli_connect("localhost","root","","peliculas");
				$sql = "SELECT * FROM peli";
				$sql2 = mysqli_query($conexion,$sql);
				echo "<tr><th>Foto</th><th>Titulo</th><th>Descripcion</th><th>Opciones</th></tr>";
			while($res = mysqli_fetch_array($sql2))
			{
				echo "<tr>";
				echo "<td> <img src = ".$res['foto']."></td>";
				echo "<td>".$res['titulo']."</td>";
				echo "<td>".$res['descripcion']."</td>";?>
					  <td><a href = 'eliminarm.php'><img class="boton" src = imagen/eliminar.png></a> <a href = 'actualizar.php'><img  class="boton" src = imagen/actualizar.png><a href = 'formulario.html'><img  class="boton" src = imagen/agregar.png></td>
		<?php	echo "</tr>";
			}
			?>
		</table>
	</article>
	<aside>
        <h2>AQUI VA LA PUBLICIDAD</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </aside>
    <footer>Cine Center Copyright© 2018</footer>
</body>
</html>