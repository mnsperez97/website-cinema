<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilof.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="css/mi-slider.css">
    <link rel="stylesheet" type="text/css" href="themes/default/default.css">
    <meta charset="UTF-8">
    <title>Formulario de Actualizacion</title>
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
    </div>
              <?php 
    session_start();
    $conexion = mysqli_connect("localhost","root","","peliculas");?>
     
         <nav>
            <ul class="menu">
                <li><a href= "index.php">Inicio</a></li> 
          <?php   if(isset($_SESSION['username'])){         ?>        
                
                <li><a href="formulario.html">Agregar Pelicula</a></li>
                <li><a href="actualizar.php">Modificar Pelicula</a></li>
                <li><a href="eliminarm.php">Eliminar Pelicula</a></li>
                <li><a href="tabla.php">Registros en BD</a></li>
                <li><a href="destruirses.php">Cerrar Sesion</a></li>
                <?php } ?>
                </li>
            </ul>
        </nav>
    </header>

    <?php 
    $conexion = mysqli_connect("localhost","root","","peliculas");
    $sql= "SELECT * FROM peli WHERE titulo = '".$_POST['titulo']."'";
$result = mysqli_query($conexion,$sql);
  if(mysqli_num_rows($result) > 0){
      while ($Rs = mysqli_fetch_array($result)) {
  ?>
    <article>
    <form action="procesara.php" method="POST" id="act2" enctype="multipart/form-data">
        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" id="titulo" value = <?php echo$Rs['titulo'];?>>
        <label for="titulo">Foto</label><br>
        <input type="file" name="foto" id="foto" value = <?php echo$Rs['foto'];?>>
        <label for="cescripcion">Descripcion</label><br>
<textarea name="descripcion" id="descripcion" ><?php echo $Rs['descripcion'];?></textarea>
       <input type="submit" name="actualizar" value="Actualizar">
    </form></article>
    <?php 
    } }?>
    <aside id="act2">
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
