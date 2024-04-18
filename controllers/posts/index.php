<?php
guest();
$config = require("config.php");

require "Database.php";

$query = "SELECT posts.* FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != NULL) {
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}

if (isset($_GET["name"]) && $_GET["name"] != NULL) {
    $name = trim($_GET["name"]);
    $query = "SELECT posts.* FROM posts JOIN categories ON categories.id = posts.category_id WHERE name=:name";
    $params = [":name" => $name];
}

$db = new Database($config);
$posts = $db
        ->execute($query, $params)
        ->fetchAll();

    $title = "MANI POSTI";
    include "views/posts/index.view.php";
?>