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
<article>
<?php
$Dia=$_POST['dia'];
$pelicula=$_POST['pelicula'];
$hora=$_POST['hora'];
$tipoboleto=$_POST['boleto'];
$censura=$_POST['censura'];
$sala=$_POST['sala'];
$costo=$_POST['costo'];

if($Dia == "lunes"){
	if($tipoboleto == "adulto"){$costo = $costo/2;}
    if($tipoboleto == "nino"){$costo = 0;}
    if($tipoboleto == "familiar"){$costo = $costo - ($costo*0.10);}
}

if($Dia == "viernes"){$costo = $costo/2;}

if ($tipoboleto=="nino" and $censura=="c" or $hora == "7:00" and $tipoboleto == "nino")
{	
	echo '<section id = "pagos">';
	echo "<form>";
    echo "<fieldset id = 'pagos'>";
    echo "<center>no emitir boleto</center>";
	echo "</fieldset>";
	echo "</form>";
	echo "</section>";
}

else  {
	echo "<section id = 'pagos'>";
	echo "<form [id = 'pagos']>";
	echo "<table align=center>";
    echo "<tr><td>";
    echo "<fieldset id = 'pagos'>";
    echo "<h2 align='center'> Disfrute de su Funcion</h2>";
	echo " <p id='pagos'>El dia es = ".$Dia;
	echo "<br>";
	echo " La pelicula es = ".$pelicula;
	echo "<br>";
	echo " La hora  es = ".$hora;
	echo "<br>";
	echo " Tipo de boleto  = ".$tipoboleto;
	echo "<br>";
	echo " Censura = ".$censura;
	echo "<br>";
	echo "La sala es = ".$sala;
	echo "<br>";
	echo " El costo es = ".$costo;
	echo "</p><br>";
	echo "</fieldset>";
	echo "</td></tr>";
	echo "</table>";
	echo "</form>";
	echo "</section>";

}

?>
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
