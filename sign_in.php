<?php
    include "class_user.php";

    if(isset($_POST['sign_in'])){
        $email=htmlspecialchars($_POST['email']);
        $pass=md5($_POST['password']);
    
        $user = $users->login($email , $pass);
        if($user){
            session_start();
            $_SESSION['last_login'] = date("Y-m-d H:i:s");
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['pass'];
            $_SESSION['username'] = $user['usename'];
            $_SESSION['id'] = $user['id'];

            $_SESSION['timeout'] = time();
            if (time() - $_SESSION['timeout'] > 60) {
                header("location:contacts.php");
            }

            header("location:contacts.php");

            
            // if (!isset($_SESSION['timeout'])) {
            //     $_SESSION['timeout'] = time();
            // }

            // echo "<br>";
            // if (!isset($_SESSION['timeout'])) {
            //     $_SESSION['timeout'] = time();
            // } else if (time() - $_SESSION['timeout'] > 100) {
            //     echo "time expanded";
            // }

        }else{
            header("location:index.php#signin?errore");
            // echo "<h1>Your email or password is incorrect</h1>";
        }

        //     setcookie('email' , $_SESSION['email'] , time() + 60*60 , null , null , false , true);
        //     setcookie('password' , $_SESSION['password'] , time() + 60*60 , null , null , false , true);
        //     header("location:Dashboard.php");
        // }else{
        //     header("location:index.php?error=Your email or password is incorrect");
        // }
        // if(isset($_POST['checked'])){
        //     setcookie('emailr' , $_SESSION['email'] , time() + 60*60 , null , null , false , true);
        //     setcookie('passwordr' , $_SESSION['password'] , time() + 60*60 , null , null , false , true);
        // }

        // echo $email;
        // echo "<br>";
        // echo $pass;
    }else{
        header("location:index.php");
    }