<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>EDIT THE POST</h1>
<form method="POST">
    <label>Title:
        <input name="title" value='<?= ($post["title"] ?? "" ) ?>'/>
        <?php if (isset($errors["title"])) {?>
        <p class="id-invalid"><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>Category ID:
        <select name="category_id" value='<?= ($post["category_id"])?>'>
            <option value="1">Sport</value>
            <option value="2">Music</value>
            <option value="3">Food</value>
        </select>
        <?php if (isset($errors["category_id"])) {?>
        <p class="id-invalid"><?= $errors["category_id"] ?></p>
        <?php } ?>
    </label>
    <button>Save</button>
</form>
<?php require "views/components/footer.php" ?>