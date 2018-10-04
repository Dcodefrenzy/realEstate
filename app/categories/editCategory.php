<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$categories = new Categories($db);
	$error = [];

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
				echo "success";
				echo json_encode(
							array("success" => "success.")
							);		
			}
			else
			{
				echo json_encode(
							array("error", $error)
							);
			}
		}
	}


 ?>