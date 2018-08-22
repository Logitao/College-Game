<?php
    include_once "Util/Database.php";

    class SystemUser{
        public $Id;
        public $Username;
        public $Email;
        public $Score;

        //Database Property
        private $Database;

        public function __construct(){
            $this->Id = 0;
            $this->Username = "";
            $this->Email = "";
            $this->Score = 0;

            $this->Database = new Database();
        }

        //Method to insert SystemUser into database
        public function InsertSystemUser(){
            $SqlQuery = "INSERT INTO SystemUser (
                Username
                , Email
                , Score
            ) Values(
                '{$this->Username}'
                , '{$this->Email}'
                , {$this->Score}
            )";
            $this->Database->Query($SqlQuery);
        }
    }
?>