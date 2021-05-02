<?php
 
    require "controllers/userController.php";
    $email=$_GET["email"];
    $check=checkEmail($email);
    if($check){
        echo "true";
    }else echo "false";
 
?>