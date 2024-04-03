<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Edit Kolektivi</h1>
    <form method="POST">
        <label>Nosaukums
            <input name="name" value="<?= $_POST["name"] ?? "" ?>">
        </label>
        <label>Apraksts
            <input name="description" value="<?= $_POST["description"] ?? "" ?>">
        </label>
        <button>Submit</button>
    </form>


<?php require "views/components/footer.php" ?>