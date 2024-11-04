
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Produtos - Inserir | Clínica Neko</title>
</head>
<body>


<form action="produto_novo.php" method="POST">

ID Categoria <input  type="text" name="id_categoria" required> <br> </input>
ID Marca<input  type="text" name="id_marca" required> <br> </input>
Nome<input  type="text" name="nome" required> <br></input>
Descrição<input  type="text" name="descricao" required> <br></input>
Data de Validade<input  type="date" name="data_validade" required> <br> </input>
Valor<input  type="number" name="valor" step="0.01" required> <br> </input>
Peso<input  type="number" name="peso" step="0.01" required> <br> </input>
Quantidade Estoque<input  type="number" name="qtde_estoque" required> <br> </input>
<button class="btn-inserir" type="submit" >Inserir</button>
</form>
