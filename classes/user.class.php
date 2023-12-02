<?php
    require_once 'database.php';
    class users{
        public $CustomerID;
        public $Username;
        public $Email;
        Public $FirstName;
        Public $Lastname;
        public $Password;
        public $DateCreated;
        public $DateUpdated;

        protected $Database;
        function __construct(){
            $this->Database = new Database();
        }
        function add(){
            $sql ="INSERT INTO customers (Username, Email, FirstName, LastName, Password) VALUES
            (:Username, :Email, :FirstName, :LastName, :Password);";
            $query=$this->Database->connect->prepare($sql);
            $query->bindparam(':Username', $this->Username);
            $query->bindparam(':Email', $this->Email);
            $query->bindparam(':FirstName', $this->FirstName);
            $query->bindparam(':LastName', $this->LastName);
            $HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
            $query->bindParam(':Password', $hashedPassword);
      
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	  
        }
        function edit(){
            $sql = "UPDATE customers SET Username=:Username, Email=:Email, FirstName=:FirstName, LastName=:LastName WHERE CustomerID = :CustomerID;";
    
                $query = $this->Database->connect()->prepare($sql);
                $query->bindParam(':Username', $this->Username);
                $query->bindParam(':Email', $this->Email);
                $query->bindParam(':FirstName', $this->FirstName);
                $query->bindParam(':LastName', $this->LastName);
                $query->bindParam(':CustomerID', $this->CustomerID);

            if ($query->execute()) {
                return true;
            } else {
                return false;
            }

        }
        function fetch($RecordID){
            $sql = "SELECT * FROM customers WHERE CustomerID = :CustomerID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':CustomerID', $RecordID);
            if($query->execute()){
                $data = $query->fetch();
            }
            return $data;
        }
        
        function show(){
            $sql = "SELECT * FROM customers ORDER BY Username ASC;";
            $query=$this->Database->connect()->prepare($sql);
            $data = null;
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function is_email_exist(){
            $sql = "SELECT * FROM customers WHERE Email = :Email;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':Email', $this->Email);
            if($query->execute()){
                if($query->rowCount()>0){
                    return true;
                }
            }
            return false;
        }
        function delete($DeleteID){
            $CustomerID = $DeleteID;
            $sql = "DELETE FROM customers WHERE CustomerID = :CustomerID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':CustomerID', $CustomerID, PDO::PARAM_INT);
            try {
                // Execute the query
                $query->execute();
                
                // Check if any rows were affected
                if ($query->rowCount() > 0) {
                    return true; // Deletion successful
                } else {
                    return false; // No rows affected, possibly StaffID doesn't exist
                }
            } catch (PDOException $e) {
                // Handle exceptions, log or display an error message
                return false;
            }
        }
    }