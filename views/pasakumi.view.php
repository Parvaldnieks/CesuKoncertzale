<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

  <form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Filter by ID</button>
  </form>

  <h1>Pasakumi</h1>

  <ul>
    <?php foreach($pasakumi as $pasakums) { ?>

    <li>LAIKS - <?= $pasakums["clock"] ?> </li>

    <li>NOSAUKUMS - <?= $pasakums["name"] ?> </li>
    
    <li>VIETA - <?= $pasakums["place"] ?> </li>

    <br></br>

    <?php } ?>
  </ul>