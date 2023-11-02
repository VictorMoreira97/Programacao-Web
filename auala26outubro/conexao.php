<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_cadastro";

$conn = new mysqli($servername, $username, $password, $database);

if($conn -> connect_errno) {
    die("Conexão falhou: " . $conn -> connect_errno);
}

$sqlCreateTable = "CREATE TABLE cadastro_clientes (
    ind INT(6) USINGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    celular VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    acao VARCHAR(50) NOT NULL
)";

if ($conn -> query ($sqlCreateTable) == TRUE) {
    echo "Tabela 'cadastro_clientes' criada com sucesso. ";
} else {
    echo "Erro ao criar a tabela: " . $conn -> error;
}

$sqlInsrtData = "INSERT INTO cadastro_clientes (nome, poder) VALUES
('Harry Potter', 'harry@potter.com', '0000-0000', 'Londres', 'Lorem Ipsum')";

$sqlSelectData = "SELECT nome, email, celular, cidade, acao";
$result = $conn -> query($sqlSelectData);

if ($result -> num_rows > 0) {
    echo "<br><br>Clientes na tabela: <br>";
    while ($row = $result -> fetch_assoc()) {
        echo "Nome: " . $row["nome"] . ", email: " . $row["email"] . ", Celular: " . $row["celular"]. ", Cidade: " . $row["cidade"]. ", Ação: " . $row["acao"] ; "<br>";
    }
} else {
    echo "Nenhum registro de cliente encontrado na tabela.";
}

$conn -> close();

?>