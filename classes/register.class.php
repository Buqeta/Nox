<?php

require 'dbh.class.php';

class Register extends Dbh{

    public function registerUser($firstName, $lastName, $email, $password){

        // $user = $this->userExists($email);

        // print_r($user);

        
        if($this->emptyInputs($firstName, $lastName, $email, $password) === true)
            header("Location: ../register.php?error=emptyFields");

        else if($this->validateNames($firstName) === 0 || $this->validateNames($firstName) === false)
            header("Location: ../register.php?error=invalidFirstName");

        else if($this->validateNames($lastName) === 0 || $this->validateNames($lastName) === false)
            header("Location: ../register.php?error=invalidLastName");
           
        else if($this->validateEmail($email) === 0 || $this->validateEmail($email) === false)
            header("Location: ../register.php?error=invalidEmail");
  
        else if($this->validatePassword($password) === 0 || $this->validatePassword($password) === false)
            header("Location: ../register.php?error=invalidPassword");
           
        else if(!empty($this->userExists($email)))
            header("Location: ../register.php?error=userExists");
        else{
            $this->addUser($firstName, $lastName, $email, $password);
            header("Location: ../register.php?error=success");
        }
    }

    private function emptyInputs($firstName, $lastName, $email, $password){
        if($firstName === "" || $lastName === "" || $email === "" || $password === "")
            return true;
    }

    private function userExists($email){
        $sql = 'SELECT * FROM User WHERE User_Email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();
        return $results;
    }

    private function validateNames($firstName){
        $regex = '/[a-zA-Z]{2,}/';
        $result = preg_match($regex, $firstName);
        return $result;
    }

    private function validateEmail($email){
        $regex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
        $result = preg_match($regex, $email);
        return $result;
    }

    private function validatePassword($password){
        $regex = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';
        $result = preg_match($regex, $password);
        return $result;
    }

    private function addUser($firstName, $lastName, $email, $password){
        $sql = 'INSERT INTO User VALUES (null, ?, ?, ?, ?, 0)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$firstName, $lastName, $email, $password]);

    }


}