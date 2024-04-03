<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li>
    <?= htmlspecialchars($post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"]) ?>
    <label>
        <form class="delete-form" method="POST" action="/delete-pasakumi">
        <Button name="id" value=" <?= $post['id'] ?>">Delete</Button>
        </form>
        <form class="edit-form" action="/edit-pasakumi">
        <Button name="id" value=" <?= $post['id'] ?>">edit</Button>
        </form>
    </label>
    </li>
    <?php } ?>
    </ul>
    

<?php require "views/components/footer.php" ?>