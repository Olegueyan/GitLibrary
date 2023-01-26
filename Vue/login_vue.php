<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
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