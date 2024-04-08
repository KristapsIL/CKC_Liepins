<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Edit Kolektivi</h1>
    <form method="POST">
    <input name="id" value="<?= $post["id"] ?>" type="hidden">
        <label>Nosaukums
            <input name="name" value="<?= $_POST["name"] ?? "" ?>">
            <?php if(isset($errors["name"])) {?>
            <p class="error"><?= $errors["name"]?></p>
            <?php } ?>
        </label>
        <label>Apraksts
            <input name="description" value="<?= $_POST["description"] ?? "" ?>">
            <?php if(isset($errors["description"])) {?>
            <p class="error"><?= $errors["description"]?></p>
            <?php } ?>
        </label>
        <button>Submit</button>
    </form>


<?php require "views/components/footer.php" ?>