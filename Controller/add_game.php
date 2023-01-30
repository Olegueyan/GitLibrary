<?php
$new_game = array(
    "idGame" => $_POST["idGame"],
    "name" => $_POST["name"],
    "description" => $_POST["description"],
    "price" => $_POST["price"]
);
array_push($games, $new_game);
?>
