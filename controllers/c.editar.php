<?php

//Llamada al modelo
require_once ("../models/class.conexion.php");
$per   = new personas_model();
$datos = $per->get_personas();

if (isset($_POST['editar'])) {
	$nuevo = new personas_model();
	$asd   = $nuevo->edit($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion']);
	require_once ("../views/veditar.php");
}
//if (isset($_POST['editar'])) {
//	$field = array("cedula" => $_POST['cedula'], "apellidos" => $_POST['apellidos']);
//	$tbl   = "tabla_demo";
//	editar($field, 'cedula', $cedula);

//}

//Llamada a la vista
require_once ("../views/veditar.php");

?>