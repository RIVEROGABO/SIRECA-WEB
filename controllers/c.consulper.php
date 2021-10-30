<?php

//Llamada al modelo
require_once ("../models/class_presonas.php");
$per   = new personas_model();
$datos = $per->get_personas();

if (isset($_POST['guardar'])) {

	$nuevo = new personas_model();
	$asd   = $nuevo->edit($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion']);

} elseif (isset($_POST['eliminar'])) {
	$nuevo = new personas_model();
	$asd   = $nuevo->delete_per($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion']);
} elseif (isset($_POST['editar'])) {
	$nuevo = new personas_model();
	$asd   = $nuevo->editar($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion']);
}

//Llamada a la vista
require_once ("../views/consulper.php");

?>