<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="../css/mi-slider.css">
    <link rel="stylesheet" type="text/css" href="../themes/default/default.css">
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery.nivo.slider.js"></script>
    
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
            <img src="../img/1.jpg" alt="" title="tu mejor cine" />    
            <img src="../img/2.jpg" alt="" title="Para compartir y disfrutar" />    
            <img src="../img/3.jpg" alt="" title="Te esperamos" />     
        </div> 
         <nav>
            <ul class="menu">
                <li><a href= "index.php">Inicio</a></li> 
                <li><a href="compras.php">Comprar Pelicula</a></li>
                <li><a href="destruirses.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
   
    <div class = "container">
    <?php

        $conexion = mysqli_connect("localhost", "root", "", "peliculas");
        $res = "SELECT * from peli ORDER BY id";
        $res2 = mysqli_query($conexion, $res);

            while($res3 = mysqli_fetch_array($res2)){?>
               <div class = "card">
              <?php echo"<h4>".$res3['titulo']."</h4>"; ?>  
              <?php echo '<img src ="../'.$res3['foto'].'" >'; ?>
              <?php echo "<p>".$res3['descripcion']."</p>";?>
               </div>
    <?php   }?>
    </div>
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
    <script type="text/javascript">alert("Bienvenido Usuario" );</script>
</body>
</html>