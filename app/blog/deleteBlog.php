<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	if (isset($_GET)) {
		$hash_id = $_GET['hash_id'];
		$blog->hash_id = $hash_id;
		if ($blog->deleteOne()) {
				$message = "Delete";
				header("Location:viewAdminBlog?message=$message");
					
		}
		else
		{
			$message = "successul";
			header("Location:viewAdminBlog?message=$message");
		}
	}





 ?>