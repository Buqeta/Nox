<?php

require 'dbh.class.php';

class LogIn extends Dbh{

    // public function __construct(){
        
    //     $this->connect();
    // }

    public function log($email, $password){
        $res= $this->getUser($email, $password);

        //print_r($res); 
        
        if($res === null || $res == false){
            return false;
        }
        else{

            $id = $res[0]["UserID"];
            $fname = $res[0]["User_First_Name"];
            $lname = $res[0]["User_Last_Name"];
            $email = $res[0]["User_Email"];
            $pass = $res[0]["Password"];
            $role = $res[0]["role"];

            $user = $this->createUser($id, $fname, $lname, $email, $pass, $role);
            $this->setSession($user); 
            header("Location: ../index.php");
        }

    }

    private function getUser($email, $password){
        $sql = 'SELECT * FROM User WHERE User_Email = ? AND Password = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password]);

        $results = $stmt->fetchAll();
        return $results;
    }

    private function createUser($id, $fname, $lname, $email, $pass, $role){
        $user = new User($id, $fname, $lname, $email, $pass, $role);
        return $user;
    }

    private function setSession($user){
        session_start();
        $_SESSION['userID'] = $user->getUserID();
        $_SESSION['userFirstName'] = $user->getUserFirstName();
        $_SESSION['userLastName'] = $user->getUserLastName();
        $_SESSION['userEmail'] = $user->getUserEmail();
        $_SESSION['role'] = $user->getUserRole();
    }

    
}