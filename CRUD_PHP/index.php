<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link rel="stylesheet" href="style.css">
 
</head>
<body>
    <header>
        <h1>CADASTRO DE CLIENTES</h1>
        <nav>
            <a href="index.php">HOME</a>
            <a href="?page=novo">NOVO CLIENTE</a>
            <a href="?page=listar">LISTAR CLIENTES</a>
        </nav>
    </header>

    <?php 
    
    include("config.php");
    switch(@$_REQUEST["page"]) {
        case "novo":
            include("novo_cliente.php");
        break;
        case "listar":
            include("listar_clientes.php");
        break;
        case "salvar":
            include("salvar_cliente.php");
        break;
        case "editar":
            include("editar_clientes.php");
        case "excluir":
            include("salvar_cliente.php");
        break;
    }
    
    ?>

</body>
</html>