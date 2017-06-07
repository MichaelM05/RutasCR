<?php

class User {

    private $idUser;
    private $fullName;
    private $email;
    private $userName;
    private $userPassword;
    private $admin;
    
    function User($idUser, $fullName, $email, $userName, $userPassword, $admin) {
        $this->idUser = $idUser;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->admin = $admin;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function getFullName() {
        return $this->fullName;
    }

    function getEmail() {
        return $this->email;
    }

    function getUserName() {
        return $this->userName;
    }

    function getUserPassword() {
        return $this->userPassword;
    }

    function getAdmin() {
        return $this->admin;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setUserPassword($userPassword) {
        $this->userPassword = $userPassword;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }
   
    
}
