<?php

require "Database.php";
$config = require ("config.php");

$params[":id"] = $_GET["id"];
$query = "SELECT * FROM kolektivi WHERE id = :id";

$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Pasākumi";
require "views/kolektivi/show.view.php";