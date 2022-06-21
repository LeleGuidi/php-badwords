<?php
    //Creazione variabile con paragrafo
    $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odio voluptatem quo, quia tenetur iure alias, modi delectus rerum id nesciunt assumenda officiis porro cupiditate nisi vero suscipit vitae? Laboriosam!';

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
    <h1>Paragrafo:</h1>
    <p><?= $paragrafo ?></p>
    <h2>Lunghezza paragrafo:</h2>
    <span><?= strlen($paragrafo) ?></span>
</body>
</html>