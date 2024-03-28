<?php
$config = require("config.php");
require "Database.php";
// && trim($_POST["title"]) != "" && $_POST["category_id"] <=3 && strlen($_POST["title"]) <=255
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (trim($_POST["title"]) == "") {
        $errors["title"] = "Title cannot be empty";
    }

    if ($_POST["category_id"] > 3) {
        $errors["category_id"] = "Category ID invalid";
    }

    if (strlen($_POST["title"]) > 255) {
        $errors["title"] = "Title is too long";
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
require "views/posts/create.view.php";