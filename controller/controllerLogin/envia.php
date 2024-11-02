<?php

//chegar conexao
$conexao = mysqli_connect("localhost","root","","clinicanekodb","3306","utf8");

//verificar se ja existe cpf cadastrado
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao, $cpf);
$sql = "SELECT cpf FROM clinicanekodb.cliente WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);

//busca quantidade de consulta no registro
if(mysqli_num_rows($retorno)>0){
    echo"CPF JA CADASTRADO!<br>";
}else{

//Para puxar a informação do formulario
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha']; //md5

//Para inserir as informações do formulário no Banco de dados
$sql = "INSERT INTO cliente (nome, cpf, data_nascimento, email, senha) VALUES ('$nome', '$cpf', '$data_nascimento', '$email', '$senha')";
$resultado = $conexao->query($sql);

echo"<a href='cadastro_cliente.php'>VOLTAR</a>";
}
?>





