<?php

session_start();

require_once("../Model/Manager/UserManager.php");

$id_user_info = $_SESSION["user_info"]["idUser"];
$pseudo_info = $_SESSION["user_info"]["pseudo"];
$email_info = $_SESSION["user_info"]["email"];

$avatar_user = "data:image/jpeg;base64,".base64_encode($_SESSION["user_info"]["avatar"]);

$title = "GitLibrary : Library of {$pseudo_info}";

require_once('../Vue/library_vue.php');