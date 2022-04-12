<?php
    include "connection_database.php";

    class User {
        public $username;
        public $email;
        private $password;

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
            var_dump($users->fetch());
        }
    }


    $users = new User();
    $users->select();
?>