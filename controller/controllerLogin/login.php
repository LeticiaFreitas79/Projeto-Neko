<!--Objetivo do Código: Analisa as informações inseridas em index_login.php e verifica se existe algum usuário correspondente no Banco de Dados.
    Se o usuário for da tabela 'clientes', redirecionar para a página index_cliente.php
    Se o usuário for da tabela 'usuarios', redirecionar para a página index_adm.php
    Se o usuário não existir, redirecionar para a página login_cadastro.php-->
<!--Status do Código: Em desenvolvimento-->


<?php

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ('../../banco/conexao.php');

    //VERIFICAR SE AS VARIÁVEIS 'email' E 'senha' EXISTEM.
    if (!isset($_POST['email']) == 0) //Se o campo 'email' não for preenchido, o comando abaixo será executado.
    {
        echo "Preencha seu E-mail.";
    }
    else if (!isset($_POST['senha']) == 0) //Se o campo 'senha' não for preenchido, o comando abaixo será executado.
    {
        echo "Preencha sua senha.";
    }

    //VERIFICAÇÃO DO LOGIN.
    else
    {
        //Limpar os campos 'email' e 'senha 'para evitar conflito na consulta SQL.
        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        //Verificar as informações no Banco de Dados.
        $sql_code = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
        $sql_query = $mysqli -> query($sql_code) or die("Falha na verificação do email e senha: " . $mysqli->error;); //Caso a VERIFICAÇÃO falhe.

        //Definir que apenas um usuário seja consultado.
        $quantidadeConsulta = $sql_query->num_rows;

        //Realizando o Login.
        if(quantidadeConsulta == 1)
        {
            $usuario = $sql_query->fetch_assoc();

            //Criando sessão.
            if (!isset($_SESSION))
            {
                session_atart('session_cliente');
            }

            //Armazena as informações do usuário nas páginas de Cliente.
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nome'];

            //Redirecionar o usuário para a página de Cliente.
            header("Location: ../../view_cliente/index_cliente.php");
        }
        else
        {
            echo "Falha ao realizar Login. Email ou senha incorretos";
        }



    }














    //VERIFICA SE OS CAMPOS FORAM PREENCHIDOS.
    

    //VERIFICAÇÃO DO LOGIN
    if ($_POST)
    {
        //PUXAR OS DADOS INSERIDOS NO FORMULÁRIO DE LOGIN (view_login/index_login.php).
        $emailUsuario = ($_POST['emailUsuario']);
        $senhaUsuario = password_hash($_POST['senhaUsuario']); //'password_hard' serve para criptografar a senha. É uma medida de segurança.
        
        //CONSULTAR O BANCO DE DADOS.
        $emailConsulta = $conexao -> query ("SELECT * FROM usuario WHERE email = '$emailUsuario' and senha '$senhaUsuario'"); //Comando SQL que consulta se as informações existem no Banco de Dados.
        $emailRow = $emailConsulta -> fetch_assoc(); //O resultado da consulta é armazenado na váriavel 'emailRow' a tornando em um array associativo através do 'fetch_assoc()'.
        $numeroRow = $emailConsulta -> num_rows; //Armazena o número de linhas compatové com as linhas puxadas do Banco de Dados.
    
        //SE A SESSÃO AINDA NÃO EXISTIR.
        if (!isset($_SESSION))
        {
            $sessaoAntiga = session_name ('clinicaneko'); //Define o nome da sessão.
            session_start(); //Inicia a sessão. 
            $sessaoNova = session_name(); //Armazena a nova sessão.
            
        }

        if($numRow>0) //Verifica se o resultado da consulta no Banco de Dados é maior que zero. Se for maior que zero, significa que o Login foi bem sucedido.
        {
            $_SESSION['session_emailUsuario'] = $emailUsuario; //Armazena o email do usuário na váriavel da sessão, tornando o email acessível em qualquer página do site após o login.
            $_SESSION['clinicanekodb'] = session_name(); //Armazena o nome da sessão. Isso pode ser usado para verificar a sessão ativa.
            {
                echo "<script>window.open('../../view_cliente/index_cliente.php?','_self')</script>";
            }
        }
        else
        {
            echo "Algo deu errado";
        }
    }

    

    //VERIFICAR A SENHA DO USUÁRIO ENCONTRADO.
    //LOGIN REALIZADO.
    //SENHA INCORRETA.
    //USUÁRIO INEXISTENTE.
    //ACESSO INVÁLIDO.
    
?>