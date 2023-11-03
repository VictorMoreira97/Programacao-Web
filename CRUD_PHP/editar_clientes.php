<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="records.css">
    <link rel="stylesheet" href="modal.css">

</head>
<body>
    <main>

    <?php 
    
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    
    ?>      
        <form action="?page=salvar" method="post">

            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="acao" value="<?php print $row->id; ?>">

            <label for="">Nome: </label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>"> <br>

            <label for="">e-mail</label>
            <input type="email" name="email" id="" value="<?php print $row->email; ?>" > <br>

            <label for="">Celular</label>
            <input type="number" name="celular" id="" value="<?php print $row->celular; ?>"> <br>

            <label for="">Cidade</label>
            <input type="text" name="cidade" value="<?php print $row->cidade; ?>"> <br>

            <input type="submit" value="Cadastrar"> <br>
        </form>
    </main>

</body>
</html>