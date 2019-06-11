<?php 
session_start();
$conexion = mysqli_connect("localhost","root","","peliculas");
	
if(isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw'])){
$usuario = $_POST['user'];
$pass    = $_POST['pw'];
$tipo1   = 'administrador';
$tipo2   = 'usuario';
$sql = "SELECT * FROM registro WHERE user = '$usuario' AND pw = '$pass' ";
	$sql2 = mysqli_query($conexion,$sql);
	$sesion = mysqli_fetch_array($sql2);
	
	if($_POST['pw'] == $sesion['pw'] && $sesion['tipou'] == $tipo1){
			$_SESSION['username'] = $usuario;
			header("Location:loginadmi.php");

	}elseif($_POST['pw'] == $sesion['pw'] && $sesion['tipou'] == $tipo2){
			$_SESSION['username'] = $usuario;
			header("Location:usuario/index.php");

	}else{
		echo "<script>alert('combinacion erronea'); window.location.href='index.php';</script>";
		//header("Location:index.php");
		
	}
		
	
}else{

	echo "<script>alert('Debes llenar ambos campos'); window.location.href='ingreso.php';</script>";
	//header("Location:ingreso.php");
	
}

 ?>