<?php
    include "connection_database.php";

    class User {
        public $username;
        public $email;
        private $password;

        public $em;
        public $na;
        public $pas;

        public function setpassword($password) {
            $this->password = $password;
        }
        public function getpassword() {
            return $this->password;
        }

        public function select() {
            $db = ConData::connection_database();
            $sql = "SELECT * FROM users";
            $users = $db->query($sql);
            $result = $users->fetchAll();
            return $result;
        }

        public function insert($em , $na , $pas) {
            $db = ConData::connection_database();
            $sql = "INSERT INTO users VALUES(NULL , '$na' , '$em' ,'$pas')";
            $users = $db->query($sql);
        }
    }


    $users = new User();
    // $users->insert("a" , "z@gmail.com" , "0000");
    var_dump($users->select());
?>