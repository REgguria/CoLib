<?php
    require_once 'database.php';

    class staff{
        //CapitalFirstLettersDon'tForget

        public $StaffID;
        public $FirstName;
        public $LastName;
        public $Role;
        public $Email;
        public $Password;
        public $Status;

        protected $Database;
        function __construct(){
            $this->Database = new Database();
        }

    function add(){
        $sql = "INSERT INTO staff (FirstName, LastName, Role, Email, Password, Status) VALUES 
        (:Firstname, :Lastname, :Role, :Email, :Password, :Status);";
         $query=$this->Database->connect()->prepare($sql);
         $query->bindParam(':FirstName', $this->FirstName);
         $query->bindParam(':LastName', $this->LastName);
         $query->bindParam(':Role', $this->Role);
         $query->bindParam(':Email', $this->Email);
         // Hash the password securely using password_hash
         $HashedPassword = password_hash($this->Password, PASSWORD_DEFAULT);
         $query->bindParam(':Password', $hashedPassword);
         $query->bindParam(':Status', $this->Status);
        
         if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE staff SET FirstName=:FirstName, LastName=:LastName, Role=:Role, Email=:Email, Status=:Status WHERE StaffID = :StaffID;";

        $query=$this->Database->connect()->prepare($sql);
        $query->bindParam(':FirstName', $this->FirstName);
        $query->bindParam(':LastName', $this->LastName);
        $query->bindParam(':Role', $this->Role);
        $query->bindParam(':Email', $this->Email);
        $query->bindParam(':Status', $this->Status);
        $query->bindParam(':StaffID', $this->StaffID);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($RecordID){
        $sql = "SELECT * FROM staff WHERE StaffID = :StaffID;";
        $query=$this->Database->connect()->prepare($sql);
        $query->bindParam(':StaffID', $recordID);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show() {
        $sql = "SELECT * FROM staff ORDER BY LastName ASC, FirstName ASC;";
        $query=$this->Database->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function is_email_exist(){
        $sql = "SELECT * FROM staff WHERE Email = :Email;";
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
        $StaffID = $DeleteID;
        $sql = "DELETE FROM staff WHERE StaffID = :StaffID;";
        $query=$this->Database->connect()->prepare($sql);
        $query->bindParam(':StaffID', $StaffID, PDO::PARAM_INT);
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
