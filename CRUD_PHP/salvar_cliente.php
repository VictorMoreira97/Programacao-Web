<?php 

switch($_REQUEST["acao"]) {
    case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $celular = $_POST["celular"];
            $cidade = $_POST["cidade"];

            $sql = "INSERT INTO usuario(nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$celular}', '{$cidade}')";

        $res = $conn -> query($sql);

        break;
    case 'editar':

        break;
    case 'excluir':

        break;
}

?>