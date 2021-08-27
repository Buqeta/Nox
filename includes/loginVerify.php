<?php

require '../classes/login.class.php';
require '../classes/user.class.php';

if(isset($_POST['LogInBtn'])){
        
    $email = $_POST['email'];
    $password = $_POST['password'];

    $a = new LogIn();

    $b = $a->log($email, $password);

    echo "test";
    print_r($b);

    if($b === false){
        header("Location: ../login.php?error=userNull");
    }
    else{
        header("Location: ../index.php");
    }   



}