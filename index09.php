<?php 

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);
if (mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS db_aula2")) {
    echo 'Banco de dados criado';
} else {
    echo "Erro ao criar o banco de dados";
}

?>