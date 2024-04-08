<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if($_POST["clock"] == "") {
        $errors["clock"] = "Clock cannot be empty!";
    }
        if(($_POST["name"] == "")) {
                $errors["name"] = "Name cannot be empty!";
        }
            if($_POST["place"] == "") {
                    $errors["place"] = "Place cannot be empty!";
            }
                if(empty($errors)) {
                        $query ="INSERT INTO pasakumi (clock, name, place)
                                 VALUES (:clock, :name, :place);";
                            $params = [
                                    ":clock" => $_POST["clock"],
                                    ":name" => $_POST["name"],
                                    ":place" => $_POST["place"]
                                    ];
                        $db->execute($query, $params);
                        header("Location: /");
                        die();
                }
}
$title = "Izveido savu pasakumu";
require "views/pasakumi/create.view.php";