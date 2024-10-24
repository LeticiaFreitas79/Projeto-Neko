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