<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO pasakumi (date_time,nosaukums,norises_vieta)
    VALUES (:date_time, :nosaukumi, :norises_vieta);";
    $params = [
        ":title" => $_POST["date_time"],
        ":category_id" => $_POST["nosaukums"],
        ":norises_vieta" => $_POST["norises_vieta"]
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
}

$title = "Create";
require "views/create-pasakumi.php";