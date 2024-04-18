<?php
guest();
$config = require("config.php");
require "Database.php";
$db = new Database($config);

$query = "SELECT * FROM posts where id = :id";
$params = [ ":id" => $_GET["id"]];
$post = $db
        ->execute($query, $params)
        ->fetch();

$title = "SHOWING POST";
require "views/posts/show.view.php";
?>