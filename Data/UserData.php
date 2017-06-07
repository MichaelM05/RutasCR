<?php

include_once 'Data.php';
include_once '../Domain/User.php';

class UserData extends Data {

    public function insertTBUser($user) {
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbuser) as idtbuser "
                . "from tbuser;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbuser values (" . $nextId .
                ",'" . $user->getFullName() .
                "','" . $user->getEmail() .
                "','" . $user->getUserName() .
                "','" . $user->getUserPassword() .
                "'," . $user->getAdmin() .
                ");";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBUser($user) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbuser set " .
                "fullname = '" . $user->getFullName() .
                "', email = '" . $user->getEmail() .
                "', username = '" . $user->getUserName() .
                "', userpassword = '" . $user->getUserPassword() .
                "', isadmin = " . $user->getAdmin() .
                " where idtbuser = " . $user->getIdUser() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBUser($idUser) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbuser where idtbuser = " . $idUser . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBUsers() {
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbuser;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $users = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentUser = new User($row['idtbuser'], 
                    $row['fullname'], $row['email'], 
                    $row['username'], $row['userpassword'],
                    $row['isadmin']);
            array_push($users, $currentUser);
        }

        return $users;
    }

    public function getUserById($idUser) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbuser where idtbuser = " . 
                $idUser . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentUser = new User($row['idtbuser'], 
                    $row['fullname'], $row['email'], 
                    $row['username'], $row['userpassword'],
                $row['isadmin']);

        return $currentUser;
    }
    
    public function login($userName, $userPassword) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbuser where"
                . " username = '" . $userName . "' and userpassword = '"
                . $userPassword . "';";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        
        if(sizeof($row) == 0){
            return null;
        } else {
            $user = new User($row['idtbuser'], 
                    $row['fullname'], $row['email'], 
                    $row['username'], $row['userpassword'], $row['isadmin']);

            return $user;
        }
    }

}