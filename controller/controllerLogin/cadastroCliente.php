<!--Objetivo do Código: Puxa as informações em "login_cadastro.php" e as insere no Banco de Dados-->
<!--Status do Código: Concluído-->

<?php
    //Confirmando que o formulário foi enviado.
    if (isset($_POST['submit']))
    {
       //REGISTRO DOS DADOS.
        if (!isset($_SESSION));
        session_start();

    //     foreach ($_POST as $chave => $valor)
    //         $_SESSION[$chave] = $mysqli -> real_escape_string($valor);

    //    //VALIDAÇÃO DOS DADOS.
    //     if (strlen($_SESSION['nome']) == 0) //Se o campo 'nome' não for preenchido, os comandos abaixo serão executados.
    //     $erro[] = "Preencha o Nome.";

    //     if (strlen($_SESSION['cpf']) == 0) //Se o campo 'cpf' não for preenchido, os comandos abaixo serão executados.
    //     $erro[] = "Preencha o CPF.";

    //     if (strlen($_SESSION['data_nascimento']) == 0) //Se o campo 'data_nascimento' não for preenchido, os comandos abaixo serão executados.
    //     $erro[] = "Preencha a Data de Nascimento.";

    //     if (strlen($_SESSION['telefone']) == 0) //Se o campo 'telefone' não for preenchido, os comandos abaixo serão executados.
    //     $erro[] = "Preencha o Telefone.";

    //     if (substr_count($_SESSION['email'], '@') != 1 || substr_count($_SESSION['email'], '.' < 1) || substr_count($_SESSION['email'], '.') > 2) //Se o campo 'email' não for preenchido corretamente, os comandos abaixo serão executados.
    //     $erro[] = "Preencha o Email corretamente.";

    //     if (strlen($_SESSION['senha']) < 5 || strlen($_SESSION['senha']) > 16) //Se o campo 'senha' não for preenchido corretamente, os comandos abaixo serão executados.
    //     $erro[] = "Preencha a Senha corretamente.";


    //    //INSERÇÃO NO BANCO DE DADOS.
    //    if (count($erro) == 0)
    //    {
            $sql_code = "INSERT INTO cliente (
                nome,
                cpf,
                data_nascimento,
                telefone,
                email,
                senha)
                VALUES (
                '$_POST[nome]',
                '$_POST[cpf]',
                '$_POST[data_nascimento]',
                '$_POST[telefone]',
                '$_POST[email]',
                '$_POST[senha]'
            )";

            $confirmarCadastro = $mysqli -> query($sql_code)
            or die ($mysqli -> error);

            //Verificar se os dados forão inseridos com sucesso no Banco de Dados.
            if ($confirmarCadastro)
            {
                unset ($_SESSION['nome'],
                $_SESSION['cpf'],
                $_SESSION['data_nascimento'],
                $_SESSION['telefone'],
                $_SESSION['email'],
                $_SESSION['senha']);

                //Redirecionar para a página de Cliente.
                header (Location: "../../view_cliente/index_cliente.php");
            }
            else
            {
                $erro[] = $confirmarCadastro;
            }
       }
    
?>