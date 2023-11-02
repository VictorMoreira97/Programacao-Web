<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/button.css">
    <link rel="stylesheet" href="assets/css/records.css">
    <link rel="stylesheet" href="assets/css/modal.css">

</head>
<body>

    <main>
        <form action="?page=salvar" method="post">

            <input type="hidden" name="acao" value="cadastrar">

            <label for="">Nome: </label>
            <input type="text" name="nome" placeholder="Digite o nome do cliente"> <br>

            <label for="">e-mail</label>
            <input type="email" name="email" id="" placeholder="Digite o e-mail do cliente"> <br>

            <label for="">Celular</label>
            <input type="number" name="celular" id="" placeholder="Digite o Nº de celular do cliente"> <br>

            <label for="">Cidade</label>
            <input type="text" name="cidade" placeholder="Digite a cidade do cliente"> <br>

            <input type="submit" value="Cadastrar"> <br>
        </form>
    </main>

</body>
</html>