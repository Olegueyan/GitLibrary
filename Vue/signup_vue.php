<html lang="fr">
    <head>
        <meta charset="*">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action=<?php echo $action ?>>
            <label for="pseudo">Pseudo =></label>
            <input type="text" id="pseudo" name="pseudo"><br>
    
            <label for="password">Password =></label>
            <input type="password" id="password" name="password"><br>
    
            <label for="email">Email =></label>
            <input type="text" id="email" name="email"><br>
    
            <input type="submit" value="Sign up">
        </form>
    </body>
</html>