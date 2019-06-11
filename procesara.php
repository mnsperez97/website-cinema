<?php 
$conexion = mysqli_connect("localhost","root","","peliculas");
$foto = $_FILES['foto'] ;
$carpeta = "imagen/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$result=mysqli_query($conexion,"SELECT * FROM peli");
if($re = mysqli_fetch_array($result)){
mysqli_query($conexion,"UPDATE peli SET 	titulo = '$_POST[titulo]',
											descripcion = '$_POST[descripcion]',
											foto = '$destino'
											WHERE titulo = '$_POST[titulo]'");

}header("Location:index.php");
 ?>