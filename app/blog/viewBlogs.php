<?php 
session_start();



	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	

if (isset($_GET)) {
	$stmt = $blog-> selectAll();
	$count = $stmt->rowCount();
	$res["blogs"] = array();

	if ($count > 0) 
	{
		
		
		while ($row = $stmt->fetch(PDO::FETCH_BOTH)) 
		{
			
			extract($row);
			// die("I got here, its greater than zero");
		
			 $bd = previewBody($body, 30);
			
			$blogs =
			[
			"title"=> $title, 
			"body"=> $bd, 
			"author"=> $author, 
			"hash_id"=> $hash_id, 
			"file_path"=>$file_path, 
			"date_created"=> $date_created, 
			"admin_id"=>$admin_id
			];	
			// var_dump($blogs);

				array_push($res["blogs"], $blogs);
				
		}

	}
	
echo json_encode($res);
		/*var_dump($res);*/
					

}


 ?>