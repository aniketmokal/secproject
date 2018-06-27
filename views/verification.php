<?php 
	require_once '..//models/project.php';
	$id = $_GET['userid'];

	$obj->update(
		"pro_users","us_status='1'","us_id='$id'"
		);

	header("location:login.php");

 ?>