<?php
 
//Llamada al modelo
require_once("../models/class_presonas.php");
$per =new personas_model();
$datos=$per->get_personas();




if(isset($_POST['guardar'])){
	
    $nuevo = new personas_model();
    $asd = $nuevo->reg_personas($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['direccion']);

}

//Llamada a la vista
require_once("../views/Regusuarios.php");






?>