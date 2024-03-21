<?php
$config = require("config.php");
require "Database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO posts (title, category_id)
    VALUES (:title, :category_id);";
    $params = [
        ":title" => $_POST["title"], 
        ":category_id" => $_POST["category_id"]
    ];
    $db = new Database($config);
    $db->execute($query, $params);
    
    header("Location: /");
    die();
}
    
$title = "Augstākā būtne";
require "views/posts-create.view.php";