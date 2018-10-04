<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$properties = new Properties($db);
	$error = [];
	$res['response'] = array();

	if (isset($_POST)) 
	{
		if (empty($_POST['property'])) 
		{
		$error['property'] = "please enter a property name";
		}
		if (empty($_POST['location'])) 
		{
		$error['location'] = "please enter the location";
		}
		if (empty($_POST['description'])) 
		{
		$error['description'] ="please enter the description";
		}
		if (empty($_POST['category'])) 
		{
		$error['category'] = "please enter the category";
		}
		if (empty($_POST['status'])) 
		{
		$error['status'] = "please enter the status";
		}
		if (empty($_POST['price'])) 
		{
		$error['price'] = "please enter the price";
		}
		if (empty($error)) 
		{

			$hash_id = $_POST['hash_id'];
			$properties->property = $_POST['property'];
			$properties->location = $_POST['location'];
			$properties->description = $_POST['description'];
			$properties->category = $_POST['category'];
			$properties->status = $_POST['status'];
			$properties->price = $_POST['price'];
			$properties->hash_id =  $hash_id;
			$properties->admin_id = $_SESSION['id'];
			if ($properties->update()) 

			{
				$message = [
					"success"=> "uploade successful", "hash_id"=>$hash_id,
				]; 
				array_push($res['response'], $message);
				echo json_encode($res);
									
			}
			else
			{
					$message = [
						"unsucessful"=> "uploade not successful",
					];
					array_push($res['response'], $message);
					echo json_encode($res);
			}
		}
	}




 ?>