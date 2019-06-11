<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilof.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="css/mi-slider.css">
    <link rel="stylesheet" type="text/css" href="themes/default/default.css">
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
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
    
          <nav>
           <ul class="menu">
                <li><a href= "index.php">Inicio</a></li>             
                <li><a href="ingreso.php">Iniciar Sesion</a></li>
                <li><a href="registrar.php">Registro de Usuario</a></li>
            </ul>
        </nav>
    </header>
    <article>
<form action="registro.php" method="post">
 <h2 align="center">Registrar Usuario</h2>
		<LABEL id = "nombre" >NOMBRE:</LABEL>
		<input type="text" name="nombre" id= "nombre" required placeholder="Nombre"><br>
		<label id="apellido">APELLIDO:</label>
		<input type="text" name="apellido" id= "apellido" required placeholder="Apellido"><br>
		<label id="user" >USUARIO:</label>
		<input type="text" name="user" id= "user" required placeholder="Usuario"><br>
		<label id="pw">CONTRASEÑA:</label>
		<input type="password" name="pw" id= "pw" required placeholder="Contraseña"><br>
		<label id="pw2">CONFIRMAR:</label>
		<input type="password" name="pw2" id= "pw2" required placeholder="Confirmar contraseña"><br>
		<label id="email">CORREO:</label>
		<input type="email" name="email" id= "email" required placeholder="Correo @"><br>
        <label id ="tipou">Tipo de Cuenta:</label>
        <select id="tipou" name = "tipou" >
            <option name ="usuario" >usuario</option>
        </select> <br><br>
		<input type="submit" value="Registrar" class="btn btn-success" name="btn">
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