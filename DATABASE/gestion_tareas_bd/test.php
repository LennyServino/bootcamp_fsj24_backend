<?php
require_once "./class/Tasks.php";

/* $users = Users::all();
echo json_encode($users, true); */

$task = new Task("Aprender PDO", "Utilizar PDO para la base de datos", 1);
$result = $task->save();
echo $result;