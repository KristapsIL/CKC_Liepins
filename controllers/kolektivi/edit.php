<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $errors = [];
  
  if(!Validator::string($_POST["name"], min: 1, maxlen: 255)){
    $errors["name"] = "Kolektivs ir par garu vai tuks";
  }
  if(!Validator::string($_POST["description"], min: 1, maxlen: 255)){
    $errors["description"] = "Apraksts ir par garu vai tuks";
  }
  
  if(empty($errors)){
    $query = "UPDATE kolektivi SET
    name = :name, description = :description WHERE id = :id;";
   $params = [
     ":name" => $_POST["name"],
      ":description" => $_POST["description"],
      ":id" => $_POST["id"]
   ];
  
    $db->execute($query, $params);
    header("Location: /kolektivi");
    die();
  }
}
$params[":id"] = $_GET["id"];
$query = "SELECT * FROM pasakumi WHERE id = :id";
$post = $db->execute($query, $params)->fetch();

$title = "Edit";
require "views/kolektivi/edit.view.php";