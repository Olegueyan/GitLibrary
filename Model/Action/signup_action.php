<?php

require_once("../Manager/Connect.php");

$pseudo = $_POST['pseudo'];
$password = hash("sha256", $_POST['password']);
$email = $_POST['email'];

$request = "INSERT INTO User (pseudo, password, email) VALUES ('{$pseudo}', '{$password}', '{$email}')";

$connection->query($request);

header("../../Controller/library.php");