<?php 
session_start();
$conn = new Database();
$db = $conn->getConnection();

$logs = new Logs($db);
$stmt = $logs->selectAll();
$count = $stmt->rowCount();
$res ["logs"] = array();


if ($count > 0) 
{
	while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			extract($row);
		$logss = ["user"=>$user, "body"=>$body, "date_created"=>$date_created];

		 array_push($res["logs"], $logss);
		
			
			
	}
		echo json_encode($res);
}
	else
	{
		echo json_encode(
			array("message" => "No products found.")
		);
	}

 ?>