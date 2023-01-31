<?php

session_start();

require_once("../Model/Manager/UserManager.php");

if (!isset($_SESSION["user_info"])) {
    header("Location: library_vue.php");
    exit;
} else {
    $id_user_info = $_SESSION["user_info"]["idUser"];
    $pseudo_info = $_SESSION["user_info"]["pseudo"];
    $email_info = $_SESSION["user_info"]["email"];
}

$title = "GitLibrary : Collection of the database";

$games = get_all_games();

require_once('../Vue/Collection_vue.php');