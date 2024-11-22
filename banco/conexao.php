<!--Objetivo do Código: Conecta com o Banco de Dados; Arquivo para ser referenciado em outros arquivos-->
<!--Status do Código: Concluído-->

<?php

    //Definindo variáveis para conexão com o Banco de Dados.
    $host = "10.91.45.136"; //Endereço do servidor do Banco de Dados.
    $database = "clinicanekodb"; //Nome do Banco de Dados a ser acessado.
    $user = "root"; //Nome do usuário do Banco de Dados.
    $pass = ""; //Senha do Banco de Dados.
    $charset = "utf8"; //Define o conjunto de caracteres.
    $port = "3306"; //Porta onde o MySQL é executado.

    //Conexão com o Banco de Dados.
    $conectar = new mysqli($host, $user, $pass, $database, $port);

    //Verificar se houve um erro na conexão.
    if ($conectar->connect_error)
    {
        die("Erro de Conexão: " . $conectar->connect_error);
    }

    //Definir conjunto de caracteres.
    if (!$conectar->set_charset($charset))
    {
        die("Erro ao definir charset: " . $conectar->error);
    }

    //Banco de Dados conectado ao site.
    echo "Sucesso ao conectar ao Banco de Dados!";

?>