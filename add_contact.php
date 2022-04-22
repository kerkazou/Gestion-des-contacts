<?php
    include "class_contact.php";
    session_start();

    // ajout contact
    if(isset($_POST['add_contact'])){
        $username = htmlspecialchars($_POST['username']);
        $phone = $_POST['phone'];
        $email = htmlspecialchars($_POST['email']);
        $adress = htmlspecialchars($_POST['adress']);

        $pattern_username = "/[a-zA-Z]{3}/";
        $pattern_email = "/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/";

        if(($username != NULL) && (preg_match($pattern_username,$username)) && (strlen($phone) == 10) && ($email != NULL) && (preg_match($pattern_email,$email))){
            Contact::insert($username , $phone , $email , $adress , $_SESSION['id']);
                header("location:contacts.php#add");
        }else{
            echo "Pls, fill the all field.";
        }
    }else{
        header("location:contacts.php");
    }