<?php 

switch($_REQUEST["acao"]) {
    case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $celular = $_POST["celular"];
            $cidade = $_POST["cidade"];

            $sql = "INSERT INTO usuario (nome, email, celular, cidade) VALUES ('{$nome}', '{$email}', '{$celular}', '{$cidade}')";

            $res = $conn->query($sql);
            break;

        if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];
        $cidade = $_POST["cidade"];

        $sql = "UPDATE usuarios SET
                nome='{$nome}',
                email='{$email}',
                celular='{$senha}',
                cidade='{$cidade}'
                WHERE 
                id=".$_REQUEST["id"];

        $res = $conn->query($sql);
            break;

        if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

        if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}

?>