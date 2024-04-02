<?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Kolektivi Create</h1>
    <form method="POST">
        <label>kolektivs:
            <input name='kolektivs' />
            <?php if(isset($errors["kolektivs"])) {?>
            <p class="error"><?= $errors["kolektivs"]?></p>
            <?php } ?>
        </label>
        <label>Apraksts:
            <input name='apraksts'/>
            <?php if(isset($errors["apraksts"])) {?>
            <p class="error"><?= $errors["apraksts"]?></p>
            <?php } ?>
        </label>
        <button >Submit</button>
    </form>
<?php require "views/components/footer.php" ?>