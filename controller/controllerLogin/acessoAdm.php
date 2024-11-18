<!--Objetivo do Código: Controla quem tem acesso ás páginas Administrativas.-->
<!--Status do Código: Em análise; necessita de teste-->

<?php

    session_start();

    if (!isset($_SESSION['id']))
    {
        die("Acesso inválido.
            Você precisa estar logado como administrador para acessar esta página.
                <p>
                    <a href=\"../view_login/index_login.php\">Faça seu Login</a>
                </p>"); //Revisar
    }
?>