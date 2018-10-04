<?php 
session_start();


	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	$error = [];


	if (isset($_GET)) {
	$stmt = $blog->selectALL();
	$count = $stmt->rowCount();
	$res['blogs'] = array();
		
		$row = $stmt->fetch(PDO::FETCH_BOTH) 
			extract($row);
			
			$blogs =
			[
			"title"=> $title,
			"body"=> $body,
			"author"=> $author,
			"hash_id"=> $hash_id,
			"status"=>$status,
			"file_path"=>$file_path,
			"admin_id"=>$admin_id
			];	
	array_push($res["blogs"], $blogs);
				
	echo json_encode($res);
}


 ?>