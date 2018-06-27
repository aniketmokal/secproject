<?php
	require_once ('helpers.php');

	final class project extends helpers{
		function get_user_details($email){
			// echo $email;

			return helpers::select(
				"us_id,us_name,us_mobile,us_status",
				"pro_users",
				"us_email='$email'"
				);
		}

	}

	$obj = new project();

?>