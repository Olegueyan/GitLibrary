<?php

session_start();

require_once("../Model/Manager/UserManager.php");

$title = "GitLibrary : Library";

$id_user_info = $_SESSION["user_info"]["idUser"];
$pseudo_info = $_SESSION["user_info"]["pseudo"];
$email_info = $_SESSION["user_info"]["email"];

require_once('../Vue/library_vue.php');