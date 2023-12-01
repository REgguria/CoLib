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
            $sql = "UPDATE customers SET Username=:Username Email=:Email FirstName=:FirstName, LastName=:LastName, Password=:Password WHERE CustomerID = :CustomerID;";
    
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':FirstName', $this->FirstName);
            $query->bindParam(':LastName', $this->LastName);
            $query->bindParam(':Role', $this->Role);
            $query->bindParam(':Email', $this->Email);
            $query->bindParam(':Status', $this->status);
            $query->bindParam(':StaffID', $this->StaffID);
            
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }
        function fetch($record_id){
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
    }