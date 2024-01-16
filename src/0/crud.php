<?php

	{// Connects to database.
	function connect() {
		// ** DATABASE CREDENTIALS **
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "wb_turnos";

		$database_username = "";
		$database_password = "";
		$database_info = "mysql:host=localhost;dbname=wb_turnos;charset=utf8";

		try {
			$PDO = new PDO($database_info);
		}
		catch(PDOException $e) {
			echo "Algo falló al intentar realizar la conección con la base de datos '$database':<br>".$e;
		}
		return $PDO;
	}}

	{// Disconnects to database.
	function disconnect($link) {
		$link -> close();
	}}

	// Comes up with the next turn 
	function generate_turn($t_documento, $documento, $t_atencion) {
		// include('turn.php');
		$link = connect();
		$sql = getLastTurn($t_atencion);
		$data = $link -> query($sql);
		if($data -> num_rows == 1) {
			
		} else {
			// '$_atencion' -> true: primary | false: normal
			switch($t_atencion){
				case false:
					$letra = 'A';
					$numero = '000';
					break;
				case true:
					$letra = 'X';
					$numero = '000';
					break;
			}

		}
		
	}
	
	// Gets the ultimate given turn according to 't_atencion' type
	function getLastTurn($t_atencion) {
		session_start();

		$sql = "SELECT CONCAT(letra, LPAD(numero, 3, 0)) AS turno, t_atencion FROM turno
				WHERE t_atencion = 'preferencial'
				ORDER BY fecha DESC, turno DESC
				LIMIT 1;";
		

		return $sql;
	}

	

	function getNewTurn($letra, $numero, $t_atencion) {

	}





?>

