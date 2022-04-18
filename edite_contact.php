<?php
    include "class_contact.php";

    // update contact
    if(isset($_POST['edite_contact'])){
        $idc = $_POST['idc'];
        $username = htmlspecialchars($_POST['username_e']);
        $phone = $_POST['phone_e'];
        $email = htmlspecialchars($_POST['email_e']);
        $adress = htmlspecialchars($_POST['adress_e']);

        $pattern_username = "/[a-zA-Z]{3}/";
        $pattern_email = "/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/";

        if(($username != NULL) && (preg_match($pattern_username,$username)) && (strlen($phone) == 10) && ($email != NULL) && (preg_match($pattern_email,$email))){
            Contact::update($username , $phone , $email , $adress , $idc);
                header("location:contacts.php");
        }else{
            echo "Pls, fill the all field.";
        }
    }else{
        echo "You are not allowed to access this page, Pls return to the main page to fill out the forms.";
    }