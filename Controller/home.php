<?php

session_start();

require_once("../Model/Manager/UserManager.php");

$title = "GitLibrary : Home";
$title_page = "Git Library Home";
$login_href = './login.php';
$signup_href = './signup.php';

require_once('../Vue/home_vue.php');