<?php
    include "connection_database.php";

    class User {
        // public $username;
        // public $email;
        // private $password;

        // public function setpassword($password) {
        //     $this->password = $password;
        // }
        // public function getpassword() {
        //     return $this->password;
        // }


        public $em;
        public $na;
        public $pas;

        public function select($id , $index) {
            $db = ConData::connection_database();
            $sql = "SELECT * FROM users WHERE id=$id";
            $users = $db->query($sql);
            $result = $users->fetch();
            return $result[$index];
        }

        public function insert($em , $na , $pas) {
            $db = ConData::connection_database();
            $sql = "INSERT INTO users VALUES(NULL , '$na' , '$em' ,'$pas')";
            $users = $db->query($sql);
        }

        public function delete($id) {
            $db = ConData::connection_database();
            $sql = "DELETE FROM users WHERE id=$id";
            $users = $db->query($sql);
        }

        public function update($id , $na , $em , $pas) {
            $db = ConData::connection_database();
            $sql = "UPDATE users SET usename = '$na', email = '$em', pass = '$pas' WHERE id=$id";
            $users = $db->query($sql);
        }  
    }


    $users = new User();
    // echo $users->select("1" , "email");   //Afichage
    // $users->insert("a" , "z@gmail.com" , "0000");     //Insert
    // $users->delete("6");   //Delete
    // $users->update("2" , "Zwaks" , "zwaks@gmail.com" , "0000");    //Update
?>