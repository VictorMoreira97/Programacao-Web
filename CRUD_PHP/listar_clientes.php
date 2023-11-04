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
        <h2>LISTAR USUÁRIOS</h2>
      <?php 
      
      $sql = "SELECT * FROM usuario";

      $res = $conn -> query($sql);

      $qtd = $res -> num_rows;

      if($qtd > 0) {
        print "<table>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>NOME</th>";
            print "<th>E-MAIL</th>";
            print "<th>CELULAR</th>";
            print "<th>CIDADE</th>";
            print "</tr>";
        while($row = $res -> fetch_object()) {
            print "<tr>";
            print "<td> " . $row -> id . " </td>";
            print "<td> " . $row -> nome . " </td>";
            print "<td> " . $row -> email . " </td>";
            print "<td> " . $row -> celular . " </td>";
            print "<td> " . $row -> cidade . " </td>";

            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button> 
                </td>";
            print "</tr>";
        }
        print "</table>";
      } else {
        print "<p>Não encontrou resultados. </p>";
      }
      
      ?>
    </main>

    <br>

</body>
</html>