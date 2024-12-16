<?php

class Conection {

    //metodo que conecte a la bd
    public static function connect() {
        try {
            $dsn = 'mysql:host=localhost;dbname=manager_task;charset=utf8';
            $user = 'root';
            //creando la instancia
            $pdo = new PDO($dsn, $user);
            return $pdo; //retorna un objeto
        } catch (PDOException $e) {
            echo "Error al conectarnos a la base de datos". $e->getMessage();
            exit();
        }
    }
}