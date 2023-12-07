<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link rel="stylesheet" href="style.css">
 
</head>
<body>

    <main>
        <form action="?page=salvar" method="post">

            <input type="hidden" name="acao" value="cadastrar">

            <div class="inputDiv">
                <label for="">Nome: </label>
                <input type="text" name="nome" placeholder="Digite o nome do cliente"> <br>
            </div>

            <div class="inputDiv">
                <label for="">e-mail:</label>
                <input type="email" name="email" id="" placeholder="Digite o e-mail do cliente"> <br>
            </div>

            <div class="inputDiv">
                <label for="">Celular:</label>
                <input type="number" name="celular" id="" placeholder="Digite o Nº de celular do cliente"> <br>
            </div>

            <div class="inputDiv">
                <label for="">Cidade:</label>
                <input type="text" name="cidade" placeholder="Digite a cidade do cliente"> <br>
            </div>

            <input type="submit" value="Cadastrar" class="btnCadastrar"> <br>
        </form>
    </main>

</body>
</html>