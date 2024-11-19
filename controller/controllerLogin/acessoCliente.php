<!--Objetivo do Código: Controla quem tem acesso ás páginas de cliente.-->
<!--Status do Código: Concluído-->

<?php

    session_start();

    if (!isset($_SESSION['id']))
    {
        die("Acesso inválido.
            Você precisa estar logado no site da Clínica Veterinária Neko para acessar esta página.
                <p>
                    <a href=\"../view_login/index_login.php\">Faça seu Login</a>
                </p>"); 
    }
?>