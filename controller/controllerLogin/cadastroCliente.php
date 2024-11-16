<!--Objetivo do Código: Puxa as informações em "login_cadastro.php" e as insere no Banco de Dados-->
<!--Status do Código: Em desenvolvimento-->

<?php
    //Confirmando que o formulário foi enviado.
    if (isset($_POST['submit']))
    {
       //REGISTRO DOS DADOS.
        if (!isset($_SESSION));
        session_start();

        foreach ($_POST as $chave => $valor) $_SESSION[$chave] = $valor;

       //VALIDAÇÃO DOS DADOS.
       if ()

       //INSERÇÃO NO BANCO DE DADOS.

       //REDIRECIONAMENTO.
    }
?>