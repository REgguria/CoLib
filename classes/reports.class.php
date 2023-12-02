<?php
    require_once 'database.php';

    class reports{
        public $ReportID;
        public $Reporter;
        public $Reportee;
        Public $CodeName;
        Public $CodeText;
        public $Complain;
    
        protected $Database;
        function __construct(){
            $this->Database = new Database();
        }

        function add(){
            $sql ="INSERT INTO reports (Reporter, Reportee, CodeText, Complain) VALUES
            (:Reporter, :Reportee, :CodeText, :Complain);";
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
            function fetch($record_id){
                $sql = "SELECT * FROM reports WHERE ReportID = :ReportID;";
                $query=$this->Database->connect()->prepare($sql);
                $query->bindParam(':ReportID', $RecordID);
                if($query->execute()){
                    $data = $query->fetch();
                }
                return $data;
            }
        }

        function show(){
            $sql = "SELECT * FROM reports ORDER BY ReportID ASC;";
            $query=$this->Database->connect()->prepare($sql);
            $data = null;
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }

        function delete($DeleteID){
            $ReportID = $DeleteID;
            $sql = "DELETE FROM reports WHERE ReportID = :ReportID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':ReportID', $ReportID, PDO::PARAM_INT);
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
    ?>