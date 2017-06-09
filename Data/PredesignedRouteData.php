<?php

include_once 'Data.php';
include_once '../Domain/PredesignedRoute.php';

class PredesignedRouteData extends Data {

    public function insertTBPredesignedRoute($predesignedRoute) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbpredesignedroute) as idtbpredesignedroute "
                . "from tbpredesignedroute;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbpredesignedroute values (" . $nextId .
                ",'" . $predesignedRoute->getNamePredesignedRoute() .
                "'," . $predesignedRoute->getUser() .
                ");";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBPredesignedRoute($predesignedRoute) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbpredesignedroute set " .
                "nameroute = '" . $predesignedRoute->getNamePredesignedRoute() .
                "', usercreate = " . $predesignedRoute->getUser() .
                " where idtbpredesignedroute = " . $predesignedRoute->getIdPredesignedRoute() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBPredesignedRoute($idPredesignedRoute) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbpredesignedroute where idtbpredesignedroute = " .
                $idPredesignedRoute . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBPredesignedRoutees() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbpredesignedroute;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $predesignedRoutes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPredesignedRoute = new PredesignedRoute($row['idtbpredesignedroute'], 
                    $row['nameroute'], $row['usercreate']);
            array_push($predesignedRoutes, $currentPredesignedRoute);
        }

        return $predesignedRoutes;
    }

    public function getPredesignedRouteByUser($idUser) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbpredesignedroute where usercreate = " . 
                $idUser . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $predesignedRoutes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPredesignedRoute = new PredesignedRoute($row['idtbpredesignedroute'], 
                    $row['nameroute'], $row['usercreate']);
            array_push($predesignedRoutes, $currentPredesignedRoute);
        }

        return $predesignedRoutes;
    }
    
    public function getPredesignedRouteByName($routeName){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbpredesignedroute where nameroute = '" . 
                $routeName . "';";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $idRoute = $row['idtbpredesignedroute']; 

        return $idRoute;
    }

}