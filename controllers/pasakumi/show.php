<?php

require "Database.php";
$config = require ("config.php");

$params[":id"] = $_GET["id"];
$query = "SELECT * FROM pasakumi WHERE id = :id";

$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Pasākumi";
require "views/pasakumi/show.view.php";