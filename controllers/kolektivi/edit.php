<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $query = "UPDATE kolektivi SET
  name = :name, description = :description WHERE id = :id;";
 $params = [
   ":name" => $_POST["name"],
    ":description" => $_POST["description"],
    ":id" => $_GET["id"]
 ];

  $db->execute($query, $params);
  header("Location: /kolektivi");
  die();
}
require "views/kolektivi/edit.view.php";