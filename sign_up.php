<?php
    include "class_user.php";

    if(isset($_POST['sign_up'])){
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $pass = md5($_POST['password']);
        $conf_pass = md5($_POST['conf_password']);

        $pattern_email = "/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/";
        $pattern_username = "/[a-zA-Z]{3}/";

        if(($username != NULL) && (preg_match($pattern_username,$username)) && ($email != NULL) && (preg_match($pattern_email,$email)) && ($pass != NULL) && ($conf_pass != NULL) && ($pass == $conf_pass)){
            if($users->user_existed($email)){
                header("location:index.php#signup?error_signup");
            }else{
                $users->insert($username , $email , $pass);
                header("location:index.php#signin");
                // fait la connection ici
            }
        }else{
            echo "Pls, fill the all field.";
        }
    }

    else{
        echo "You are not allowed to access this page, Pls return to the main page to fill out the forms.";
    }