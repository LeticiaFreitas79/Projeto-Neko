<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $database = "clinicanekodb";
   $port = "3306";
   $charset = "utf8";
   
    //Criando conexão
    
    try{
        $conexao = new mysqli($host, $user, $pass, $database, $port);
        mysqli_set_charset($conexao,$charset);
    }catch(throwable $th){
        die("Não foi possivel conectar". $th);
    }

    //Verificar conexão
    //if($conexao->connect_error){
    //die("Falha ao conectar ao banco: ".$conexao->connect_error);
    //echo "Conectado com sucesso.";

 
?>