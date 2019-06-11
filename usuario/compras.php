<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/estilof.css">
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
<article id="form">
<form name="form1"  action="pagos.php" method="post" id="form">
<fieldset id = 'form'>
	<h2 align=center> BIENVENIDO USUARIO</h2>
	<label>Dia</label> 
    <select name="dia">
    <option>lunes</option>
    <option>martes</option>
    <option>miercoles</option>
    <option>jueves</option>
    <option>viernes</option>
    <option>sabado</option>
    <option>domingo</option>
    </select><br><br>
    <label>Pelicula</label>
    <select name="pelicula">
    <?php  
    $conexion = mysqli_connect("localhost","root","","peliculas");
    $sql = "SELECT titulo FROM peli ORDER BY titulo ";
    $result = mysqli_query($conexion,$sql);
    while($row = mysqli_fetch_array($result)) {
        echo "<option>".$row["titulo"]; }
     ?>
    </select><br><br>
    <label>Hora</label>
    <select name="hora">
    <option>12:30</option>
    <option>3:40</option>
    <option>5:40</option>
    <option>7:00</option>
    </select><br><br>
    <label>Tipo Boleto</label>
    <select name="boleto">
    <option>nino</option>
    <option>familiar</option>
    <option>adulto</option>
    </select><br><br>
    <LABEL>Censura</LABEL>
    <select name="censura">
    <option>a</option>
    <option>b</option>
    <option>c</option>
    </select><br><br>
    <label>Sala</label>
    <select name="sala">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    </select><br><br>
    <label>Puesto</label> 
    <select name="puesto">
        <option>A1</option>
        <option>B1</option>
        <option>A2</option>
        <option>B2</option>
        <option>C1</option>
        <option>C2</option>
        <option>D1</option>
        <option>D2</option>
    </select><br><br>
    costo:&nbsp;<input type ="number" name="costo"/><br> 
	<center><input type="submit" value="Enviar"></center>
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
