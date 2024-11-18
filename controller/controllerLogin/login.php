<!--Objetivo do Código: Analisa as informações inseridas em index_login.php e verifica se existe algum usuário correspondente no Banco de Dados.
    Se o usuário for da tabela 'clientes', redirecionar para a página index_cliente.php
    Se o usuário for da tabela 'usuarios', redirecionar para a página index_adm.php
    Se o usuário não existir, redirecionar para a página login_cadastro.php-->
<!--Status do Código: Concluído-->


<?php

    //Criando sessão.
    session_start();

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ("../../banco/conexao.php");

    //VERIFICAÇÃO DO LOGIN.
    if ($_POST)
    {
        //Limpar os campos 'email' e 'senha 'para evitar conflito na consulta SQL.
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        //Verificar as informações no Banco de Dados.
        $sql_code = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
        $consultaCliente = $conectar->prepare($sql_code);
        $consultaCliente->execute();
        $resultadoConsultaCliente = $consultaCliente->get_result();

        //Realizando o Login.
        if($resultadoConsultaCliente->num_rows > 0)
        {
            $usuario = $resultadoConsultaCliente->fetch_assoc();

            //Armazena as informações do usuário nas páginas de Cliente.
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            //Redirecionar o usuário para a página de Cliente.
            header("Location: ../../view_cliente/index_cliente.php"); 
        }

        //VERIFICAÇÃO DE LOGIN ADM.
        else
        {
            //Limpar os campos 'email' e 'senha 'para evitar conflito na consulta SQL.
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);

            //Verificar as informações no Banco de Dados.
            $sql_code = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
            $consultaUsuario = $conectar->prepare($sql_code);
            $consultaUsuario->execute();
            $resultadoConsultaUsuario = $consultaUsuario->get_result();

            //Realizando o Login.
            if($resultadoConsultaUsuario->num_rows > 0)
            {
                $usuario = $resultadoConsultaUsuario->fetch_assoc();

                //Armazena as informações do usuário nas páginas Administrativas.
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nome'];

                //Redirecionar o usuário para a página Admnistrativa.
                header("Location: ../../view_adm/index_adm.php");
            }

            else
            {
                echo "Falha ao realizar Login. Email ou senha de adm incorretos";
            }
    
        }

        //CASO O USUÁRIO NÃO EXISTA EM NENHUMA DAS TABELAS.
     
    }
  
?>