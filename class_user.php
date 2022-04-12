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
            $query = $query = "SELECT * FROM users";
            $resu = mysqli_query($this->connect, $query);
            $users = mysqli_fetch_assoc($resu);
            var_dump($users);
        }
    }


    $users = new User();
    $users->select();
?>