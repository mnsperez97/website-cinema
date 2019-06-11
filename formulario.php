<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilof.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="css/mi-slider.css">
    <link rel="stylesheet" type="text/css" href="themes/default/default.css">
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<form action="procesar.php" method="post" enctype="multipart/form-data">
		<label for="tit">Titulo:</label>
		<input type="text" name="titulo" id="tit" placeholder="Escribe el título"><br>
		<label for="fo">Foto:</label>
		<input type="file" name="foto" id="fo"><br>
		<label for="des">Descripcion:</label>
		<textarea id="des" name="descripcion" placeholder="Escribe la descripción"></textarea><br>
		<input type="submit"  name="Enviar class="btn btn-success"">
	</form></article>
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