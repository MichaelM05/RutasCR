<?php

include_once 'Data.php';
include_once '../Domain/PredesignedRouteTouristicPlace.php';

class PredesignedRouteTouristicPlaceData extends Data {

    public function insertTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbpredesignedroutetouristicplace) as "
                . "idtbpredesignedroutetouristicplace "
                . "from tbpredesignedroutetouristicplace;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbpredesignedroutetouristicplace values (" . $nextId .
                "," . $predesignedRouteTouristicPlace->getRoute() .
                "," . $predesignedRouteTouristicPlace->getTouristicPlace() .
                ");";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBPredesignedRouteTouristicPlace($predesignedRouteTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbpredesignedroutetouristicplace set " .
                "route = '" . $predesignedRouteTouristicPlace->getRoute() .
                "', touristicplace = " . $predesignedRouteTouristicPlace->getTouristicPlace() .
                " where idtbpredesignedroutetouristicplace = " . 
                $predesignedRouteTouristicPlace->getIdPredesignedRouteTouristicPlace() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBPredesignedRouteTouristicPlace($idPredesignedRouteTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbpredesignedroutetouristicplace where idtbpredesignedroutetouristicplace = " .
                $idPredesignedRouteTouristicPlace . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }
    
    public function deleteTBPredesignedRouteTouristicPlaceByRoute($idRoute) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbpredesignedroutetouristicplace where route = " .
                $idRoute . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBPredesignedRouteTouristicPlaces() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbpredesignedroutetouristicplace";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $predesignedRouteTouristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPRTP = new PredesignedRouteTouristicPlace($row['idtbpredesignedroutetouristicplace'], 
                    $row['route'], $row['touristicplace']);
            array_push($predesignedRouteTouristicPlaces, $currentPRTP);
        }

        return $predesignedRouteTouristicPlaces;
    }

    public function getPredesignedRouteTouristicPlaceByRoute($idRoute) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbpredesignedroutetouristicplace where route = " . 
                $idRoute . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $predesignedRouteTouristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPRTP = new PredesignedRouteTouristicPlace($row['idtbpredesignedroutetouristicplace'], 
                    $row['route'], $row['touristicplace']);
            array_push($predesignedRouteTouristicPlaces, $currentPRTP);
        }

        return $predesignedRouteTouristicPlaces;
    }

}
