<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include 'menu.php';
    require_once  'database.php';

    echo '<br>Logged in by: '.$_SESSION['username'];
    ?>
    
</body>
</html>