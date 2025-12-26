<?php
session_start();
class db
{
    public $host = "localhost";
    public $username = 'u787607796_exquisits';
    public $passwords = "Exquisits1234@";
    public $database = "u787607796_exquisits";
    public $db;

    public function connection()
    {
        $this->db = new mysqli($this->host, $this->username, $this->passwords, $this->database);
        if ($this->db == true) {
            // echo 'connected';
            return $this->db;
        } else {
            die("connection error" . $this->db->connect_error);
        }
    }
}

// $database = new db();
// $database->connection();