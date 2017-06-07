<?php

include_once './Data.php';
include '../Domain/ImageTouristicPlace.php';

class ImageTouristicPlaceData extends Data {

    public function insertTBImageTouristicPlace($imageTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbimagetouristicplace) as idtbimagetouristicplace "
                . "from tbimagetouristicplace;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbimagetouristicplace values (" . $nextId .
                ",'" . $imageTouristicPlace->getImagePath() .
                "'," . $imageTouristicPlace->getTouristicPlace() .
                ");";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBImageTouristicPlace($imageTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbimagetouristicplace set " .
                "imagepath = '" . $imageTouristicPlace->getImagePath() .
                "', touristicplace = " . $imageTouristicPlace->getTouristicPlace() .
                " where idtbimagetouristicplace = " . $imageTouristicPlace->getIdImageTouristicPlace() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageTouristicPlace($idImageTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbimagetouristicplace where idtbimagetouristicplace = " .
                $idImageTouristicPlace . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageTouristicPlacees() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbimagetouristicplace";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $imageTouristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageTouristicPlace = new ImageTouristicPlace($row['idtbimagetouristicplace'], 
                    $row['imagepath'], $row['touristicplace']);
            array_push($imageTouristicPlaces, $currentImageTouristicPlace);
        }

        return $imageTouristicPlaces;
    }

    public function getImageTouristicPlaceById($idImageTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbimagetouristicplace where idtbimagetouristicplace = " . 
                $idImageTouristicPlace . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentImageTouristicPlace = new ImageTouristicPlace($row['idtbimagetouristicplace'], 
                    $row['imagepath'], $row['touristicplace']);

        return $currentImageTouristicPlace;
    }

}
