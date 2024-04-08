<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if($_POST["date_time"] == null){
        $errors["date_time"] = "Time can not be empty";
    }
    if(!Validator::string($_POST["nosaukums"], min: 1, maxlen: 255)){
        $errors["nosaukums"] = "Name is too long or empty";
    }
    if(!Validator::string($_POST["norises_vieta"], min: 1, maxlen: 255)){
        $errors["norises_vieta"] = "Norises vieta is too long or empty";
    }
    if(empty($errors)){
        $query = "UPDATE pasakumi SET
        date_time = :date_time, nosaukums = :nosaukums, norises_vieta = :norises_vieta WHERE id = :id;";
       $params = [
           ":date_time" => $_POST["date_time"],
           ":nosaukums" => $_POST["nosaukums"],
           ":norises_vieta" => $_POST["norises_vieta"],
           ":id" => $_POST["id"]
       ];
   
       $db->execute($query, $params);
       header("Location: /");
       die();
    }
 
}
$params[":id"] = $_GET["id"];
$query = "SELECT * FROM pasakumi WHERE id = :id";
$post = $db->execute($query, $params)->fetch();

$title = "Edit";
require "views/pasakumi/edit.view.php";