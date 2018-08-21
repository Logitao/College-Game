<?php
    //Test
    include "Model/Database.php";

    class SystemUser{
        public $Id;
        public $Username;
        public $Email;
        public $Score;

        //Database Variable
        private $Database;

        public function __construct(){
            $this->Id = 0;
            $this->Username = "";
            $this->Email = "";
            $this->Score = 0;

            $this->Database = new Database();
        }

        //Test method
        public function InsertSystemUser(){
            $SqlQuery = "INSERT INTO SystemUser (
                Username, Email, Score
            ) Values(
              'igor', 'igor.carlos@gmail.com', '10'
            )";
            $this->Database->Query($SqlQuery);
        }
    }
?>