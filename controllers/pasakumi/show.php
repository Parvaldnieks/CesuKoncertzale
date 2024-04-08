<?php
require "Database.php";
$config = require ("config.php");

$db = new Database($config);

$query = "SELECT * FROM pasakumi WHERE id = :id";

$params = [":id" => $_GET["id"]];

$pasakums = $db->execute($query, $params)
               ->fetch();

$title = "Show";
require "views/pasakumi/show.view.php";