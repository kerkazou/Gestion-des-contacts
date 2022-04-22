<?php
    if(isset($_POST['logout'])){
        include "class_user.php";
        $users->logout();
    }else{
        header("location:contacts.php");
    }