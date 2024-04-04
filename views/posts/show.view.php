<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>EAT THE POST</h1>
<p><?= htmlspecialchars($post["title"])?></p>
<a href="/edit?id=<?= $post["id"]?>">EDIT...</a>
<?php require "views/components/footer.php" ?>