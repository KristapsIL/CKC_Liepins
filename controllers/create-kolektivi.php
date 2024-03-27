<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if(trim($_POST["kolektivs"]) == null){
        $errors["kolektivs"] = "kolektivs can not be empty";
    }
    if(strlen($_POST["kolektivs"]) > 255){
        $errors["kolektivs"] = "kolektivs can not be longer than 255 chars";
    }
    if(trim($_POST["apraksts"]) == null){
        $errors["apraksts"] = "apraksts can not be empty";
    }
    if(strlen($_POST["apraksts"]) > 255){
        $errors["apraksts"] = "apraksts can not be longer than 255 chars";
    }
    if(empty($errors)){
        $query = "INSERT INTO kolektivi (name, description) 
        VALUES (:kolektivs, :apraksts);";
        $params = [
            ":kolektivs" => $_POST["kolektivs"],
            ":apraksts" => $_POST["apraksts"]
        ];
        $db->execute($query, $params);
    
        header("Location: /kolektivi");
        die();
    }

}

$title = "Create Pasakumi";
require "views/create-kolektivi.view.php";