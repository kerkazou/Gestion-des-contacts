<?php
    include "class_contact.php";
    
    // Delete contact
    if(isset($_POST['delete_contact'])){
        echo $_POST['idc'];
        $idc = $_POST['idc'];
        Contact::delete($idc);
        header("location:contacts.php#delete");
    }else{
        header("location:contacts.php");
    }