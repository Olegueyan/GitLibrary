<?php

require_once("../Model/Manager/UserManager.php");

$title = "GitLibrary : Accueil";
$title_page = "Titre";
$result = connect("Gaëtan", "123");

var_dump($result);

require_once('../Vue/index_vue.php');