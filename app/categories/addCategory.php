<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$categories = new Categories($db);
	$error = [];
var_dump($_POST);
	if (isset($_POST)) 
	{
		if (empty($_POST['category_name'])) 
		{
			$error['category_name'] = "please enter a category name";
		}
		if (empty($error)) 
		{
			$hash_id = rand(0000000000, 9999999999);
			/*$id = $_POST['category_name'].$rand;
			$hash_id = str_shuffle($id);*/
			$categories->category_name = $_POST['category_name'];
			$categories->hash_id =  $hash_id;
			$categories->admin_id = $_SESSION['id'];
			if ($categories->create()) 
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