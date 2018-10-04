<?php
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "real_estate";
    private $username = "root";
    private $password = "dre";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            /*echo "Connection error: " . $exception->getMessage();*/
            die("Could Not Connect");
        }
  
        return $this->conn;
    }
}
?>