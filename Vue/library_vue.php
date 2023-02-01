<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link href="../Controller/CSS/global.css" rel="stylesheet" type="text/css">
    <link href="../Controller/CSS/library.css" rel="stylesheet" type="text/css">

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
    <header>
        <div class="container-fluid clearfix">
            <img class="img-fluid img-thumbnail" id="avatar" alt="avatar" src=<?php echo $avatar_user?>>
            <span id="userPseudo"><?php echo $pseudo_info?></span>
            <span id="userEmail"><?php echo $email_info?></span>
        </div>
    </header>

    <div class="container-fluid" id="gameLibrary">
        <table class="table table-dark" id="gameTable">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>

            <?php
                require_once("../Model/Manager/UserManager.php");
                foreach (get_game_of((int) $_SESSION["user_info"]["idUser"]) as $game)
                {?>
                    <tr>
                        <th><?php echo $game[0] ?></th>
                        <th><?php echo $game[1] ?></th>
                        <th><?php echo $game[2] ?></th>
                        <th><?php echo $game[3] ?></th>
                    </tr>
                <?php }
            ?>
        </table>
    </div>

    <div class="container-fluid">
        <form action="../Controller/collection.php" id="selectGame">
            <input type="submit" value="ChoseGame">
        </form>
    </div>
</body>
</html>