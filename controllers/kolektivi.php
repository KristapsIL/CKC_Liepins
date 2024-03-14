<?php

require "Database.php";

$config = require ("config.php");

$query = "SELECT * FROM kolektivi";
$params = [];

$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

require "views/kolektivi.view.php";