<!DOCTYPE html>
<html>
<head>
<?php
require 'header.php';
require_once ("../controllers/c.editar.php");
?>
<link rel="stylesheet" type="text/css" href="../public/css/default.css">

	<title></title>
</head>
<body>


	<div>
		<center>
			<label>CEDULA</label>
			<input type="text" value="" name="cedula">
				<label>NOMBRE</label>
			<input type="text" value="" name="nombre">
				<label>APELLIDO</label>
			<input type="text" value="" name="apellido">
				<label>DIRECCION</label>
			<input type="text" value="" name="direccion">
			<input type="submit" name="guardar" class="btn btn-primary" value="GUARDAR">
			<input type="submit" name="editar" class="btn btn-primary" value="EDITAR"><br><br>
		</center>
	</div>


</body>
<?php require 'footer.php';
?>
</html>