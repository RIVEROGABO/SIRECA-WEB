<?php
$usuario     = $_POST['username'];
$contraseña = $_POST['password'];
session_start();
$_SESSION["username"] = $usuario;
include ('config.php');

$consulta  = "SELECT * FROM users WHERE username='$usuario' and password='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$filas     = mysqli_num_rows($resultado);
if ($filas) {
	header("location: home.php");
} else {
	?>
		<?php

	?>
	<h1>ERROR EN LA AUTENTICACION</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
