<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 44</title>
</head>
<body>
    <?php
    $valor1 = 4;
    $valor2 = 0;
    $result = 0;

    do{
        $valor2 = 2;
    }while($valor2 == 0);
        $result = $valor1 / $valor2;
        echo "O resultado da divisão é " . $result;
    ?>
</body>
</html>