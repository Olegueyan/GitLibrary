<?php

session_start();

require_once("../Model/Manager/UserManager.php");

if (!isset($_SESSION["user_info"])) {
    header("Location: home.php");
    exit;
} else {
    $id_user_info = $_SESSION["user_info"]["idUser"];
    $pseudo_info = $_SESSION["user_info"]["pseudo"];
    $email_info = $_SESSION["user_info"]["email"];
}

$title = "GitLibrary : Library of {$pseudo_info}";

$games = get_all_games();

require_once('../Vue/library_vue.php');