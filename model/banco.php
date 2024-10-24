<!--Objetivo do Código: Esta página realiza a conexão entre o Banco de Dados e o site. Ela existe para ser referenciada em outros arquivos-->
<!--Status do Código: Em desenvolvimento-->


conexao 

<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "clinicanekodb";

    //Criando conexão
    $conexao = new mysqli($servername, $username, $password, $dbname);
 
    //Verificar conexão
    if($conexao->connect_error){
    die("Falha ao conectar ao banco: ".$conexao->connect_error);
}
    echo "Conectado com sucesso.";
 
?>