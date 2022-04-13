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
                echo '<h1>This user is a relly exated</h1>';
                // header("location:index.php?errour=This user is a relly exated");
            }else{
                $users->insert($username , $email , $pass);
                header("location:contacts.html");
            }
        }else{
            echo "no";
        }
    }

    else{
        echo "no";
    }


// echo $username ;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $pass;
// echo "<br>";
// echo $conf_pass;