<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <header>
        <h1>CADASTRO DE CLIENTES</h1>
        <nav>
            <button><a href="index.php">HOME</a></button>
            <button><a href="?page=novo">NOVO CLIENTE</a></button>
            <button><a href="?page=listar">LISTAR CLIENTES</a></button>
        </nav>
    </header>

    <?php 
    
    include("config.php");
    switch(@$_REQUEST["page"]) {
        case "novo":
            include("novo_cliente.php");
        break;
        case "listar":
            include("listar-usuario.php");
        break;
        default:
        print "Bem vindos!";
    }
    
    ?>

</body>
</html>