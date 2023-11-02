<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>

    <main>
        <form action="processar.php" method="post">
            <label for="">Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome do cliente"> <br>

            <label for="">e-mail</label>
            <input type="email" name="email" id="" placeholder="Digite o e-mail do cliente"> <br>

            <label for="">Celular</label>
            <input type="number" name="celular" id="" placeholder="Digite o Nº de celular do cliente"> <br>

            <label for="">Cidade</label>
            <input type="text" placeholder="Digite a cidade do cliente"> <br>

            <input type="submit" value="Cadastrar"> <br>
        </form>
    </main>

</body>
</html>