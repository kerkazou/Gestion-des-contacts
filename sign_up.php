<?php
    include "connection_database.php";


    $users = new User();
    $users->setpassword("zakaria");
    echo $users->getpassword();
?>