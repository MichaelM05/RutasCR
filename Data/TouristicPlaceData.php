<?php

include_once 'Data.php';
include_once '../Domain/TouristicPlace.php';

class TouristicPlaceData extends Data {

    public function insertTBTouristicPlace($touristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbtouristicplace) as idtbtouristicplace "
                . "from tbtouristicplace;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbtouristicplace values (" . $nextId .
                ",'" . $touristicPlace->getNameTouristicPlace() .
                "','" . $touristicPlace->getDescriptionTouristicPlace() .
                "'," . $touristicPlace->getLatitude() .
                "," . $touristicPlace->getLength() .
                "," . $touristicPlace->getPrice() .
                ",'" . $touristicPlace->getTypeActivity() .
                "');";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBTouristicPlace($touristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbtouristicplace set " .
                "nametouristicplace = '" . $touristicPlace->getNameTouristicPlace() .
                "', descriptiontouristicplace = '" . $touristicPlace->getDescriptionTouristicPlace() .
                "', latitude = " . $touristicPlace->getLatitude() .
                ", length = " . $touristicPlace->getLength() .
                ", price = " . $touristicPlace->getPrice() .
                ", typeactivity = '" . $touristicPlace->getTypeActivity() .
                "' where idtbtouristicplace = " . $touristicPlace->getIdTouristicPlace() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBTouristicPlace($idTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbtouristicplace where idtbtouristicplace = " . $idTouristicPlace . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBTouristicPlacees() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbtouristicplace";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $touristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentTouristicPlace = new TouristicPlace($row['idtbtouristicplace'], 
                    $row['nametouristicplace'], $row['descriptiontouristicplace'], 
                    $row['latitude'], $row['length'], $row['price'], 
                    $row['typeactivity']);
            array_push($touristicPlaces, $currentTouristicPlace);
        }

        return $touristicPlaces;
    }

    public function getTouristicPlaceById($idTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbtouristicplace where idtbtouristicplace = " . 
                $idTouristicPlace . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentTouristicPlace = new TouristicPlace($row['idtbtouristicplace'], 
                    $row['nametouristicplace'], $row['descriptiontouristicplace'], 
                    $row['latitude'], $row['length'], $row['price'], 
                    $row['typeactivity']);

        return $currentTouristicPlace;
    }
    
    public function getTouristicPlaceByLocation($latitude, $length) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbtouristicplace where latitude = " . 
                $latitude . " and length = " . $length . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentTouristicPlace = new TouristicPlace($row['idtbtouristicplace'], 
                    $row['nametouristicplace'], $row['descriptiontouristicplace'], 
                    $row['latitude'], $row['length'], $row['price'], 
                    $row['typeactivity']);

        return $currentTouristicPlace;
    }

}
