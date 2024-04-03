<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Edit pasakums</h1>
    <form method="POST">
        <label>Laiks:
            <input name="date_time" type="datetime-local" value="<?= $_POST["date_time"] ?? "" ?>">
        </label>
        <label>Nosaukums:
            <input name="nosaukums" value="<?= $_POST["nosaukums"] ?? "" ?>">
        </label>
        <label>Norises vieta:
            <input name="norises_vieta" value="<?= $_POST["norises_vieta"] ?? "" ?>">
        </label>
        <button>Submit</button>
    </form>


<?php require "views/components/footer.php" ?>