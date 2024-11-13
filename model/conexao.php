<!--Objetivo do Código: Conecta com o Banco de Dados; Arquivo para ser referenciado em outros arquivos-->
<!--Status do Código: Em análise-->

<?php
    //Definindo váriaveis para conexão com o Banco de Dados.
    $host = "localhost"; //Endereço do servidor do Banco de Dados.
    $database = "clinicanekodb"; //Nome do Banco de Dados a ser acessado.
    $user = "root"; //Nome do usuário do Banco de Dados.
    $pass = ""; //Senha do Banco de Dados.
    $charset = "utf8"; //Define o conjunto de caracteres.
    $port = "3306"; //Porta onde o MySQL é executado.

    //Conexão com o Banco de Dados.
    try
    {
        //Cria um novo objeto da classe 'mysqli' para se conectar ao Banco de Dados.
        $conectar = new mysqli ($host, $user, $pass, $database);

        //Após a conexão ser estabelecida, garante que a troca de dados entre PHP e MySQL ocorra de forma correta.
        mysqli_set_charset ($conectar, $charset);
    }

    //Tratamento de Erros.
    cacth (Throwable $th) //Se algum erro ocorrer no bloco acima, o bloco 'catch' é executado. O erro é capturado na váriavel '$th'.
    {
        //Termina a execução do script e exibe uma mensagem de erro.
        die("Erro de Conexão!" .$th);
    }
?>