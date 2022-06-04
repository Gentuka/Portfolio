<?php

class Database
{
    private string $hostname;
    private string $username;
    private string $password;
    private string $database; 
    private object $conn;

    public function __construct(string $hostname, string $username, string $password, string $database)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->conn = new mysqli($this->hostname, $this->username, $this->password);

        $sql = sprintf('CREATE DATABASE %s', $this->database);
        $this->conn->query($sql);

        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }

    public function getConn(): object
    {
        return $this->conn;
    }

    /**
     * @param string $tablename
     * @return array<mixed>
     */
    public function getTableEntries(string $tablename): array
    {
        $sql = sprintf('SELECT * FROM `%s`', $tablename);
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * @return array<mixed>
     */
    public function getTables(): array
    {
        $sql = 'SHOW TABLES';
        $result = $this->conn->query($sql);
        $tables = $result->fetch_assoc();
        return $tables;
    }
}