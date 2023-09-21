<?php

$loginPadrao = 'potato@gmail.com';
$senhaPadrao = 'potatoGood123';

if ($loginPadrao === $_POST['email'] && $senhaPadrao === $_POST['senha']) {

    $_SESSION['logado'] = 1;
    header('Location: restrictedArea.php');

} else {
    header('Location: falha.html');
}

?>