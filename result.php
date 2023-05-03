<?php 
    $paragrafo = $_GET['par'];
    $word = $_GET['word'];
    $nuovopar = str_replace($word, '***', $paragrafo);
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
    <div>
        <h1>Paragrafo iniziale:</h1>
        <p>
            <?php echo $paragrafo ?>
        </p>
        <p>
            <?php echo 'La lunghezza': strlen($paragrafo) ?>
        </p>
    </div>
    
    <h1>Nuovo paragrafo:</h1>
    <p>
        <?php echo $nuovopar ?>
    </p>
</body>
</html>