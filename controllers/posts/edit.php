<?php
guest();
$config = require("config.php");
require "Database.php";
require "Validator.php";

$query = "SELECT * FROM posts where id = :id";
$params = [ ":id" => $_GET["id"]];
$db = new Database($config);
$post = $db
        ->execute($query, $params)
        ->fetch();

$validator = new Validator();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];

    if (!Validator::string($_POST["title"], min: 1, max:255)) {
        $errors["title"] = "Title cannot be empty or too long";
    }

    if (!Validator::number($_POST["category_id"], min: 1, max:3)) {
        $errors["category_id"] = "Category ID invalid";
    }

    if (empty($errors)) {
        $query = "UPDATE posts
        SET title = :title, category_id = :category_id
        WHERE id = :id;";
        $params = [
        ":title" => $_POST["title"], 
        ":category_id" => $_POST["category_id"],
        ":id" => $_GET["id"]
        ];
        $db = new Database($config);
        $db->execute($query, $params);
    
        header("Location: /");
        die();
    }
}

$title = "Augstākā būtne";
require "views/posts/edit.view.php";