<?php

session_start();

require_once("../Model/Manager/Connect.php");
require_once("../Model/Manager/UserManager.php");

$username = $_POST['pseudo'];
$password = $_POST['password'];

$user_info = get_user_from_database($username, $password);

if ($user_info !== null && $user_info !== false)
{
    $_SESSION["user_info"] = $user_info;
}

header('location:./library.php');