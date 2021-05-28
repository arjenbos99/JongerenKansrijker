<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overzicht instituut</title>
    </head>
    <body>
        <?php
        include 'menu.php';

        require_once 'database.php';
        $db = new database();

        ?>

        <a href="nieuw-instituut.php">Nieuw instituut toevoegen</a>

    </body>
</html>