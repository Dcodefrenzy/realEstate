<?php 

class Properties
{
	public $conn;
	public $table_name = "property";
	public $property;
	public $location;
	public $description;
	public $category;
	public $status;
	public $file_path;
	public $price;
	public $admin_id;
	public $hash_id;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	
	public function create()
	{
	$db= $this->conn->prepare("INSERT INTO $this->table_name(property, location, description, date_created, category, status, price, hash_id, admin_id) VALUES(:property, :location, :description, NOW(), :category, :status,  :price, :hash_id, :admin_id)");
	$data =  
	[ 
			":property"=> $this->property,
			":location"=> $this->location,
			":description"=> $this->description,
			":category"=> $this->category,
			":status"=>$this->status,
			":price"=>$this->price,
			":hash_id"=>$this->hash_id,
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
			property=:property,
			location=:location,
			description=:description,
			category=:category,
			status=:status,
			price=:price,
			admin_id=:admin_id WHERE hash_id = :hash_id");

	$data =  
	[
		":property"=> $this->property,
			":location"=> $this->location,
			":description"=> $this->description,
			":category"=> $this->category,
			":status"=>$this->status,
			":price"=>$this->price,
			":admin_id"=>$this->admin_id,
			":hash_id"=>$this->hash_id
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