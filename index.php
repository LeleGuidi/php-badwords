<?php
    //Creazione variabile con paragrafo
    $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odio voluptatem quo, quia tenetur iure alias, modi delectus rerum id nesciunt assumenda officiis porro cupiditate nisi vero suscipit vitae? Laboriosam!';
    $censura = $_GET["censura"];
    $paragrafo_censurato = str_replace($censura, "***", $paragrafo);
    $lunghrezza_nuovo_paragrafo = strlen($paragrafo_censurato);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <!-- Stampa del paragrafo e lunghezza -->
    <h1>Paragrafo:</h1>
    <p><?= $paragrafo ?></p>
    <h2>Lunghezza paragrafo:</h2>
    <span><?= strlen($paragrafo) ?></span>
    <!-- Form per richiedere la parola da censurare  -->
    <form action="index.php" method="get">
        <h2>Scegli la parola da censurare</h2>
        <input type="text" name="censura">
        <input type="submit">
    </form>
    <!-- Stampa del paragrafo censurato e lunghezza  -->
    <h1>Paragrafo con censure:</h1>
    <p><?= $paragrafo_censurato?></p>
    <h2>Lunghezza nuovo paragrafo censurato:</h2>
    <span><?= $lunghrezza_nuovo_paragrafo?></span>
</body>
</html>