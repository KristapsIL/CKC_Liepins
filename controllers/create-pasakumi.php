<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if(trim($_POST["date_time"]) == null){
        $errors["date_time"] = "Time can not be empty";
    }
    if(strlen($_POST["nosaukums"]) > 255){
        $errors["nosaukums"] = "Name can not be longer than 255 chars";
    }
    if(trim($_POST["nosaukums"]) == null){
        $errors["nosaukums"] = "nosaukums can not be empty";
    }
    if(strlen($_POST["norises_vieta"]) > 255){
        $errors["norises_vieta"] = "norises vieta can not be longer than 255 chars";
    }
    if(trim($_POST["norises_vieta"]) == null){
        $errors["norises_vieta"] = "norises vieta can not be empty";
    }

    if(empty($errors)){
        $query = "INSERT INTO pasakumi (date_time, nosaukums, norises_vieta) 
        VALUES (:date_time, :nosaukums, :norises_vieta);";
        $params = [
            ":date_time" => $_POST["date_time"],
            ":nosaukums" => $_POST["nosaukums"],
            ":norises_vieta" => $_POST["norises_vieta"]
        ];
        $db->execute($query, $params);
    
        header("Location: /");
        die();
    }

}

$title = "Create Pasakumi";
require "views/create-pasakumi.view.php";