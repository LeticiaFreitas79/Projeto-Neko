<<<<<<< HEAD
<!--Código com objetivo de Deletar produtos-->

<?php
require_once("../model/banco.php");
class deletar {
    private $deletar;

    public function __construct($id){
        $this->deletar = new Banco();
        if($this->deletar->deleteLivro($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deletar($_GET['id']);
?>
=======
<!--Objetivo do Código: Deve conter a função de deletar um produto. Esta página não possui nenhum view, apenas contém a função deletar. -->
<!--Status do Código: Em desenvolvimento-->
>>>>>>> db43eebd03259136a2c4ecf3e6dab0092e207fe0
