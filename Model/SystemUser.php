<?php
    class SystemUser{
        public $Id;
        public $Username;
        public $Email;
        public $Score;

        public __construct(){
            $this->Id = 0;
            $this->Username = "";
            $this->Email = "";
            $this->Score = 0;
        }
    }
?>