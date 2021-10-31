<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
require '../views/header.php';
require_once ("../controllers/c.personas.php");
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


	<form id="main" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div>
			<h1>Insertar Registros </h1>
		 	<br><br>

			  <div class="">
			  	<label>CEDULA</label>
			    <input class="form-control" name="cedula" type="text" placeholder=""> <br><br>

			    <label>NOMBRE</label>
			    <input class="form-control" name="nombre" type="text" placeholder=""><br><br>

			    <label>APELLIDO</label>
			    <input class="form-control" name="apellido" type="text" placeholder=""><br><br>
			    <label>DIRECCION</label>
			    <textarea class="form-control" name="direccion" type="text" placeholder=""> </textarea><br><br>
			  </div>


				<input type="submit" name="guardar" class="btn btn-primary" value="Guardar">
				<input type="submit" name="guardar" class="btn btn-primary" value="Consultar"><br><br>

	</div>




	</div>
</form>






<?php require '../views/footer.php'?>
</body>
</html>