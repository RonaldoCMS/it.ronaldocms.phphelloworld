<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "lavarel";
    
    try {
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        echo "Connected successfully \n";
      } catch(Exception $e) {
        echo "Connection failed: " . $e->getMessage();
      }

    $sql = "SELECT id, name, surname FROM Person";
    $result = $conn->query($sql);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <li><?= $row["id"] ?>
                <ul>
                    <?= $row["name"] ?>
                    <?= $row["surname"] ?>
                </ul>
            </li>
            <?php endwhile; ?>
        </ul>
    </body>
</html>