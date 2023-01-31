<?php

session_start();

require_once("../Model/Manager/UserManager.php");

$pseudo_info = $_SESSION["user_info"]["pseudo"];

$avatar_user = "data:image/jpeg;base64,".base64_encode($_SESSION["user_info"]["avatar"]);

$title = "GitLibrary : Library of {$pseudo_info}";

require_once('../Vue/library_vue.php');