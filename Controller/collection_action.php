<?php

session_start();

require("../Model/Manager/UserManager.php");

var_dump($_SESSION);

foreach ($_POST["selected_games"] as $selected)
{
    add_game_for((int) $_SESSION["user_info"]["idUser"], (int) $selected);
}

header("location:./library.php");