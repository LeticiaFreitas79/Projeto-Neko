<!--Objetivo do Código: Analisa as informações inseridas em index_login.php e verifica se existe algum usuário correspondente no Banco de Dados.
    Se o usuário for da tabela 'clientes', redirecionar para a página index_cliente.php
    Se o usuário for da tabela 'usuarios', redirecionar para a página index_adm.php
    Se o usuário não existir, redirecionar para a página login_cadastro.php-->
<!--Status do Código: Em análise; necessita de teste-->


<?php

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ('../../banco/conexao.php');

    //VERIFICAR SE AS VARIÁVEIS 'email' E 'senha' EXISTEM E FORAM PREENCHIDAS CORRETAMENTE.
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

        //VERIFICAÇÃO DE LOGIN ADM.
        else if
        {
            //Limpar os campos 'email' e 'senha 'para evitar conflito na consulta SQL.
            $email = $mysqli -> real_escape_string($_POST['email']);
            $senha = $mysqli -> real_escape_string($_POST['senha']);

            //Verificar as informações no Banco de Dados.
            $sql_code = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
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
                    session_atart('session_adm');
                }

                //Armazena as informações do usuário nas páginas Administrativas.
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nome'];

                //Redirecionar o usuário para a página Admnistrativa.
                header("Location: ../../view_adm/index_adm.php");
            }
        }

        //CASO O USUÁRIO NÃO EXISTA EM NENHUMA DAS TABELAS.
        else
        {
            echo "Falha ao realizar Login. Email ou senha incorretos";
        }

    }
  
?>