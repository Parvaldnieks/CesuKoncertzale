<?php

require "Database.php";

$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM kolektivi";
$params = [];

$kolektivi = $db
          ->execute($query, $params)
          ->fetchAll();

$title = "Pasakumi";
require "views/kolektivi/kolektivi.view.php";