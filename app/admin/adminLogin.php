<?php 
session_start();
	//db connection
	$conn = new Database();
	$db = $conn->getConnection();
	//instantiating new user.
	$admin = new Admin($db);
	$error = [];
	$res['response'] = array();
	if (isset($_POST)) 
	{
		if (empty($_POST['email']))
		 {
			$error['email'] = "Enter an email";
		}
		if (empty($_POST['pword'])) 
		{
			$error['pword'] = "Enter a password";
		}
		if (empty($error)) 
		{
			$admin->email = $_POST['email'];
		
			$stmt = $admin->selectOne();
			$row = $stmt->fetch(PDO::FETCH_BOTH);
			extract($row);
			if($stmt->rowCount() !=1 || !password_verify($_POST['pword'], $password))
			{
					echo json_encode(
					array("message" => false)
					);
			}
			else
			{
				$_SESSION['id'] = $hash_id;
				$admin =  [
					"hash_id"=> $hash_id,
					"name" => $name,
					"message" => true
				];
				array_push($res["response"], $admin);
				echo json_encode($res);
			}
		}
	}



 ?>