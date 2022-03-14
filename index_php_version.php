<?php
require __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione Axios Dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png">
    </header>
    
    <main>
        <div class="container">
            <?php
            // var_dump($database);
            foreach($database as $key => $value) {
                echo ('<div class="card">');
                echo ('<img src="' . $value['poster'] . '">');
                echo ('<h1>' . $value['title'] . '</h1>');
                echo ('<h2>' . $value['author'] . '</h2>');
                echo ('<span>' . $value['year'] . '</span>');
                echo ('</div>');
            };
            ?>
        </div>
    </main>


</body>
</html>