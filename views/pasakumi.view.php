<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

  <form>
    <input name='id' value='<?= ($_GET["id"] ?? "") ?>' />
    <button>Filter by ID</button>
  </form>

  <h1>Pasakumi</h1>

  <ul>
    <?php foreach($posts as $post) { ?>

    <li> <?= $post["name"] ?> </li>

    <?php } ?>
  </ul>