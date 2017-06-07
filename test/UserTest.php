<?php

include_once '../Domain/User.php';
include_once '../Business/UserBusiness.php';

$user = new User(0, "admin", "admin@example.com", "admin", "admin", 1);

$userBusiness = new UserBusiness();

$result = $userBusiness->getAllTBUsers();

echo $result[0]->getUserName();


