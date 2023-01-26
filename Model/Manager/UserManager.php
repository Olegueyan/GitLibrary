<?php

require("Connect.php");

function create_user_in_database(string $user, string $password)
{

}

function get_user_from_database(string $user, string $password) : array|false|null
{
    global $connection;
    $hash_password = hash("sha256", $password);
    $request = "SELECT * FROM user WHERE pseudo='{$user}' AND password='{$hash_password}'";
    $result = mysqli_query($connection, $request);
    return mysqli_fetch_assoc($result);
}