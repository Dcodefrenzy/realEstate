<?php 

class About
{
	public $body;
	public $file_path;
	public $conn;
	public $admin_id;
	public $table_name = "about";

	public function __construct($db)
	{
		$this->conn = $db;
	}

	//create about
	public function create()
	{
		$db= $this->conn->prepare("INSERT INTO $this->table_name( body, file_path, date_created, admin_id) VALUES( :body, :file_path, NOW(), :admin_id)");
	
	$data = 
	[
		":body"=>$this->body,
		":file_path"=>$this->file_path,
		"admin_id"=>$this->admin_id

	];
		if ($db->execute($data)) 
		{
			return true;
		}else
		{
			return false;
		}
	}
	//select all from about
	public function select()
	{
		$db = $this->conn->prepare("SELECT * FROM $this->table_name");
		$db->execute();
		return $db;
	}

	//update about
	public function update()
	{
	$db = $this->conn->prepare("UPDATE $this->table_name SET body=:body, date_created = NOW()");
		$db->execute();
		if ($db->execute()) 
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
}

 ?>