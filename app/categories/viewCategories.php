<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$category = new Categories($db);

if (isset($_GET)) {
	$stmt = $category->selectALL();
	$count = $stmt->rowCount();
	$res['categories'] = array();

	if ($count > 0) {
		
		while ($row = $stmt->fetch(PDO::FETCH_BOTH)) 
		{
			extract($row);
			

			$categories =
			[
			   "name" =>$category_name,   "hash_id"=>$hash_id,  "date_created"=>$date_created, "admin_id"=> $admin_id,
			];	
				array_push($res["categories"], $categories);
				
		}
		echo json_encode($res);
	}else{
		$categories=
		[
			"error" => "No categories yet",
		];
		//here
		array_push($res["categories"], $categories);
		echo json_encode($res);
	}
}


 ?>