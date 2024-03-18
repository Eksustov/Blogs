<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO posts (titles, category_id)
    VALUES (:title, :category_id);";
}
$title = "Augstākā būtne";
require "views/posts-create.view.php";