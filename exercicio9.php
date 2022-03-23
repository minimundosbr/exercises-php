<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php 
        //ler salario e o percentual de reajuste
        $salario = 1212.00;
        $aumento = ($salario * 50) / 100;
        $salarioAtual = $salario + $aumento;
        echo "<p>Seu salario era $" . $salario . " Com o reajuste ficou " . $salarioAtual. "</p>";
    ?>
</body>
</html>