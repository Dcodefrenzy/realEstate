<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$admin = new Admin($db);
	if (isset($_GET)) {
		$hash_id = $_GET['hash_id'];
		$admin->hash_id = $hash_id;
		if ($admin->deleteOne()) {
				$message = "Delete";
				header("Location:view_admins");
				/*header("Location:viewAdminBlog?message=$message");*/
					
		}
		else
		{
			$message = "successul";
			die("Whops Something Went Wrong");
			
		}
	}





 ?>