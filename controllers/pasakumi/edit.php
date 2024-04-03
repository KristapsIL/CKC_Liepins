<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "UPDATE pasakumi SET
     date_time = :date_time, nosaukums = :nosaukums, norises_vieta = :norises_vieta WHERE id = :id;";
    $params = [
        ":date_time" => $_POST["date_time"],
        ":nosaukums" => $_POST["nosaukums"],
        ":norises_vieta" => $_POST["norises_vieta"],
        ":id" => $_GET["id"]

    ];

    $db->execute($query, $params);
    header("Location: /");
    die();
}
require "views/pasakumi/edit.view.php";