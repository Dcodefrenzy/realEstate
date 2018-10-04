<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$property = new Properties($db);

	if (isset($_GET)) {
	$stmt = $property->selectOne();
	$count = $stmt->rowCount();
	$res['properties'] = array();
	$row = $stmt->fetch(PDO::FETCH_BOTH);
			extract($row);
			$properties =
			[
			 "property"=> $property,
			"location"=> $location,
			"description"=> $description,
			"category"=> $category,
			"status"=>$status,
			"file_path"=>$file_path,
			"price"=>$price,
			"hash_id"=>$hash_id,
			"admin_id"=>$admin_id
			];	
		array_push($res["properties"], $properties);
	echo json_encode($res);
}


 ?>