<?php 
 class Categories
 {
 	public $category_name;
 	public $hash_id;
 	public $admin_id;
 	public $conn;
	public $table_name = "categories";
 	
 	public function __construct($db)
 	{
 		$this->conn= $db;
 	}


 	public function create()
 	{
 		$db= $this->conn->prepare("INSERT INTO $this->table_name(category_name, hash_id,  admin_id, date_created) VALUES(:category_name, :hash_id, :admin_id, NOW())");

 			$data =  
		[
			":category_name"=> $this->category_name,
			":admin_id"=> $this->admin_id,
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

 		//select all categories
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

	//update categories
	public function update()
	{
		$db = $this->conn->prepare("UPDATE $this->table_name SET 
				category_name = :category_name,
				admin_id=:admin_id
				 WHERE hash_id = :hash_id");
	$data =  
	[
			":category_name"=> $this->category_name,
			":admin_id"=> $this->admin_id,
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

			//delete categories
	public function deleteOne()
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