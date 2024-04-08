<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if(!Validator::string($_POST["kolektivs"], min: 2, maxlen: 255)){
        $errors["kolektivs"] = "kolektivs is empty or too long";
    }
    if(!Validator::string($_POST["apraksts"], min: 2, maxlen: 255)){
        $errors["apraksts"] = "apraksts is empty or too long";
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
require "views/kolektivi/create.view.php";