<?php
$config = require("config.php");
require "function.php";
require"Database.php";

$db = new Database($config);
$posts = $db
        ->execute("SELECT * FROM posts")
        ->FetchAll();

echo "hi";

//dd($posts);

echo "<ul>";
foreach($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";

?>
