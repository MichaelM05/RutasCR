<?php

class Data {

    public $server;
    public $user;
    public $password;
    public $db;
    public $connection;
    public $isActive;

    public function Data() {
        $hostName = gethostname();
        
        switch ($hostName) {
            case "admin": //Joseph's PC
                $this->isActive = false;
                $this->server = "127.0.0.1";
                $this->user = "root";
                $this->password = "";
                $this->db = "routescr";
                break;
            default: //Hosting
                $this->isActive = false;
                $this->server = "mysql.hostinger.es";
                $this->user = "u536767961_rutas";
                $this->password = "expertos";
                $this->db = "u536767961_rutas";
                break;
        }
    }

}
