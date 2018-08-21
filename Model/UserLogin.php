<?php

    include "Util/Database.php";

    class UserLogin{
        public $Id;
        public $LoginName;
        public $UserPassword;
        public $IsActive;
        public $IdSystemUser;
        public $SystemUser;

        //Database property
        private $Database;

        public function __construct(){
            $this->Id = 0;
            $this->LoginName = "";
            $this->UserPassword = "";
            $this->IsActive = false;
            $this->IdSystemUser = 0;
            $this->SystemUser = null;

            $this->Database = new Database();
        }

        public function InsertUserLogin(){
            $SqlQuery = "INSERT INTO UserLogin (
                LoginName, UserPassword, IsActive, idSystemUSer
            ) VALUES (
                {$this->LoginName}, {$this->UserPassword}, {$this->IsActive}, {$this->IdSystemUser}
            )";
            $this->Database->Query($SqlQuery);
        }

    }
?>