<?php
    require_once 'database.php';
    class code{

        public $CodeID;
        public $CodeName;
        public $Description;
        Public $CodeText;
        Public $Author;
        public $DateCreated;
        public $Format;
        public $Version;
        public $Approval;
        public $Likes;
        public $Downloads;

        protected $Database;
        function __construct(){
            $this->Database = new Database();
        }
        //this add automatically adds turns any inserted code into "unapproved"
        function add(){
            $sql ="INSERT INTO code (CodeName, Description, CodeText, Author, Format, Version, Approval) VALUES
            (:CodeName, :Description, :CodeText, :Author, :Format, :Version, 0);";
            $query=$this->Database->connect->prepare($sql);
            $query->bindparam(':CodeName', $this->CodeName);
            $query->bindparam(':Description', $this->Description);
            $query->bindparam(':CodeText', $this->CodeText);
            $query->bindparam(':Author', $this->Author);
            $query->bindparam(':Format', $this->Format);
            $query->bindparam(':Version', $this->Version);
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	  
        }
        function edit(){
            $sql = "UPDATE code SET CodeName=:CodeName, Description=:Description, CodeText=:CodeText, Author=:Author Format=:Format, Version=:Version WHERE CodeID =:CodeID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindparam(':CodeName', $this->CodeName);
            $query->bindparam(':Description', $this->Description);
            $query->bindparam(':CodeText', $this->CodeText);
            $query->bindparam(':Author', $this->Author);
            $query->bindparam(':Format', $this->Format);
            $query->bindparam(':Version', $this->Version);
            $query->bindParam(':CodeID', $this->CodeID);
            
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }

        function fetch($record_id){
            $sql = "SELECT * FROM CodeID WHERE CodeID = :CodeID;";
            $query=$this->Database->connect()->prepare($sql);
            $query->bindParam(':CodeID', $RecordID);
            if($query->execute()){
                $data = $query->fetch();
            }
            return $data;
        }
        function showunapproved(){
            $sql ="SELECT * FROM code WHERE Approval = 0 ORDER BY CodeName ASC, Author ASC;";
            $query=$this->Database->connect()->prepare($sql);
            $data = null;
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }
        

        function show(){
            $sql = "SELECT * FROM code ORDER BY CodeName ASC, Author ASC;";
            $query=$this->Database->connect()->prepare($sql);
            $data = null;
            if($query->execute()){
                $data = $query->fetchAll();
            }
            return $data;
        }
    }