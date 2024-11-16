<!--Objetivo do Código: Controla quem tem acesso ás páginas Administrativas.-->
<!--Status do Código: Em desenvolvimento-->

<?php
    if(!isset($_SESSION))
    {
        session_start('session_adm');
    }

    if (!isset($_SESSIO['id']))
    {
        die("Acesso inválido.
            Você precisa estar logado como administrador para acessar esta página.
                <p>
                    <a href=\"index_login.php\">Faça seu Login</a>
                </p>"); //Revisar
    }
?>