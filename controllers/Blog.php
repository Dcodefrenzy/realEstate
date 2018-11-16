<?php 

class Blog
{
	public $conn;
	public $table_name = "blog";
	public $title;
	public $body;
	public $author;
	public $hash_id;
	public $file_path;
	public $admin_id;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	
	public function create()
	{
	$db= $this->conn->prepare("INSERT INTO $this->table_name(title, body,  author, hash_id, date_created, admin_id) VALUES(:title, :body,  :author, :hash_id, NOW(), :admin_id)");
	$data =  
	[
			":title"=> $this->title,
			":body"=> $this->body,
			":author"=> $this->author,
			":hash_id"=> $this->hash_id,
			":admin_id"=>$this->admin_id
	];
	
	if ($db->execute($data)) 
		{
		  return true;
		}else
		{
		  return false;
		}
	}

	
	public function selectAll()
	{
	$db = $this->conn->prepare("SELECT * FROM $this->table_name");
	$db->execute();
	return $db;
	}

	
	public function selectOne()
	{
		$db = $this->conn->prepare("SELECT * FROM $this->table_name WHERE hash_id = :hash_id");
		$db->bindParam(":hash_id", $this->hash_id);
		$db->execute();
		return $db;
	}


	public function update()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				title = :title,
				body = :body,
				author=:author,
				admin_id=:admin_id WHERE hash_id = :hash_id");

	$data =  
	[
			":title"=> $this->title,
			":body"=> $this->body,
			":author"=> $this->author,
			":hash_id"=> $this->hash_id,
			":admin_id"=>$this->admin_id
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


	public function updateOne()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
			status = :status
			 WHERE hash_id = :hash_id");
	$data =  
	[
			":status"=> $this->status,
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


	public function deleteOne()
	{
		$db = $this->conn->prepare("DELETE FROM $this->table_name 
				 WHERE hash_id = :hash_id");
	$db->bindParam(":hash_id", $this->hash_id);
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