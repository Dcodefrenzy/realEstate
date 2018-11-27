<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$categories = new Categories($db);
	$error = [];
	$res['response'] = array();

	if (isset($_POST)) 
	{
		if (empty($_POST['category_name'])) 
		{
			$error['category_name'] = "please enter a category name";
		}
		if (empty($error)) 
		{

			$categories->category_name = $_POST['category_name'];
			$categories->hash_id =  $_POST['hash_id'];
			$categories->admin_id = $_SESSION['id'];
			if ($categories->update()) 
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