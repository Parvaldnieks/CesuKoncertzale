<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Izveido savu pasakumu</h1>

<form method="POST">

    <label>Name:
        <input name="name" value="<?= $_POST["name"] ?? "" ?>"/>
            <?php if(isset($errors["title"])) { ?>
                <p><?= $errors["title"] ?></p>
                    <?php } ?>
    </label>

    <label>Description:
        <input name="description" value="<?= $_POST["description"] ?? "" ?>"/>
            <?php if(isset($errors["title"])) { ?>
                <p><?= $errors["title"] ?></p>
                    <?php } ?>
    </label>

    <button>Poga</button>
</form>

<?php require "views/components/footer.php" ?>