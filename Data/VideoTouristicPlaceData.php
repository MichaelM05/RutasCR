<?php

include_once 'Data.php';
include_once '../Domain/VideoTouristicPlace.php';

class VideoTouristicPlaceData extends Data {

    public function insertTBVideoTouristicPlace($videoTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryGetLastId = "select max(idtbvideotouristicplace) as idtbvideotouristicplace "
                . "from tbvideotouristicplace;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbvideotouristicplace values (" . $nextId .
                ",'" . $videoTouristicPlace->getVideoPath() .
                "'," . $videoTouristicPlace->getTouristicPlace() .
                ");";
        
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        
        return $result;
    }

    public function updateTBVideoTouristicPlace($videoTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbvideotouristicplace set " .
                "videopath = '" . $videoTouristicPlace->getVideoPath() .
                "', touristicplace = '" . $videoTouristicPlace->getTouristicPlace() .
                "' where idtbvideotouristicplace = " . $videoTouristicPlace->getIdVideoTouristicPlace() .
                ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBVideoTouristicPlace($idVideoTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "delete from tbvideotouristicplace where idtbvideotouristicplace = " .
                $idVideoTouristicPlace . ";";
        $result = mysqli_query($conn, $queryDelete);

        mysqli_close($conn);

        return $result;
    }

    public function getAllTBVideoTouristicPlacees() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbvideotouristicplace";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $videoTouristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentVideoTouristicPlace = new VideoTouristicPlace($row['idtbvideotouristicplace'], 
                    $row['videopath'], $row['touristicplace']);
            array_push($videoTouristicPlaces, $currentVideoTouristicPlace);
        }

        return $videoTouristicPlaces;
    }

    public function getVideoTouristicPlaceByPlace($idTouristicPlace) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbvideotouristicplace where touristicplace = " . 
                $idTouristicPlace . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $videoTouristicPlaces = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentVideoTouristicPlace = new VideoTouristicPlace($row['idtbvideotouristicplace'], 
                    $row['videopath'], $row['touristicplace']);
            array_push($videoTouristicPlaces, $currentVideoTouristicPlace);
        }

        return $videoTouristicPlaces;
    }

}