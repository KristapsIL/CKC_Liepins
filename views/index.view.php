<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= $post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"] ?></li>
    <?php } ?>
    </ul>
    <form>
        <input name='date_time' value='<?= ($_GET["date_time"] ?? "") ?>'/>
        <input name='nosaukums' value='<?= ($_GET["nosaukums"] ?? "") ?>'/>
        <input name='norises_vieta' value='<?= ($_GET["norises_vieta"] ?? "") ?>'/>
        <button >Submit</button>
    </form>
<?php require "components/footer.php" ?>