<?php
    include "class_contact.php";
    
    // Delete contact
    if(isset($_POST['delete_contact'])){
        echo $_POST['idc'];
        $idc = $_POST['idc'];
        Contact::delete($idc);
        header("location:contacts.php");
    }else{
        echo "You are not allowed to access this page, Pls return to the main page to fill out the forms.";
    }