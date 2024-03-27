<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs Create</h1>
    <form method="POST">
        <label>Laiks:
            <input name='date_time' />
            <?php if(isset($errors["date_time"])) {?>
            <p class="error"><?= $errors["date_time"]?></p>
            <?php } ?>
        </label>
        <label>Nosaukums:
            <input name='nosaukums' />
            <?php if(isset($errors["nosaukums"])) {?>
            <p class="error"><?= $errors["nosaukums"]?></p>
            <?php } ?>
        </label>
        <label>Norises vieta:
            <input name='norises_vieta'/>
            <?php if(isset($errors["norises_vieta"])) {?>
            <p class="error"><?= $errors["norises_vieta"]?></p>
            <?php } ?>
        </label>
        <button >Submit</button>
    </form>
<?php require "components/footer.php" ?>