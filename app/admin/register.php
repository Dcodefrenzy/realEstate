<?php 
	$conn = new Database();
	$db = $conn->getConnection();
	$admin = new Admin($db);
	$error = [];


	if (isset($_POST)) 
		
	{
 		$ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
		$admin->email = $_POST['email'];

		if (empty($_POST['firstname']) AND empty($_POST['lastname'])) 
		{
			echo $error['firstname'] = "Enter your firstname";
			echo $error['lastname'] = "Enter your lastname";
		}
		if (empty($_POST['email'])) 
		{
			echo $error['email'] = "Enter your email";
		}
		if ($admin->doesEmailExist()) {
			echo $error['email'] = "user already exist";
		}
		if (empty($_POST['pword'])) 
		{
			echo $error['pword'] = "Enter your password";
		}
		if (empty($_POST['phonenumber'])) 
		{
			echo $error['phonenumber'] = "Enter your phonenumber";
		}

	/*	if(empty($_POST['upload']))
		{
    		echo $error['upload'] = "Please choose file";
  		}*/
  		if (empty($error)) 
  		{
   
   	 		$rnd = rand(0000000000,9999999999);
    		$split = $_POST['firstname'].$_POST['lastname'];
    		$id = $rnd.$split;
    		$hash_id = str_shuffle($id);

  			$hash = password_hash($_POST['pword'], PASSWORD_BCRYPT);
  
  		/*	$ver['a'] = compressImage($image, "upload", 90, 'uploads/' );*/

			$admin->name = $_POST['firstname']." ".$_POST['lastname'];
		
			$admin->phonenumber = $_POST['phonenumber'];
			$admin->password = $hash ;
			/*$admin->file_path = $ver;*/
			$admin->hash_id = $hash_id;

			if ($admin->create()) 
			{
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

	}	


 ?>