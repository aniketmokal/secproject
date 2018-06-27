<?php 
	require_once "../models/project.php";
	// print_r($_REQUEST);

	if (preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_REQUEST['uname']) == false){
		echo "Invalid Name";
	}

	else if (preg_match("/^[1-9][0-9]{9}$/", $_REQUEST['umobile']) == false){
		echo "Invalid Mobile";
	}
	else if (!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\_]+[a-zA-Z0-9])|\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['uemail'])){
		echo "Invalid Email";
	}
	else if(!preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['upass'])){
		echo "Invalid Password";
	}
	else if($_REQUEST['upass'] != $_REQUEST['ucpass']){
		echo "Invalid confirm password";
	}
	else{
		// echo "ok";
		$name = $_REQUEST['uname'];
		$mobile = $_REQUEST['umobile'];
		$email = $_REQUEST['uemail'];
		$pass = sha1($_REQUEST['upass']);

		

		$result = $obj->select(
			"count(*) as cnt",
			"pro_users",
			"us_email='$email'"
			);
	
			// pre($result);
			// exit;
			if($result[0]['cnt'] > 0){
				echo "User Exist";
			}
			else{
				$obj->insert(
					"pro_users",
					"us_name,us_mobile,us_email,us_password",
					"'$name','$mobile','$email','$pass'"
					);
				echo "User Added";

				$re_id = $obj->select("us_id","pro_users","us_email='$email'");
				// pre($re_id);
				$uid = $re_id[0]['us_id'];

				// exit;

				/*****************email / sms****************/
				$to = $_REQUEST['uemail'];
				
					$subject = "Please Verify email";

					$message = "<h1><a href='http://localhost/project/views/verification.php?userid=$uid'> VERIFY </a></h1>";

					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

					// More headers
					$headers .= 'From:Tapas <vishal@php-training.in>' . "\r\n";

					$res = mail($to,$subject,$message,$headers);
					var_dump($res);
				// _dump($result_mail);

				/*****************email / sms****************/

				/********sms*******/
				 // Authorisation details.
                $username = "pednekar235@gmail.com";
                $hash = "fd0068da67064d0a1a2d880e7f7162462baed7b3dafa90a0701e90e5f1c77f68";

                // Config variables. Consult http://api.textlocal.in/docs for more info.
                $test = "0";

                // Data for text message. This is the text message data.
                $sender = "TXTLCL"; // This is who the message appears to be from.
                $numbers = "91$mobile"; // A single number or a comma-seperated list of numbers
                $message = "Welcome To my Portal";
                // 612 chars or less
                // A single number or a comma-seperated list of numbers
                $message = urlencode($message);
                $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
                $ch = curl_init('http://api.textlocal.in/send/?');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch); // This is the result from the API
                print_r($result);
                curl_close($ch);
				
				/********sms*******/
			}

	
		}
 ?>

