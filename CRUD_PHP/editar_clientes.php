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

    <?php 
    
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    
    ?>      
        <form action="?page=salvar" method="post">

            <input type="hidden" name="acao" value="editar">

            <input type="hidden" name="id" value="<?php print $row->id; ?>">

            <label for="">Nome: </label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>"> <br>

            <label for="">e-mail</label>
            <input type="email" name="email" id="" value="<?php print $row->email; ?>" > <br>

            <label for="">Celular</label>
            <input type="number" name="celular" id="" value="<?php print $row->celular; ?>"> <br>

            <label for="">Cidade</label>
            <input type="text" name="cidade" value="<?php print $row->cidade; ?>"> <br>

            <input type="submit" value="Salvar"> <br>
        </form>
    </main>

</body>
</html>