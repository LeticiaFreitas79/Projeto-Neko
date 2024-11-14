<!--Objetivo do Código: Analisa as informações inseridas em index_login.php e verifica se existe algum usuário correspondente no Banco de Dados.
    Se o usuário for da tabela 'clientes', redirecionar para a página index_cliente.php
    Se o usuário for da tabela 'usuarios', redirecionar para a página index_adm.php
    Se o usuário não existir, redirecionar para a página login_cadastro.php-->
<!--Status do Código: Em desenvolvimento-->

<?php
    //INICIAR SESSÃO.
    //Serve para manter as informações do cliente em outras páginas do site (view_cliente).
    session_start();

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ("../../model/conexao.php"); //Sai da pasta 'controllerLogin', sai da pasta 'controller', entra na pasta 'model'.

    //VERIFICAR SE O FORMULÁRIO EM (view_login/index_login.php) FOI ENVIADO.
    //Método PHP usado para enviar o formulário.
    if ($_POST)
    {
        //PUXAR OS DADOS INSERIDOS NO FORMULÁRIO DE LOGIN (view_login/index_login.php).
        $emailUsuario = ($_POST['emailUsuario']);
        $senhaUsuario = password_hash($_POST['senhaUsuario']); //'password_hard' serve para criptografar a senha. É uma medida de segurança.
    }

    //CONSULTAR O BANCO DE DADOS.
    $emailConsulta = $conexao -> query ("SELECT * FROM usuario WHERE email = '$emailUsuario' and senha '$senhaUsuario'"); //Comando SQL que consulta se as informações existem no Banco de Dados.
    $emailRow = $emailConsulta -> fetch_assoc(); //O resultado da consulta é armazenado na váriavel 'emailRow' a tornando em um array associativo através do 'fetch_assoc()'.
    $numeroRow = $emailConsulta -> num_rows; //Armazena o número de linhas compatové com as linhas puxadas do Banco de Dados.

    //VERIFICAR A SENHA DO USUÁRIO ENCONTRADO.
    //LOGIN REALIZADO.
    //SENHA INCORRETA.
    //USUÁRIO INEXISTENTE.
    //ACESSO INVÁLIDO.
    
?>