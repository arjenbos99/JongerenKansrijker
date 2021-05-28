  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voeg instituut toe</title>
    </head>
    <body>

        <?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            require_once 'database.php';
            $db = new database();
            
            $sql = "INSERT INTO instituut VALUES (:id, :naam, :telefoonnummer)";

            $placeholders = [
                'id'=>NULL,
                'naam'=>$_POST['instituut'],
                'telefoonnummer'=>$_POST['tel']
            ];
            $db->insert($sql, $placeholders, 'instituut');
        }
        ?>
        <form action="nieuw-instituut.php" method="post">
            <label for="instituut">Instituut</label><br>
            <input type="text" name="instituut" required><br>
            <label for="tel">Telefoon nummer</label><br>
            <input type="text" name="tel"><br>
            <input type="submit" value="Voeg instituut toe">
        </form>
    </body>
</html>