<?php
include("cabecalho.php");
include("bd.php");
include("categoria_bd.php");

$id=$_GET["id"];


if(apagarCategoria($conexao, $id)){
  header("Location: cadastro_categoria.php?removeu=true");
} else {
  header("Location: cadastro_categoria.php?removeu=false");
}
include("rodape.php");

 ?>
