<?php

namespace homePage\util;

class Sql
{
    private $connection;

    public function __construct ()
    {
        try {
            $this->connection = new \PDO(
                'mysql:host='.Config::getDbHost().';
                dbname='.Config::getDbName(),
                Config::getDbUser(),
                Config::getDbPass()
            );
        } catch (PDOException $e) {
            echo "ERROR: Can't establishe database connection!";
            die();
        }
    }

    public function query ($query)
    {
        try {
            $response = $this->connection->query($query)->fetchAll();
        } catch (PDOException $e) {
            echo "ERROR: Can't provide SQL query.";
            die();
        }
        return $response[0];
    }
}
