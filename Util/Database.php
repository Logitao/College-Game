<?php
    //Class that represents the database connection
    class database{
        //Properties
        private $server;
        private $user;
        private $password;
        private $database;

        //Constructor
        public function __construct(){
            $this->server = "127.0.0.1";
            $this->user = "root";
            $this->password = "1234";
            $this->database = "collegegame";
        }

        //Opening the connection with the database
        private function connect(){
            $connection = mysqli_connect($this->server, $this->user, $this->password, $this->database);
            return $connection;
        }

        //Executing SQL statement
        public function query($sqlQuery){
            $connection = $this->connect();
            $result = mysqli_query($connection, $sqlQuery);
            return $result;//Only used if you need database return
        }
    }

?>