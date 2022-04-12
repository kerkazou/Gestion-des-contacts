<?php
    include "class_user.php";

    $email=htmlspecialchars($_POST['email']);
    $pass=md5($_POST['pass']);

    echo $email;
?>