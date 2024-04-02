<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveido savu pasakumu</h1>

<form method="POST">

    <label>Date:
        <input type="datetime-local" name="clock" value="<?= $_GET["clock"] ?? "" ?>"/>
            <?php if(isset($errors["clock"])) { ?>
                <p><?= $errors["clock"] ?></p>
                    <?php } ?>
    </label>

    <label>Name:
        <input name="title" value="<?= $_GET["title"] ?? "" ?>"/>
            <?php if(isset($errors["title"])) { ?>
                <p><?= $errors["title"] ?></p>
                    <?php } ?>
    </label>

    <label>Place:
        <input name="place" value="<?= $_GET["place"] ?? "" ?>"/>
            <?php if(isset($errors["place"])) { ?>
                <p><?= $errors["place"] ?></p>
                    <?php } ?>
    </label>

    <button>Poga</button>
</form>
                
<?php require "views/components/footer.php" ?>