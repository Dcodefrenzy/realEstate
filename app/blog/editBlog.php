<?php 
session_start();
authenticate();

	$conn = new Database();
	$db = $conn->getConnection();
	$blog = new Blog($db);
	$error = [];
	$res['response'] = array();

	if (isset($_POST)) 
	{
		if (empty($_POST['title'])) 
		{
		$error['title'] = "please enter a title name";
		}
		if (empty($_POST['body'])) 
		{
		$error['body'] = "please enter the body";
		}
		if (empty($_POST['author'])) 
		{
		$error['author'] ="please enter the author";
		}
		if (empty($error)) 
		{
			$hash_id = $_POST['hash_id'];

			$blog->title = $_POST['title'];
			$blog->body = $_POST['body'];
			$blog->author = $_POST['author'];
			$blog->hash_id = $hash_id; 
			$blog->admin_id = $_SESSION['id'];
			if ($blog->update()) 
			{
				
				$message = [
					 "success"=> "success", "hash_id"=>$hash_id,
				];
				array_push($res['response'], $message);
				echo json_encode($res);
			}
			else
			{
				$message= [
					 "notsuccess="=> "notsuccess",
				];
				array_push($res['response'], $message);
				echo json_encode($res);
			}
		}
	}




 ?>