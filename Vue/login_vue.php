<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>

        <link href="../Controller/CSS/login.css" rel="stylesheet" type="text/css">

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
        <form class="container" id="form" method="post" action=<?php echo $action ?>>
            <label id="inscription_label">Inscription</label>
            <div class="mb-3">
                <label class="form-label" for="pseudo">Pseudo</label>
                <input class="form-control" type="text" id="pseudo" name="pseudo">
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password">
            </div>
            <input class="btn btn-primary" type="submit" value="Log In">
        </form>
    </body>
</html>