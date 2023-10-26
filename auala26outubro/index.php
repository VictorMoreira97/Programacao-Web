<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Heróis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>SuperHeroes</h1>
        <a href="#">Adicionar Superhero</a>
        <table border="1"></table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Secret Identity</th>
                <th>First Appearance</th>
                <th>Arch Enemy</th>
                <th>Main Power</th>
                <th>Actions</th>
            </tr>
        </thead>
    <?php 
    
    $conn = new mysqli("localhost: 3306", "", "superhero_db");

    //verificar se há conexão
    if($conn -> connect_error) {
        die("Falha ao conectar o banco". $conn -> connect_error);
    }

    //Consultar registros no banco de dados
    //Primeiro eu escrevo um script de seleção dos registros;

    $sql = "SELECT * FROM superheroes";

    // Depois armazeno resgistros em uma variável;

    $result = $conn -> query("sql");

    if($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['id']."</td>";
                echo "<td>" . $row['heroName']."</td>";
                echo "<td>" . $row['secreteIdentity']."</td>";
                echo "<td>" . $row['firstAppearance']."</td>";
                echo "<td>" . $row['archEnemy']."</td>";
                echo "<td>" . $row['mainPower']."</td>";

                echo "<td><a href='readById.php?id='".$row[id].">Info</a>
                echo "<td><a href='update.php?id='".$row[id].">Edit</a>
                echo "<td><a href='readById.php?id='".$row[id]."'onclick='return confirm(\"Certeza que deseja excluir o registro?\")>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'></td></tr>";
    }

    ?>
    </main>
</body>
</html>