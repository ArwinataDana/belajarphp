<?php

class Database
{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "db_mhs";
    public $conn;

    public function __construct()
    {
        $this->koneksi();
    }

    public function koneksi()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            die("Koneksi Gagal : " . $this->conn->connect_error);
        }
    }
}

?>