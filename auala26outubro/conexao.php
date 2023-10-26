<?php 

$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password);
if (mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS db_aula4")) {
    echo 'Banco de dados criado';
} else {
    echo "Erro criadno o banco de daods";
}

?>