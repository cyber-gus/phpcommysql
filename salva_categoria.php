<?php
      include("cabecalho.php");
      include("categoria_bd.php");
      include("bd.php"); ?>
<?php
$categoria = $_POST["nome"];
$descricao = $_POST["descricao"];

if (isset($_POST["id"])){
  $id = $_POST["id"];
  if (alteraCategoria($conexao, $categoria, $descricao, $id)){
    header ("Location: cadastro_categoria.php?alterou=true&nome={$categoria}&descricao={$descricao}");
  } else{
  echo mysqli_error($conexao);
}
} else {

if(insereCategoria($conexao, $categoria, $descricao, $id)){
header("Location: cadastro_categoria.php?cadastrou=true&nome={$categoria}&descricao={$descricao}");
} else {
header("Location: cadastro_categoria.php?cadastrou=false");
}
}
include("rodape.php");
?>
