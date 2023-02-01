<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="*">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $title ?></title>
    <link href="../Controller/CSS/home.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/global.css" rel="stylesheet" type="text/css">

    <!-- Import of Bootstrap -->
    <link href="../Controller/CSS/Bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap.rtl.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-grid.rtl.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-reboot.rtl.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-utilities.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/Bootstrap/bootstrap-utilities.rtl.css" rel="stylesheet" type="text/css">
    <!-- Import of Bootstrap -->
</head>
<body>
    <div class="container-fluid" id="container">
        <h1 class="h1" id="title"><?php echo $title_page ?></h1>
        <a class="btn btn-dark" id="logBtn" href=<?php echo $login_href ?>>Log In</a>
        <a class="btn btn-dark" id="signBtn" href=<?php echo $signup_href ?>>Sign Up</a>
    </div>
</body>
</html>