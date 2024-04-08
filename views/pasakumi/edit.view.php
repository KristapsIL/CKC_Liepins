<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Edit pasakums</h1>
    <form method="POST">
        <input name="id" value="<?= $post["id"] ?>" type="hidden">
        <label>Laiks:
            <input name="date_time" type="datetime-local" value="<?= $_POST["date_time"] ?? $post["date_time"] ?>">
            <?php if(isset($errors["date_time"])) {?>
            <p class="error"><?= $errors["date_time"]?></p>
            <?php } ?>
        </label>
        <label>Nosaukums:
            <input name="nosaukums" value="<?= $_POST["nosaukums"] ?? $post["nosaukums"] ?>">
            <?php if(isset($errors["nosaukums"])) {?>
            <p class="error"><?= $errors["nosaukums"]?></p>
            <?php } ?>
        </label>
        <label>Norises vieta:
            <input name="norises_vieta" value="<?= $_POST["norises_vieta"] ?? $post["nosaukums"] ?>">
            <?php if(isset($errors["norises_vieta"])) {?>
            <p class="error"><?= $errors["norises_vieta"]?></p>
            <?php } ?>
        </label>
        <button>Submit</button>
    </form>


<?php require "views/components/footer.php" ?>