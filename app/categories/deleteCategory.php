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



 ?>