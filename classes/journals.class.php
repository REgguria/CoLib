<?php
    require_once 'database.php';
    class journal{
    //CapitalFirstLettersDon'tForget
            public $JournalID;
            public $Title;
            public $Description;
            public $Author;
            public $Text;
            public $DataUploaded;
            public $DateUpdated;
            protected $Database;
            function __construct(){
            $this->Database = new Database();
        }
        function add(){
            $sql ="INSERT INTO journal (Title, Description, Author, Text) VALUES
            (:Title, :Title, :Description, :Author, :Text);";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindparam(':Title', $this->Title);
            $query->bindparam(':Description', $this->Description);
            $query->bindparam(':Author', $this->Author);
            $query->bindparam(':Text', $this->Text);
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }
        function edit(){
            $sql = "UPDATE journal SET Title=:Title, Description=:Description, Author=:Author, Text=:Text WHERE JournalID = :JournalID;";
            $query = $this->Database->connect()->prepare($sql);
            $query->bindValue(':Title', $this->Title, PDO::PARAM_STR);
            $query->bindValue(':Description', $this->Description, PDO::PARAM_STR);
            $query->bindValue(':Author', $this->Author, PDO::PARAM_STR);
            $query->bindValue(':Text', $this->Text, PDO::PARAM_STR);
            $query->bindValue(':JournalID', $this->JournalID, PDO::PARAM_INT);
           
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }

        function fetch($RecordID){
            $sql = "SELECT * FROM journal WHERE JournalID = :JournalID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':JournalID', $RecordID);
            if($query->execute()){
                $data = $query->fetch();
            }
            return $data;
        }

        function show(){
            $sql = "SELECT * FROM journal ORDER BY Title ASC, Author ASC;";
            $query=$this->Database->connect()->prepare($sql);
            $data = null;
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }
        function delete($DeleteID){
            $JournalID = $DeleteID;
            $sql = "DELETE FROM journal WHERE JournalID= :JournalID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':JournalID', $JournalID, PDO::PARAM_INT);
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