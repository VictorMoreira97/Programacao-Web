<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php 
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2)/2;

        echo "Aluna(o): ". $nome;

        echo "<p>Sua média é ". $media . "</p>";
    ?>
</body>
</html>