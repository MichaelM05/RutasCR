<?php
include_once '../Domain/User.php';
include_once '../Business/UserBusiness.php';


if(isset($_POST["insertUser"])){
    
    $name = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $userName = $_POST["txtUserName"];
    $password = $_POST["txtPassword"];
    
    $user = new User(0, $name, $email, $userName, $password,1);
    
    $userBusiness = new UserBusiness();
    $result = $userBusiness->insertTBUser($user);
    
    if($result){
        header("location: ../PresentationAdmin/CreateAdmin.php?success=success");
    }else{
        header("location: ../PresentationAdmin/CreateAdmin.php?error=error");
    }
   
}else if(isset ($_POST["deleteAdmin"])){
    
    $idUser = $_POST["idUser"];
    $userBusiness = new UserBusiness();
    $result = $userBusiness->deleteTBUser($idUser);
    
    if($result){
        header("location: ../PresentationAdmin/DeleteAdmin.php?success=success");
    }else{
        header("location: ../PresentationAdmin/DeleteAdmin.php?error=error");
    }
    
}