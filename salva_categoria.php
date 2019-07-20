<?php
      include("cabecalho.php");
      include("categoria_bd.php");
      include("bd.php"); ?>
<?php
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];

if(insereCategoria($conexao, $categoria, $descricao)){
  header("Location: cadastro_categoria.php?cadastrou=true&nome={$categoria}&descricao={$descricao}");
} else {
  header("Location: cadastro_categoria.php?cadastrou=false");
}
  include("rodape.php");

 ?>
