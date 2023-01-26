<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="CSS/login.css"/>
    </head>
    <body>
        <div id="container">
            <form method="post" action=<?php echo $action ?>>
                <label for="pseudo">Pseudo =></label>
                <input type="text" id="pseudo" name="pseudo"><br>
                <label for="password">Password =></label>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="Log In">
            </form>
        </div>
    </body>
</html>