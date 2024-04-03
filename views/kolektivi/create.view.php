<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveido savu pasakumu</h1>

<form method="POST">

    <label>Date:
        <input type="datetime-local" name="clock" value="<?= $_POST["clock"] ?? "" ?>"/>
            <?php if(isset($errors["clock"])) { ?>
                <p><?= $errors["clock"] ?></p>
                    <?php } ?>
    </label>

    <label>Name:
        <input name="name" value="<?= $_POST["name"] ?? "" ?>"/>
            <?php if(isset($errors["title"])) { ?>
                <p><?= $errors["title"] ?></p>
                    <?php } ?>
    </label>

    <label>Place:
        <input name="place" value="<?= $_POST["place"] ?? "" ?>"/>
            <?php if(isset($errors["title"])) { ?>
                <p><?= $errors["title"] ?></p>
                    <?php } ?>
    </label>

    <button>Poga</button>
</form>

<?php require "views/components/footer.php" ?>