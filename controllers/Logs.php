<?php 

class Logs
{
	public $user;
	public $body;
	public $conn;
	public $table_name = "logs";


	public function __construct($db)
	{
		$this->conn = $db;	
	}

	public function create()
	{
		$db=$this->conn->prepare("INSERT INTO $this->table_name(user, body, date_created) VALUES(:user, :body, NOW())");

		$data = 
		[
			":user"=>$this->user,
			":body"=>$this->body,
		];
		if($db->execute($data))
		{
			return true;
		}
		else
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