<?php
    class UserLogin{
        public $Id;
        public $LoginName;
        public $UserPassword;
        public $IsActive;
        public $IdSystemUser;
        public $SystemUser;
        
        __construct(){
            $this->Id = 0;
            $this->LoginName = "";
            $this->UserPassword = "";
            $this->IsActive = false;
            $this->IdSystemUser = 0;
            $this->SystemUser = null;
        }
    }
?>