<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><a href="/show?id=<?= $post['id'] ?> "  >
    <?= htmlspecialchars($post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"]) ?></a>
        <form method="POST" action="/delete-pasakumi">
        <input type="hidden" >
        <Button name="id" value=" <?= $post['id'] ?>">Delete</Button>
        </form>
    </li>
    <?php } ?>
    </ul>
    

<?php require "views/components/footer.php" ?>
