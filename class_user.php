<?php
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
    }


    


    // $users = new User();
    // $users->setpassword("zakaria");
    // echo $users->getpassword();
?>