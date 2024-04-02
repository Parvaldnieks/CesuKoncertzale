<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

  <form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Filter by ID</button>
  </form>

  <h1>Kolektivi</h1>

  <ul>
    <?php foreach($kolektivi as $kolektivs) { ?>

      <li>PASAKUMS - <?= $kolektivs["name"] ?> / <?= $kolektivs["description"] ?>
        <form class="delete-form" method="POST" action="/delete">
        <button name="id" value="<?= $kolektivs["id"] ?>">Delete</button> </form>
      </li>

    <?php } ?>
  </ul>