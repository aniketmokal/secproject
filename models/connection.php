<?php
	require_once ('parameter.php');
	abstract class connection implements parameter{
		var $conn = "";
		function __construct(){
			// echo "connection";
			$this->conn = new mysqli(
			parameter::HOST,
			parameter::USER,
			parameter::PASSWORD,
			parameter::DATABASE
			);
			// pre($this->conn);

			if(session_id() == ""){
				session_start();
			}
			// 1
		}

		function __destruct(){
			// echo "disconnect";

			$data = $this->conn->close();
			// var_dump($data);

		}
	}
?>