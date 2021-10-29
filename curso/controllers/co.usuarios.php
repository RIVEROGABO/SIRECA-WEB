<?php

//Llamada al modelo
require_once ("../models/class_presonas.php");
$per   = new personas_model();
$datos = $per->get_user();

if (isset($_POST['guardar'])) {

	$nuevo = new personas_model();
	$asd   = $nuevo->reg_user($_POST['username'], $_POST['username'], $_POST['password'], $_POST['email']);

}

//Llamada a la vista
require_once ("../views/reg_user.php");

?>