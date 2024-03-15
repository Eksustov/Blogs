<?php
$config = require("config.php");

require "Database.php";

$query = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != NULL) {
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}

if (isset($_GET["name"]) && $_GET["name"] != NULL) {
    $query = "SELECT * FROM posts JOIN categories on categories.id = posts.category_id";
    $name = trim($_GET["name"]);
    $query .= " WHERE name=:name";
    $params = [":name" => $name];
}

$db = new Database($config);
$posts = $db
        ->execute($query, $params)
        ->fetchAll();

    $title = "MANI POSTI";
    include "views/index.view.php";
?>