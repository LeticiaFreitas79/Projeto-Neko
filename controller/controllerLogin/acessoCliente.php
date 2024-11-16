<!--Objetivo do Código: Controla quem tem acesso ás páginas de cliente.-->
<!--Status do Código: Em desenvolvimento-->

<?php
    if(!isset($_SESSION))
    {
        session_start('session_cliente');
    }

    if (!isset($_SESSIO['id']))
    {
        die("Acesso inválido.
            Você precisa estar logado no site da Clínica Vetrinária Neko para acessar esta página.
                <p>
                    <a href=\"index_login.php\">Faça seu Login</a>
                </p>"); //Revisar
    }
?>











<?php
//PARTE DA ISA; a substituir ou editar
    session_name('clinicanekodb');
    if (!isset($_SESSION)) {
        session_start();
    }
    // segurança digital

    // verificar se o usuário está logado na sessão
    if(!isset($_SESSION['login_usuario'])){
        // se não existir, redirecionamos a sessão por segurança
        header('location: login.php'); // redirecioamento
        exit;
    } 
    $nome_da_sessao = session_name();
    if(!isset($_SESSION['nome_da_sessao']) 
        or ($_SESSION['nome_da_sessao']!=$nome_da_sessao)){
            session_destroy();
            
    }

?>