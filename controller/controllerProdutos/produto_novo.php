<!--Código com objetivo de Incluir produtos-->

<?php

//Para chegar conexao
$conexao = mysqli_connect("localhost","root","","clinicanekodb","3306","utf8");

//verificar se ja existe cpf cadastrado
$nome = $_POST['cpf'];
$nome = mysqli_real_escape_string($conexao, $nome);
$sql = "SELECT nome FROM clinicanekodb.produto WHERE nome='$nome'";
$retorno = mysqli_query($conexao,$sql);

//busca quantidade de consulta no registro
if(mysqli_num_rows($retorno)>0){
    echo"PRODUTO JA CADASTRADO!<br>";
}else{

//Para puxar a informação do formulario

$id_categoria = $_POST['id_categoria'];
$id_marca = $_POST['id_marca'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_validade = $_POST['data_validade'];
$valor = $_POST['valor'];
$peso= $_POST['peso']; 
$qtde_estoque = $_POST['qtde_estoque'];

//Para inserir as informações do formulário no Banco de dados
$sql = "INSERT INTO produto (id_categoria, id_marca, nome, descricao, data_validade, valor, peso, qtde_estoque) VALUES ('$id_categoria', '$id_marca', '$nome', '$descricao', '$data_validade', '$valor', '$peso', '$qtde_estoque')";
$resultado = $conexao->query($sql);

echo"<a href='produto_listar.php'></a>";
}
?>





