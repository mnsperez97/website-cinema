<?php
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_FILES['foto'] ;
$carpeta = "imagen/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$conexion = mysqli_connect("localhost", "root", "","peliculas");
$sql = "INSERT INTO peli(titulo,descripcion,foto) VALUES('$titulo','$descripcion','$destino')";
$con = mysqli_query($conexion,$sql);
header("location:index.php");

?>