<?php
    include_once "Util/Database.php";//Once is extremely necessary in order to work together with other models

    class UserLogin{
        //Properties
        public $id;
        public $loginName;
        public $userPassword;
        public $isActive;
        public $idSystemUser;
        public $systemUser;

        //Database property
        private $database;

        //Constructor
        public function __construct(){
            $this->id = 0;
            $this->loginName = "";
            $this->userPassword = "";
            $this->isActive = false;
            $this->idSystemUser = 0;
            $this->systemUser = null;

            $this->database = new Database();
        }

        //Method to insert a userLogin into the database
        public function insertUserLogin(){
            $sqlQuery = "INSERT INTO userLogin (
                loginName
                , userPassword
                , isActive
                , idSystemUSer
            ) VALUES (
                '{$this->loginName}'
                , '{$this->userPassword}'
                , {$this->isActive}
                , {$this->idSystemUser}
            )";
            $this->database->query($sqlQuery);//Reusability
        }

        //Method to get all UserLogins from database
        public function getUsersLogin($isActive){
            $sqlQuery = "SELECT * FROM userLogin
                        WHERE isActive = {$isActive}";

            $systemUserData = $this->database->query($sqlQuery);//Collection from database
            $result = array();

            while($row = mysqli_fetch_object($systemUserData)){//Row receives a row from database collection
                array_push($result, $row);//result add the row
            }
            //result is basically all the rows grouped to simplify the return statement
            return $result; //Each index from the result represents a database row
        }
    }
?>