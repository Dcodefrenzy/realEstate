<?php 
session_start();


	$conn = new Database();
	$db = $conn->getConnection();
	$property = new Properties($db);



	if (isset($_GET)) {
	$stmt = $property->selectALL();
	$count = $stmt->rowCount();
	$res['properties'] = array();

	if ($count > 0) {
		
		while ($row = $stmt->fetch(PDO::FETCH_BOTH)) 
		{
			extract($row);
			 $bd = previewBody($description, 30);
			

			$properties =
			[
			 "property"=> $property,
			"location"=> $location,
			"description"=> $bd,
			"category"=> $category,
			"date_created"=> $date_created,
			"status"=>$status,
			"file_path"=>$file_path,
			"price"=>$price,
			"hash_id"=>$hash_id,
			"admin_id"=>$admin_id
			];	
				array_push($res["properties"], $properties);
			}
				
	}
	echo json_encode($res);
	
}


 ?>