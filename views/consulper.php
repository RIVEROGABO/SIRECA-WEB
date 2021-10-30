<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
require '../views/header.php';
require_once ("../controllers/c.consulper.php");

?>
<link rel="stylesheet" href="../public/css/default.css">



<style>

h1 {
	font-size: 22px;
	font-family: 'Source Sans Pro', sans-serif;
	text-decoration: underline;
	margin: 0px 0px;
}

p {
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 16px;
	margin-bottom: 0px;
}
a {
  color: #333;
  text-decoration: none;
  font-family: 'Source Sans Pro', sans-serif;
}
label {
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 16px;
	margin-bottom: 0px;
	font-weight: bold;
}

input[type=text], input[type=tel], input[type=email] {
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    margin-top: 10px;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
    background-color: #333;
}

footer {
  position: fixed;
  width: 100%;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 10px 0px 10px 0px;
  background-color: #333;
  text-align: center;
}
footer a {
  color: #fff;
}

</style>
</head>

</head>
<body>
	<form action="" method="post">

	<div >
		<table  border="1">

			<tr>
				<th class="column100 column"> <center>CEDULA</center> </th>
				<th class="column100 column"> <center>NOMBRE</center> </th>
				<th class="column100 column"> <center>APELLIDO</center> </th>
				<th class="column100 column"> <center>DIRECCION</center> </th>
				<th class="column100 column"> <center>OPCIONES</center> </th>

			</tr>

			<tr>

				<td class="" ><center> <?php foreach ($datos as $dato) {echo $dato["cedula"];echo "<br>";}?> </center></td>
				<td class="column100 column"> <center> <?php foreach ($datos as $dato) {echo $dato["nombre"];echo "<br>";}?> </center> </td>
				<td class="column100 column"> <center> <?php foreach ($datos as $dato) {echo $dato["apellido"];echo "<br>";}?> </center> </td>
				<td class="column100 column"> <center> <?php foreach ($datos as $dato) {echo $dato["direccion"];echo "<br>";}?></center> </td>
				<td>
					<a  class="btn btn-primary" href="veditar.php?cedula=<?php echo $dato->cedula;?>">editar
					<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
				</td>
			</tr>


</table>
		<br><br>

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
			<input type="submit" name="eliminar" class="btn btn-primary" value="ELIMINAR">
			<input type="submit" name="editar" class="btn btn-primary" value="EDITAR"><br><br>
		</center>
	</div>
</form>



<?php require '../views/footer.php'?>
</body>
</html>