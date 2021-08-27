<?php

class User{

    private $userID;
    private $user_first_name;
    private $user_last_name;
    private $email;
    private $password;
    private $role;
    //private $profile_pic;

    public function __construct($id, $fname, $lname, $email, $pass, $role){
        $this->userID = $id;
        $this->user_first_name = $fname;
        $this->user_last_name = $lname;
        $this->email = $email;
        $this->password = $pass;
        $this->role = $role;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function setUserID($userID){
        $this->userID = $userID;
    }

    public function getUserFirstName(){
        return $this->user_first_name;
    }

    public function setUserFirstName($user_first_name){
        $this->user_first_name = $user_first_name;
    }

    public function getUserLastName(){
        return $this->user_last_name;
    }

    public function setUserLastName($user_last_name){
        $this->user_last_name = $user_last_name;
    }

    public function getUserEmail(){
        return $this->email;
    }

    public function setUserEmail($email){
        $this->email = $email;
    }

    public function getUserPassword(){
        return $this->password;
    }

    public function setUserPassword($password){
        $this->password = $password;
    }

    public function getUserRole(){
        return $this->role;
    }

    public function setUserRole($role){
        $this->role = role;
    }

    public function printUser(){
        echo "ID: " . $this->userID . "<br> First Name: "
        . $this->user_first_name . "<br> Last Name: "
        . $this->user_last_name . "<br> Email: "
        .$this->email . "<br> Pass: "
        .$this->password . "<br> Role: "
        .$this->role;
    }

}