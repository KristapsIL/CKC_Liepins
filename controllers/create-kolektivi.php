<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
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

$title = "Create Pasakumi";
require "views/create-kolektivi.view.php";