<?php
$config = require("config.php");
require "Database.php";
require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (!Validator::string($_POST["title"], min: 1, max: 255)) {
        $errors["title"] = "Title cannot be empty or too long";
    }

    if ($_POST["category_id"] > 3) {
        $errors["category_id"] = "Category ID invalid";
    }

    if (empty($errors)) {
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
}

$title = "Augstākā būtne";
require "views/posts/edit.view.php";
?>