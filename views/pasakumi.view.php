<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= $post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"] ?></li>
    <?php } ?>
    </ul>
<?php require "components/footer.php" ?>