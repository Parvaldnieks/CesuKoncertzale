<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

  <form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Filter by ID</button>
  </form>

  <h1>Kolektivi</h1>

  <ul>
    <?php foreach($kolektivi as $kolektivs) { ?>

    <li>VARDS - <?= $kolektivs["name"] ?> </li>

    <li>APRAKSTS - <?= $kolektivs["description"] ?> </li>

    <br></br>

    <?php } ?>
  </ul>