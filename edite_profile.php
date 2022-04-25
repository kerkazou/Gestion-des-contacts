<?php
    session_start();
    if(isset($_POST['logout'])){
        include "class_user.php";
        $users->logout();
    }


    if(isset($_POST['save'])){
        include "connection_database.php";
        $image_name = $_FILES['image']['name'];
        $image_tmp =$_FILES['image']['tmp_name'];
        if(isset($_FILES['image']) && isset($_POST['usename']) && isset($_POST['password'])){
            include 'class_user.php';
            $users->update($_SESSION['username'] , $_SESSION['email'] , md5($_POST['password']) , $_SESSION['date_sign_up'] , $image_name , $_SESSION['id']);
            move_uploaded_file($image_tmp,"image/". $image_name);
            header("location:contacts.php");
        }else{
            echo 'Please select a profile pic';
        }
    }

?>