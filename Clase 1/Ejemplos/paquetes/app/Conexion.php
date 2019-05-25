<?php

namespace App;

use PDO;
use PDOException;

class Conexion
{
    private $pdo;
 
    public function connect()
    {
        try {
            if ($this->pdo == null) {
                $this->pdo = new PDO('sqlite:' . Config::SQLITE_FILE);
            }

            return $this->pdo;
        } catch (PDOException $e) {
            var_dump($e);
        }
        
        return null;
    }
}