<?php
    session_name('clinicanekodb');
    if (!isset($_SESSION)) {
        session_start();
    }
    // segurança digital

    // verificar se o usuário está logado na sessão
    if(!isset($_SESSION['login_usuario'])){
        // se não existir, redirecionamos a sessão por segurança
        header('location: login_cliente.php'); // redirecioamento
        exit;
    } 
    $nome_da_sessao = session_name();
    if(!isset($_SESSION['nome_da_sessao']) 
        or ($_SESSION['nome_da_sessao']!=$nome_da_sessao)){
            session_destroy();
            header('location:login_cliente.php');
    }

?>