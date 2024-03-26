<?php


require "Database.php";

$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM kolektivi";
$params = [];

$kolektivi = $db
          ->execute($query, $params)
          ->fetchAll();

$title = "Kolektivi";
require "views/kolektivi.view.php";