<?php

    session_start();

    if ($_SESSION['logado'] == 1) {

        echo "<body>

        <h1>Bem-vindo à área restrita</h1>

        <p>Você agora está na área restrita.</p>

        <button type='button'><a href='index.html'>Sair</a><button>

        </body>";

    } else {
        header('Location: index.html');
    }

?>