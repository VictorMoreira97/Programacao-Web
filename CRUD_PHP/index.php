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
    <header>
        <h1>CADASTRO DE CLIENTES</h1>
        <nav>
            <button type="button" class="button blue"><a href="index.php">HOME</a></button>
            <button type="button" class="button blue"><a href="?page=novo">NOVO CLIENTE</a></button>
            <button type="button" class="button blue"><a href="?page=listar">LISTAR CLIENTES</a></button>
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
        break;
    }
    
    ?>

</body>
</html>