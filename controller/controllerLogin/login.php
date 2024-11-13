<!--Objetivo do Código: Analisa as informações inseridas em index_login.php e verifica se existe algum usuário correspondente no Banco de Dados.
    Se o usuário for da tabela 'clientes', redirecionar para a página index_cliente.php
    Se o usuário for da tabela 'usuarios', redirecionar para a página index_adm.php
    Se o usuário não existir, redirecionar para a página login_cadastro.php-->
<!--Status do Código: Em desenvolvimento-->

<?php
    //INICIAR SESSÃO.
    //Serve para manter as informações do cliente em outras páginas do site (view_cliente).
    session_start();

    //ESTABELECER CONEXÃO ENTRE O SITE E O BANCO DE DADOS.
    include ("../../model/conexao.php"); //Sai da pasta 'controllerLogin', sai da pasta 'controller', entra na pasta 'model'.

    //VERIFICAR SE O FORMULÁRIO EM (view_login/index_login.php) FOI ENVIADO.
    //Método PHP usado para enviar o formulário.
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //PUXAR OS DADOS INSERIDOS NO FORMULÁRIO DE LOGIN (view_login/index_login.php).
        $emailUsuario = trim($_POST['emailUsuario']); //A função 'trim' remove espaços em branco foram inseridos no campo pelo usuário, evitando possíveis erros.
        $senhaUsuario = $_POST['senhaUsuario'];
    }

    //VERIFICAR SE O USUÁRIO EXISTE NO BANCO DE DADOS.
    //VERIFICAR A SENHA DO USUÁRIO ENCONTRADO.
    //LOGIN REALIZADO.
    //SENHA INCORRETA.
    //USUÁRIO INEXISTENTE.
    //ACESSO INVÁLIDO.
    














    class Usuario
    {
        //Propriedades da Classe "Usuario".
        public $usuario;
        public $senha;


    }
?>