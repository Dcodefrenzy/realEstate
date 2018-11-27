<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$categories = new Categories($db);
	if (isset($_GET)) {
		$hash_id = $_GET['hash_id'];
		$categories->hash_id = $hash_id;
		if ($categories->deleteOne()) {
				$message = "Delete";
				header("Location:view_categories?message=$message");
					
		}
		else
		{
			$message = "successul";
			header("Location:view_categories?message=$message");
		}
	}



 ?>