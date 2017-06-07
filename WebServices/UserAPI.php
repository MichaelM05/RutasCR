<?php

include_once '../Business/UserBusiness.php';

class UserAPI {

    public function API() {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                $this->getUsers();
                break;
            case 'POST'://inserta
                if($_GET['action'] == 'users') {
                    $this->insertUser();
                } else if($_GET['action'] == 'login'){
                    $this->login();
                }
                break;
            case 'PUT'://actualiza
                echo 'PUT';
                break;
            case 'DELETE'://elimina
                echo 'DELETE';
                break;
            default://metodo NO soportado
                echo 'METODO NO SOPORTADO';
                break;
        }
    }

    function getUsers() {
        if ($_GET['action'] == 'users') {
            $ub = new UserBusiness();
            if (isset($_GET['id'])) {//muestra 1 solo registro si es que existiera ID                 
                $response = $ub->getUserById($_GET['id']);
                echo json_encode($this->toArray($response), JSON_PRETTY_PRINT);
            } else { //muestra todos los registros                   
                $response = $ub->getAllTBUsers();
                $users = [];
                foreach ($response as $current) {
                    array_push($users, $this->toArray($current));
                }
                echo json_encode($users, JSON_PRETTY_PRINT);
            }
        } else {
            $this->response(400);
        }
    }

    function insertUser() {
        if ($_GET['action'] == 'users') {
            $ub = new UserBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->fullName, $obj->email, $obj->userName, $obj->userPassword, $obj->admin)) {
                $user = new User(0, $obj->fullName, $obj->email, $obj->userName, $obj->userPassword, $obj->admin);
                $result = $ub->insertTBUser($user);
                if ($result == 1) {
                    $this->response(200, "success", "new record added");
                } else {
                    $this->response(200, "error", "not record added");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

    function login() {
        if ($_GET['action'] == 'login') {
            $ub = new UserBusiness();
            //Decodifica un string de JSON
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(422, "error", "Nothing to add. Check json");
            } else if (isset($obj->userName, $obj->userPassword)) {
                $result = $ub->login($obj->userName, $obj->userPassword);
                if (!is_null($result)) {
                    echo json_encode($this->toArray($result), JSON_PRETTY_PRINT);
                } else {
                    $this->response(200, "error", "not user register");
                }
            } else {
                $this->response(422, "error", "The property is not defined");
            }
        } else {
            $this->response(400);
        }
    }

    function toArray($user) {
        $userArray = array('idUser' => $user->getIdUser(),
            'fullName' => $user->getFullName(),
            'email' => $user->getEmail(),
            'userName' => $user->getUserName(),
            'userPassword' => $user->getUserPassword(),
            'admin' => $user->getAdmin());
        return $userArray;
    }

    function response($code, $status, $message) {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "message" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

}

$userAPI = new UserAPI();
$userAPI->API();
