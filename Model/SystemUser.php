<?php
    include_once "Util/Database.php";//Once is extremely necessary in order to work together with other models

    //SystemUser database representation
    class SystemUser{
        //Properties
        public $id;
        public $username;
        public $email;
        public $score;

        //Database Property
        private $database;

        //Constructor
        public function __construct(){
            $this->id = 0;
            $this->username = "";
            $this->email = "";
            $this->score = 0;

            $this->database = new Database();
        }

        //Method to insert SystemUser into database
        public function insertSystemUser(){
            $sqlQuery = "INSERT INTO systemUser (
                username
                , email
                , score
            ) Values(
                '{$this->username}'
                , '{$this->email}'
                , {$this->score}
            )";
            $this->database->query($sqlQuery);//Reusability
        }
    }
?>