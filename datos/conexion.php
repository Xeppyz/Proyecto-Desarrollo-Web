<?php

class Conexion
{
    private string $host;
    private string $db;
    private string $user;
    private string $password;
    private string $charset;

    public function __construct()
    {
        $this->host = "localhost";
        $this->db = "dbkermesse";
        $this->user = "root";
        $this->password = "Speedo08";
        $this->charset = "utf8mb4";
    }

    public function conectar()
    {
        $con = "mysql:host={$this->host}; dbname={$this->db}; charset={$this->charset}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        $pdo = new PDO($con, $this->user, $this->password, $options);
        return $pdo;
    }
}