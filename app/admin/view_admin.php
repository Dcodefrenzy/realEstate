<?php 
		//db connection

	$conn = new Database();
	$db = $conn->getConnection();
	//instantiating new user.
	$admin = new Admin($db);
	$stmt = $admin->selectALL();
	$count = $stmt->rowCount();
	$res['admins'] = array();

	if ($count > 0) 
	{
		while ($row = $stmt->fetch(PDO::FETCH_BOTH)) 
		{
			extract($row);
			

			$admins =
			[
			   "name" =>$name, "email" =>$email, "phonenumber" =>$phonenumber,  "file_path"=>$file_path, "hash_id"=>$hash_id,  "date_created"=>$date_created
			];	
				array_push($res["admins"], $admins);
				
		}
		/*var_dump($res);*/
		echo json_encode($res);
	}



 ?>