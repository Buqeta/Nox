<?php

require 'dbh.class.php';

class Register extends Dbh{

    public function registerUser($firstName, $lastName, $email, $password){

        $user = $this->userExists($email);
        
        if($this->validateNames($firstName) === 0 || $this->validateNames($firstName) === false){
            // header("Location: ../register.php?error=invalidFirstName");
            return "gabim first name";
        }
        else if($this->validateNames($lastName) === 0 || $this->validateNames($lastName) === false){
            // header("Location: ../register.php?error=invalidLastName");
            return "gabim last name";
        }
        else if($user !== null || $user !== false){
            // header("Location: ../register.php?error=userExists");
            return "user exists";
        }
        // else if(validateEmail($email) === false){
        //     header("Location: ../register.php?error=invalidEmail");
        // }
        // else if(validatePassword($password) === false){
        //     header("Location: ../register.php?error=invalidPassword");
        // }
        else{
            echo "mire jemi ";
        }
    }

    private function userExists($email){
        $sql = 'SELECT * FROM User WHERE User_Email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();
        return $results;
    }

    private function validateNames($firstName){
        $regex = '/[a-zA-Z]{2,}/g';
        $result = preg_match($regex, $firstName);
        return $result;
    }
}