<?php

require "function.php";

echo "hi";

$connection_string = "mysql:host=localhost;dbname=blog_pujats;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);

$query = $pdo->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);

echo "<ul>";
foreach($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";

?>
