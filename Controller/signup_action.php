<?php

require("../Model/Manager/Connect.php");
require("../Model/Manager/UserManager.php");

$pseudo = $_POST['pseudo'];
$password = hash("sha256", $_POST['password']);
$email = $_POST['email'];

var_dump($_FILES);

//create_user_in_database($pseudo, $password, $email, $avatar);

//header("location:./login.php");