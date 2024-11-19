<!--Objetivo do Código: Puxa as informações em "login_cadastro.php" e as insere no Banco de Dados-->
<!--Status do Código: Concluído-->

<?php

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ("../../banco/conexao.php");

    // Confirmando que o formulário foi enviado.
    if (isset($_POST['submit'])) {

        // Iniciar sessão, se necessário
        if (session_status() == PHP_SESSION_NONE) {
        session_start();
        }

        
        // Sanitização e validação dos dados
        $nome = mysqli_real_escape_string($conectar, $_POST['nome']);
        $cpf = mysqli_real_escape_string($conectar, $_POST['cpf']);
        $data_nascimento = mysqli_real_escape_string($conectar, $_POST['data_nascimento']);
        $email = mysqli_real_escape_string($conectar, $_POST['email']);
        $senha = mysqli_real_escape_string($conectar, $_POST['senha']);
        $numero = mysqli_real_escape_string($conectar, $_POST['numero']);
        $tipo = mysqli_real_escape_string($conectar, $_POST['tipo']);

        // Preparar a consulta para a tabela cliente
        $sql_code = "INSERT INTO cliente (nome, cpf, data_nascimento, email, senha) 
                     VALUES (?, ?, ?, ?, ?)";
        $stmt_cliente = $conectar->prepare($sql_code);
        $stmt_cliente->bind_param("sssss", $nome, $cpf, $data_nascimento, $email, md5($senha));

        // Preparar a consulta para a tabela telefone
        $sql_code2 = "INSERT INTO telefone (numero, tipo) 
                      VALUES (?, ?)";
        $stmt_telefone = $conectar->prepare($sql_code2);
        $stmt_telefone->bind_param("ss", $numero, $tipo);

        // Executar ambas as consultas
        if ($stmt_cliente->execute() && $stmt_telefone->execute()) {
            // Se as inserções forem bem-sucedidas, limpar as variáveis de sessão
            unset($_SESSION['nome'], $_SESSION['cpf'], $_SESSION['data_nascimento'], 
                  $_SESSION['telefone'], $_SESSION['email'], $_SESSION['senha']);
            
            //Armazena as informações do usuário nas páginas de Cliente.


            // Redirecionar para a página de cliente
            header('Location: ../../view_cliente/index_cliente.php');
            exit();
        } else {
            // Se falhar, mostrar o erro
            $erro[] = "Erro ao registrar no banco de dados: " . $stmt_cliente->error . " | " . $stmt_telefone->error;
        }

        // Fechar as declarações preparadas
        $stmt_cliente->close();
        $stmt_telefone->close();
    }
?>




