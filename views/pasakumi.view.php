<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= htmlspecialchars($post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"]) ?>
        <form method="POST" action="/delete-pasakumi">
        <input type="hidden" name="id" value=" <?= $post['id'] ?>">
        <Button>Delete</Button>
        </form>
    </li>
    <?php } ?>
    </ul>
    

<?php require "components/footer.php" ?>
