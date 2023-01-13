<?php
class Connection
{
    protected function connect()
    {
        $DB_HOST = "localhost";
        $DB_NAME = "oop_login";
        $USERNAME = "root";
        $PASSWORD = "";
        $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;";

        try {
            $conn = new PDO($dsn, $USERNAME, $PASSWORD);
            return $conn;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }
}
