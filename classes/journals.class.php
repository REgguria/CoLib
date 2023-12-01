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
            $query=$this->Database->connect->prepare($sql);
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
            $sql = "UPDATE jorunal SET Title=:Title, Description=:Description, Author=:Author Text=:Text WHERE JournalID =:JournalID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':Title', $this->Title);
            $query->bindParam(':Descriptionm', $this->Description);
            $query->bindParam(':Author', $this->Author);
            $query->bindParam(':Text', $this->Text);
            $query->bindParam(':JournalID', $this->JournalID);
           
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }

        function fetch($record_id){
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
    }
?>