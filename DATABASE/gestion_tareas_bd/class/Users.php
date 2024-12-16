<?php
require_once "./class/Conection.php";

class Users{
    //metodo para obtener todos los usuarios
    public static function all() {
        $conection = Conection::connect(); //Objeto con la informacion de la bd

        //generar una consulta sql
        //creando la consulta
        $query = $conection->query("SELECT id_user, name, email FROM users");
        //ejecutando la consulta
        //$query->execute(); //true / false

        $result = $query->fetchAll(PDO::FETCH_ASSOC); //arreglo de datos de la consulta
        return $result;
    }
}