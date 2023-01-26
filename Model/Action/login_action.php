<?php

session_start();

require_once("../Manager/Connect.php");

$username = $_GET['pseudo'];
$password = $_GET['password'];

$user_info = get_user_from_database($username, $password);

if ($user_info !== null && $user_info !== false)
{
    $_SESSION["user_info"] = $user_info;
}

require_once('../../Controller/library.php');