<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$categories = new Categories($db);
	$res['categories'] = array();
	if (isset($_GET)) {
		
		$hash_id = $_GET['hash_id'];
		$categories->hash_id = $hash_id;
		$stmt = $categories->selectOne();
		$row = $stmt->fetch(PDO::FETCH_BOTH);
		extract($row);
		$category =
			[
			   "name" =>$category_name,   "hash_id"=>$hash_id,  "date_created"=>$date_created
			];	
				array_push($res["categories"], $category);
				echo json_encode($res); 
	}



 ?>