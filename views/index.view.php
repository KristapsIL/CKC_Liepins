<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pasākumi Cēsīs</h1>
    <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= $post["date_time"]." / ".$post["nosaukums"]." / ".$post["norises_vieta"] ?></li>
    <?php } ?>
    </ul>
</body>
</html>