<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <?php 
    $quantidade=15;
    $valorCompra;
    
    if ($quantidade >=12){
        $valorCompra = $quantidade * 1.00;
        echo "<p>O valor total da sua compra deu $" . $valorCompra."</p>";
    }else{
        $valorCompra = $quantidade * 1.30;
        echo "<p>O valor total da sua compra deu $" . $valorCompra. "</p>" ;
    }
    ?>
</body>
</html>
