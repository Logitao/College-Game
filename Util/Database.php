<?php

    class database{
        private $Server;
        private $User;
        private $Password;
        private $Database;

        public function __construct(){
            $this->Server = "127.0.0.1";
            $this->User = "root";
            $this->Password = "1234";
            $this->Database = "collegegame";
        }

        private function Connect(){
            $Connection = mysqli_connect($this->Server, $this->User, $this->Password, $this->Database);
            return $Connection;
        }

        public function Query($SqlQuery){
            $Connection = $this->Connect();
            $Result = mysqli_query($Connection, $SqlQuery);
            return $Result;
        }
    }

?>