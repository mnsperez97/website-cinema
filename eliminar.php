<?php
	$conexion = mysqli_connect("localhost", "root", "", "peliculas");
	$reg = mysqli_query($conexion,"SELECT id FROM peli WHERE titulo = '$_POST[titulo]'");
	if($re = mysqli_fetch_array($reg)){
		mysqli_query($conexion,"DELETE FROM peli WHERE titulo = '$_POST[titulo]'"); 
		echo "<script>alert('Usuario Registrado Exitosamente'); window.location.href='index.php';</script>";
	}else{
		echo "No se pueden eliminar los datos";
	}
	
	
?>