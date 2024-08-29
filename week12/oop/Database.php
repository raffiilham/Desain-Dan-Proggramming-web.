<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webprograming2023";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("connection failed: " . $this->conn->connect_error);
        }
    }
}