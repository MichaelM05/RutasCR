<?php

include '../Data/UserData.php';

class UserBusiness {

    private $userData;
    
    function UserBusiness () {
        $this->userData = new UserData();
    }
    
    public function insertTBUser($user) {
        return $this->userData->insertTBUser($user);
    }

    public function updateTBUser($user) {
        return $this->userData->updateTBUser($user);
    }

    public function deleteTBUser($idUser) {
        return $this->userData->deleteTBUser($idUser);
    }

    public function getAllTBUsers() {
        return $this->userData->getAllTBUsers();
    }

    public function getUserById($idUser) {
        return $this->userData->getUserById($idUser);
    }
    
    public function login($userName, $userPassword) {
        return $this->userData->login($userName, $userPassword);
    }
    
}
