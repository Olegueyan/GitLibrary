<?php

require("Connect.php");

function create_user_in_database(string $user, string $password, string $email, $avatar) : void
{
    global $connection;
    $request = $connection->prepare("INSERT INTO user (pseudo, password, email, avatar) VALUES (?, ?, ?, ?)");
    $request->execute(array($user, $password, $email, file_get_contents($avatar)));
}

function get_all_games() : array
{
    global $connection;
    $request = "SELECT * FROM game";
    $result = mysqli_query($connection, $request);
    return mysqli_fetch_all($result);
}

function add_game_for(int $idUser, int $idGame)
{
    global $connection;
    $request = "INSERT INTO library (refUser, refGame, dateAdded) VALUES (?, ?, ?)";
    $request->execute(array($idUser, $idGame, date("Y-m-d H:i:s")));
}

function get_game_of(string $user)
{
    return array();
}

function get_user_from_database(string $user, string $password) : array|false|null
{
    global $connection;
    $hash_password = hash("sha256", $password);
    $request = "SELECT * FROM user WHERE pseudo='{$user}' AND password='{$hash_password}'";
    $result = mysqli_query($connection, $request);
    return mysqli_fetch_assoc($result);
}