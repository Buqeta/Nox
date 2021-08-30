<?php

require '../classes/register.class.php';
require '../classes/user.class.php';

if(isset($_POST['LogInBtn'])){

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = new Register();

    echo $register->registerUser($firstName, $lastName, $email, $password);

}