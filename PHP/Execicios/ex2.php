<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php 
        $salario = $_GET['salario'];
        $vendas = $_GET['vendas'];
        $comissao = ($vendas * 0.04);

        echo "<p> Salário: R$". $salario . "</p><br>";
        echo "<p> Total de vendas: R$". $vendas . "</p><br>";
        echo "<p> Comissão: R$". $comissao . "</p><br>";
        echo "<p> Salário final: R$". ($salario + $comissao) . "</p><br>";
    ?>
</body>
</html>