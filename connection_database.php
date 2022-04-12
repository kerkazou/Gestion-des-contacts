<?php
    class ConData {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";

        public function connection_database() {
            $connect = new PDO("mysql:host=$this->servername;dbname=gestion_des_contacts", $this->username, $this->password);
            if(!$connect){
                die('error!');
            }
            return $this->connect = $connect;
        }
    }

    // $connection = new ConData();
    // $connection->connection_database();
?>