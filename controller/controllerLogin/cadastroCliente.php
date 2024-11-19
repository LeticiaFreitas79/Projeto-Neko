<!--Objetivo do Código: Puxa as informações em "login_cadastro.php" e as insere no Banco de Dados-->
<!--Status do Código: Concluído-->

<?php
    //Confirmando que o formulário foi enviado.
    if (isset($_POST['submit']))
    {
       //REGISTRO DOS DADOS.
        if (!isset($_SESSION));
        session_start();

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
            '$_POST[email]',
            '$_POST[senha]'
            )";

            $sql_code = "INSERT INTO telefone (
            '$_POST[numero]',
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