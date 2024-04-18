<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>EDIT THE POST</h1>
<form method="POST">
    <label>Title:
        <input name="title" value='<?=$post["title"] ?? $_POST["title"]?>'/>
        <?php if (isset($errors["title"])) {?>
        <p class="id-invalid"><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>Category ID:
        <select name="category_id">
            <option value="1" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : ""?>>Sport</value>
            <option value="2" <?= ($_POST["category_id"] ?? $post["category_id"]) == 2 ? "selected" : ""?>>Music</value>
            <option value="3" <?= ($_POST["category_id"] ?? $post["category_id"]) == 3 ? "selected" : ""?>>Food</value>
        </select>
        <?php if (isset($errors["category_id"])) {?>
        <p class="id-invalid"><?= $errors["category_id"] ?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>
<?php require "views/components/footer.php" ?>