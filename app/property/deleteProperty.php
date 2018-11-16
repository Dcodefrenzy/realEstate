<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$property = new Properties($db);
	if (isset($_GET)) {
		$hash_id = $_GET['hash_id'];
		$property->hash_id = $hash_id;
		if ($property->deleteOne()) {
				$message = "Delete";
				header("Location:view_properties?message=$message");
					
		}
		else
		{
			$message = "Delete not successul";
			header("Location:view_blog?message=$message");
		}
	}





 ?>