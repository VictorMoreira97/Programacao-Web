<?php

    $nameUser = $_POST['userName'];
    setcookie('usuario', $nameUser, (time()+600));
    setcookie('profissao', $_POST['userProfession'], (time()+600));

    header('Location: index07.php');
?>