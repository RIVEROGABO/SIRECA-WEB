<?php
require_once "class.conexion.php";
class personas_model {
	private $db;
	private $personas;
	private $user;

	public function __construct() {
		$this->db       = Conectar::conexion();
		$this->personas = array();
	}
	public function get_personas() {
		$consulta = $this->db->query("select * from personas order by cedula limit 0,20;");
		while ($filas = $consulta->fetch_assoc()) {
			$this->personas[] = $filas;

		}
		return $this->personas;

	}

	public function reg_personas($cedula, $nombre, $apellido, $direccion) {
		self::get_personas();
		$sql    = "INSERT INTO personas(cedula, nombre, apellido, direccion) VALUES ('".$cedula."', '".$nombre."', '".$apellido."', '".$direccion."') ";
		$result = $this->db->query($sql);

		if ($result) {
			return true;
		} else {
			return false;
		}

	}

	public function edit($cedula, $nombre, $apellido, $direccion) {
		self::get_personas();
		$sql    = "UPDATE personas SET nombre = '$nombre', apellido= '$apellido', direccion= '$direccion' WHERE cedula = '$cedula' ";
		$result = $this->db->query($sql);
		return $result;

	}

	function editar($cedula, $nombre, $apellido, $direccion) {
		self::get_personas();
		$sql  = "UPDATE personas SET ";
		$data = array();

		foreach ($form_data as $column => $value) {

			$data[] = $column."="."'".$value."'";

		}
		$sql .= implode(',', $data);
		$sql .= " where ".$cedula." = ".$cedula."";
		return $sql;
	}

	public function delete_per($cedula, $nombre, $apellido, $direccion) {
		self::get_personas();
		$sql    = "DELETE FROM personas WHERE cedula = '$cedula' ";
		$result = $this->db->query($sql);
		return $result;

	}

	public function get_user() {
		$consulta = $this->db->query("select * from users order by id limit 0,20;");
		while ($filas = $consulta->fetch_assoc()) {
			$this->user[] = $filas;

		}

		return $this->user;

	}

	public function reg_user($username, $password, $email) {
		self::get_user();
		$sql    = "INSERT INTO users(username, password, email) VALUES ('".$username."', '".$password."', '".$email."') ";
		$result = $this->db->query($sql);

		if ($result) {
			return true;
		} else {
			return false;
		}
	}

}
?>