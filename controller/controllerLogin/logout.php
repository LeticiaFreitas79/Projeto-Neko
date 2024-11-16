<!--Objetivo do Código: -->
<!--Status do Código: Em desenvolvimento-->

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    session_destroy();
    header("Location: ../../view_login/index_login.php"); //Redirecionamento funcionando!
?>