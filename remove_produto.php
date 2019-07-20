<?php
include("cabecalho.php");
include("bd.php");
include("produto_bd.php");

$id=$_GET["id"];

apagarProduto($conexao,$id);

if(apagarProduto($conexao, $id)){
  header("Location: cadastro_produto.php?removeu=true");
} else {
  header("Location: cadastro_produto.php?removeu=false");
}
include("rodape.php");

 ?>
