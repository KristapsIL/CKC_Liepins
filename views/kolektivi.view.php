<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>
<h1>Kolektīvi</h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
            <th></th>
        </tr>
        <?php foreach($posts as $post){ ?>
        <tr>
            <td><?= $post["NAME"] ?></td>
            <td><?= $post["DESCRIPTION"] ?></td>
            <td>
                <form method="POST" action="/delete-kolektivi">
                <input type="hidden" name="id" value=" <?= $post['id'] ?>">
                <Button>Delete</Button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php require "components/footer.php" ?>