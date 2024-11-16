<!--Objetivo do Código: Controla quem tem acesso ás páginas de cliente.-->
<!--Status do Código: Em análise; necessita de teste-->

<?php
    if(!isset($_SESSION))
    {
        session_start('session_cliente');
    }

    if (!isset($_SESSION['id']))
    {
        die("Acesso inválido.
            Você precisa estar logado no site da Clínica Vetrinária Neko para acessar esta página.
                <p>
                    <a href=\"index_login.php\">Faça seu Login</a>
                </p>"); //Revisar
    }
?>