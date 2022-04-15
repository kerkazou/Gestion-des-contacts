<?php
    include "connection_database.php";

    class User {
        // Session
            // creat session
        public function creat_session($user) {
            session_start();
            $_SESSION['last_login'] = date("Y-m-d H:i:s");
            $_SESSION['timeout'] = time();
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['pass'];
            $_SESSION['username'] = $user['usename'];
            $_SESSION['id'] = $user['id'];
        }
            // temps pour clear session
        public function timeout() {
            if (time() - $_SESSION['timeout'] > 60) {
                header("location:index.php");
            }
        }

        // craet setcookie
        public function creat_setcookie($usernamec , $emailc , $passwordc) {
            setcookie('username' , $usernamec , time() + 60 , null , null , false , true);
            setcookie('email' , $emailc , time() + 60 , null , null , false , true);
            setcookie('password' , $passwordc , time() + 60 , null , null , false , true);
        }
        
        // Sign up
            // test sur le compts est exixte 
        public function user_existed($email) {
            $db = ConData::connection_database();
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $users = $db->query($sql);
            $result = $users->fetch();
            return $result;
        }
            // ajout a new compts
        public function insert($em , $na , $pas) {
            $db = ConData::connection_database();
            $sql = "INSERT INTO users VALUES(NULL , '$em' , '$na' ,'$pas' , sysdate())";
            $users = $db->query($sql);
        }

        // Sign in
        public function login($email , $password) {
            $db = ConData::connection_database();
            $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
            $users = $db->query($sql);
            $result = $users->fetch();
            return $result;
        }


        // public function select($id , $index) {
        //     $db = ConData::connection_database();
        //     $sql = "SELECT * FROM users WHERE id=$id";
        //     $users = $db->query($sql);
        //     $result = $users->fetch();
        //     return $result[$index];
        // }

        // public function delete($id) {
        //     $db = ConData::connection_database();
        //     $sql = "DELETE FROM users WHERE id=$id";
        //     $users = $db->query($sql);
        // }

        // public function update($id , $na , $em , $pas) {
        //     $db = ConData::connection_database();
        //     $sql = "UPDATE users SET usename = '$na', email = '$em', pass = '$pas' WHERE id=$id";
        //     $users = $db->query($sql);
        // }
    }


    $users = new User();

    // var_dump($users->login("zakaria@gmail.com" , "96e79218965eb72c92a549dd5a330112"));
    
    // echo $users->select("1" , "email");   //Afichage
    // $users->insert("a" , "z@gmail.com" , "0000");     //Insert
    // $users->delete("6");   //Delete
    // $users->update("2" , "Zwaks" , "zwaks@gmail.com" , "0000");    //Update
?>