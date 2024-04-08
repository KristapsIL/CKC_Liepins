<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if($_POST["date_time"] == null){
        $errors["date_time"] = "Time can not be empty";
    }
    if(!Validator::string($_POST["nosaukums"], min: 1, maxlen: 255)){
        $errors["nosaukums"] = "Name is too long or empty";
    }
    if(!Validator::string($_POST["norises_vieta"], min: 1, maxlen: 255)){
        $errors["norises_vieta"] = "Norises vieta is too long or empty";
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
require "views/pasakumi/create.view.php";