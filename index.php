<?php
$config = require("config.php");

require "function.php";
require "Database.php";

$query = "SELECT * FROM posts JOIN categories on categories.id = posts.category_id";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] != NULL) {
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}

if (isset($_GET["name"]) && $_GET["name"] != NULL) {
    $name = $_GET["name"];
    $query .= " WHERE name=:name";
    $params = [":name" => $name];
}

$db = new Database($config);
$posts = $db
        ->execute($query, $params)
        ->FetchAll();

echo "<form>";
echo "<input name='id' />";
echo "<button>Submit ID</button>";
echo "</form>";

echo "<form>";
echo "<input name='name' />";
echo "<button>Submit Category</button>";
echo "</form>";

echo "<h1>Posts</h1>";

//dd($posts);

echo "<ul>";
foreach($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";

?>