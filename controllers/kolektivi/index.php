<?php

require "Database.php";

$config = require ("config.php");

$query = "SELECT * FROM kolektivi";
$params = [];

$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Kolektīvi";
require "views/kolektivi/index.view.php";