<?php

namespace App;

use PDO;

class ORM
{
    private $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function createTabla(string $tabla)
    {
        $query = $this->getQueryTabla($tabla);

        return $this->pdo->exec($query);
    }
 
    
    public function getQueryTabla(string $tabla)
    {
        $tablas = [
            'usuarios' => '
                CREATE TABLE IF NOT EXISTS usuarios (
                    id       INTEGER PRIMARY KEY,
                    nombre   TEXT NOT NULL,
                    password TEXT NOT NULL
                  )',
            'ordenes' => '
                CREATE TABLE IF NOT EXISTS ordenes (
                    id   INTEGER PRIMARY KEY,
                    tipo TEXT NOT NULL
                  )',
        ];

        if (!isset($tablas[$tabla])) {
            throw new Exception("Tabla {$tabla} no definida");
        }

        return $tablas[$tabla];
    }


    public function getListaTablas()
    {
        $statement = $this->pdo->query("
            SELECT *
            FROM sqlite_master
            WHERE type = 'table'
            ORDER BY name
        ");

        $tablas = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $tablas[] = $row;
        }
 
        return $tablas;
    }


    public function insertUsuario($datos)
    {
        $query = '
            INSERT INTO usuarios(nombre, password)
            VALUES (:nombre, :password)
        ';

        $statement = $this->pdo->prepare($query);
        // $statement->bindValue(':nombre', $datos['nombre'] ?? '');
        // $statement->bindValue(':password', $datos['password'] ?? '123');
        $statement->execute([
                ':nombre' => $datos['nombre'] ?? '',
                ':password' => $datos['password'] ?? '123',
            ]);

        return $this->pdo->lastInsertId();
    }


    public function updateUsuario($id, array $datos)
    {
        $query = '
            UPDATE usuarios
            SET 
                nombre = :nombre,
                password = :password
            WHERE id = :id
        ';

        $statement = $this->pdo->prepare($query);
        // $statement->bindValue(':id', $id);
        // $statement->bindValue(':nombre', $datos['nombre'] ?? '');
        // $statement->bindValue(':password', $datos['password'] ?? '123');
        
        return $statement->execute([
                ':id' => $id,
                ':nombre' => $datos['nombre'] ?? '',
                ':password' => $datos['password'] ?? '123',
            ]);
    }


    public function deleteUsuario($id)
    {
        $query = '
            DELETE
            FROM usuarios
            WHERE id = :id
        ';

        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':id', $id);
        
        return $statement->execute();
    }


    public function selectUsuario($id)
    {
        $query = '
            SELECT *
            FROM usuarios
            WHERE id = :id
        ';

        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':id', $id);

        if ($statement->execute()) {
            return $statement->fetch(PDO::FETCH_OBJ);
        }

        throw new Exception("Falló Query!");
    }
}