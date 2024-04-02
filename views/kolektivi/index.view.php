<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Kolektīvi</h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
            <th></th>
        </tr>
        <?php foreach($posts as $post){ ?>
        <tr>
            <td><?= htmlspecialchars($post["NAME"]) ?></td>
            <td><?= htmlspecialchars($post["DESCRIPTION"]) ?></td>
            <td>
                <form method="POST" action="/delete-kolektivi">
                <Button name="id" value=" <?= $post['id'] ?>">Delete</Button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php require "views/components/footer.php" ?>