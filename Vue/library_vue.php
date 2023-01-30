<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
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
    <h1>Mange moi !</h1>

    <h3>User Infos</h3>

    <table>
        <ul><?php echo $id_user_info?></ul>
        <ul><?php echo $pseudo_info?></ul>
        <ul><?php echo $email_info?></ul>
    </table>

    <image class="img-fluid img-thumbnail" src=<?php echo $avatar_user?>>

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
                foreach (get_all_games() as $game)
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
</body>
</html>