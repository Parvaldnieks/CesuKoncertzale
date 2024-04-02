<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

  <form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Filter by ID</button>
  </form>

  <h1>Pasakumi</h1>

  <ul>
    <?php foreach($pasakumi as $pasakums) { ?>

    <li>PASAKUMS - <?= $pasakums["name"] ?> / <?= $pasakums["clock"] ?> / <?= $pasakums["place"] ?> 
        <form class="delete-form" method="POST" action="/delete">
        <button name="id" value="<?= $pasakums["id"] ?>">Delete</button> </form>
    </li>

    <?php } ?>
  </ul>