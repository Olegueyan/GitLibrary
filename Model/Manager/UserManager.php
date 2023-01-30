<?php

require("Connect.php");

function create_user_in_database(string $user, string $password, string $email, $avatar) : void
{
    global $connection;
    $request = $connection->prepare("INSERT INTO user (pseudo, password, email, avatar) VALUES (?, ?, ?, ?)");
    $request->execute(array($user, $password, $email, $avatar));
}

function get_all_games() : array
{
    global $connection;
    $request = "SELECT * FROM game";
    $result = mysqli_query($connection, $request);
    return mysqli_fetch_all($result);
}

function get_user_from_database(string $user, string $password) : array|false|null
{
    global $connection;
    $hash_password = hash("sha256", $password);
    $request = "SELECT * FROM user WHERE pseudo='{$user}' AND password='{$hash_password}'";
    $result = mysqli_query($connection, $request);
    return mysqli_fetch_assoc($result);
}