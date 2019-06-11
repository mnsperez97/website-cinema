<?php 
$con= mysqli_connect("localhost","root","" ,"peliculas" );
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['apellido']) &&
isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw']) &&		
isset($_POST['pw2']) && !empty($_POST['pw2']) &&
isset($_POST['email']) && !empty($_POST['email']) &&
isset($_POST['tipou']) && !empty($_POST['tipou'])  &&
	$_POST['pw'] == $_POST['pw2'])

{


$res="INSERT INTO registro (nombre,apellido,user,pw,email,tipou)
			VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[user]','$_POST[pw]','$_POST[email]','$_POST[tipou]')";
			$res2 = mysqli_query($con,$res);
	echo "<script>alert('Usuario Registrado Exitosamente'); window.location.href='index.php';</script>";

}else{
	echo "<script>alert('Verifica que haya llenado los campos y las contraseñas coincidan'); window.location.href='index.php';</script>";
}
 ?>

