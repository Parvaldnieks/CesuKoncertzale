<?php
require "Database.php";
$config = require ("config.php");

$db = new Database($config);

$query = "SELECT * FROM pasakumi WHERE id = :id";

$params = [":id" => $_GET["id"]];

$pasakums = $db->execute($query, $params)
               ->fetch();

// dd($pasakums);

$title = "Show";
require "views/show.view.php";