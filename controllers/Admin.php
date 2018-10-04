<?php 
define("DB_PATH", dirname(dirname(__FILE__)));
include DB_PATH."/model/Db.php";
class Admin
{
	public $conn;
	public $table_name = "admin";
	public $name;
	public $email;
	public $phonenumber;
	public $password;
	public $file_path;
	public $hash_id;


	public function __construct($db)
	{
		$this->conn = $db;
	}
	//create Admin

	public function create()
	{

	$db= $this->conn->prepare("INSERT INTO $this->table_name(name, email, phonenumber, password, file_path, date_created, hash_id) VALUES(:name, :email, :phonenumber, :password, :file_path, NOW(), :hash_id)");
	$data =  
	[
			":name"=> $this->name,
			":email"=> $this->email,
			":phonenumber"=> $this->phonenumber,
			":password"=> $this->password,
			":file_path"=> $this->file_path,
			":hash_id"=> $this->hash_id
	];
	
	if ($db->execute($data)) 
		{
		  return true;
		}else
		{
		  return false;
		}

	}

	//select all admin
	public function selectAll()
	{
	$db = $this->conn->prepare("SELECT * FROM $this->table_name");
	$db->execute();
	return $db;
	}

	//select one admin
	public function selectOne()
	{
		$db = $this->conn->prepare("SELECT * FROM $this->table_name WHERE email = :email");
		$db->bindParam(":email", $this->email);
		$db->execute();
		return $db;
	}

		//select one admin
	public function doesEmailExist()
	{
		$result = "";
		$db = $this->conn->prepare("SELECT * FROM $this->table_name WHERE email = :email");
		$db->bindParam(":email", $this->email);
		$db->execute();
		$count = $db->rowCount();
  		if($count>0)
  		{
    	$result = true;
		}
		return $result;
	}
	//update admin
	public function update()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				name = :name,
				email = :email,
				phonenumber=:phonenumber,
				password=:password WHERE hash_id = :hash_id");

	$data =  
	[
			":name"=> $this->name,
			":email"=> $this->email,
			":phonenumber"=> $this->phonenumber,
			":password"=> $this->password,
			":hash_id"=> $this->hash_id
	];
	if ($db->execute($data)) 
		{
			return true;
		}else
		{
			return false;
		}
		
	}

	//update image
	public function updateImage()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				file_path = :file_path
				 WHERE hash_id = :hash_id");
	

	$data =  
	[
			":file_path"=> $this->file_path,
			":hash_id"=> $this->hash_id
	];

	if ($db->execute($data)) 
		{
			return true;
		}else
		{
			return false;
		}
	}

		//update login
	public function updateLogin()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				 last_login = NOW(),
				 login_status 
				 WHERE hash_id = :hash_id");
	
		$this->login_status = "online";
	$data =  
	[
			":login_status"=> $this->login_status,
			":hash_id"=> $this->hash_id
	];

	if ($db->execute($data)) 
		{
			return true;
		}else
		{
			return false;
		}
	}
		//update last logout
	public function updateLogout()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				 last_logout = NOW(),
				 login_status = :login_status  
				 WHERE hash_id = :hash_id");

	$this->login_status = "offline";
	$data =  
	[
			":login_status"=> $this->login_status,
			":hash_id"=> $this->hash_id
	];

	if ($db->execute($data)) 
		{
			return true;
		}else
		{
			return false;
		}
	}
		//delete admin
	public function delete()
	{
		$db = $this->conn->prepare("DELETE FROM $this->table_name 
				 WHERE hash_id = :hash_id");
	

	$db->bindParams(":hash_id", $this->hash_id);
	if($db->execute())
	{
		return true;
	}else
	{
		return false;
	}
}



}

 ?>