<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php 
        $baseMaior = $_GET['baseMaior'];
        $baseMenor = $_GET['baseMenor'];
        $altura = $_GET['altura'];

        $areaTrapezio = (($baseMaior + $baseMenor)/2) * $altura;

        echo "<p> A área do trapézio é: ". $areaTrapezio . "</p>";

    ?>
</body>
</html>