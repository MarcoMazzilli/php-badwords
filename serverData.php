<?php

$paragrafo            = $_GET['paragrafo'];
$parolaDaCensurare    = $_GET['censura'];
$newParola            = $_GET['newParola'];

$paragrafoCensurato = str_replace(strtolower($parolaDaCensurare), $newParola,strtolower($paragrafo));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="png"> 
    <title>Risultato BedWords</title>
    
</head>

<body>

    <div class="container answer">
        <h1> Paragrafo inserito dall'utente</h1>
        <p> <?php echo $paragrafo ?> </p>
        <p>lunghezza : <?php echo strlen($paragrafo)?> caratteri.</p>
    </div>

    <div class="container answer">
        <h1> Paragrafo modificato</h1>
        <p> <?php echo ucfirst( $paragrafoCensurato) ?> </p>
        <p>lunghezza : <?php echo strlen($paragrafoCensurato)?> caratteri.</p>
    </div>

</body>
</html>