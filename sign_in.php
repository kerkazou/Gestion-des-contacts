<?php
    include "class_user.php";

    if(isset($_POST['sign_in'])){
        $email=htmlspecialchars($_POST['email']);
        $pass=md5($_POST['password']);
    
        $user = $users->login($email , $pass);

        if($user){
            $users->creat_session($user);
            header("location:contacts.php");
        }else{
            header("location:index.php#signin?error_signin");
        }

        if(isset($_POST['checked'])){
            $users->creat_setcookie($user['usename'] , $user['email'] , $user['pass']);
        }
    }