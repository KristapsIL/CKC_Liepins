<?php require "components/head.php" ?>
    <?php require "components/navbar.php" ?>
    <h1>Kolektivi Create</h1>
    <form method="POST">
        <label>kolektivs:
            <input name='kolektivs' />
        </label>
        <label>Apraksts:
            <input name='apraksts'/>
        </label>
        <button >Submit</button>
    </form>
<?php require "components/footer.php" ?>