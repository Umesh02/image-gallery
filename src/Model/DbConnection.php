<?php

class DbConnection
{
    public function connect()
    {
        $conn = new PDO('mysql:host=localhost;dbname=gallery', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
