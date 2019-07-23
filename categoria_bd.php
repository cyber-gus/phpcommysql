<?php
function listar_categoria($conexao){
$categorias= array();
$query = "SELECT * FROM categoria";
$resultado = mysqli_query($conexao,$query);

  while($categoria = mysqli_fetch_assoc($resultado)){
    array_push($categorias,$categoria);
  }
  return $categorias;
}
function insereCategoria($conexao,$categoria,$descricao){
  $query ="Insert into CATEGORIA (nome,descricao) values ('{$categoria}', '{$descricao}')";
  $resultado_categoria = mysqli_query($conexao, $query);
  return $resultado_categoria;
}
function apagarCategoria($conexao,$id){
  $query = "DELETE FROM CATEGORIA WHERE ID = {$id}";
  return mysqli_query($conexao,$query);
}
function buscarCategoria($conexao, $id){
  $query = "SELECT * FROM CATEGORIA WHERE ID = {$id}";
  $resultado = mysqli_query($conexao, $query);
  $produto = mysqli_fetch_assoc($resultado);
  return $produto;
}

function alteraCategoria($conexao, $nome, $descricao, $id){
  $query = "UPDATE CATEGORIA SET NOME = '{$nome}', DESCRICAO = '{$descricao}' WHERE ID = {$id}";
  return mysqli_query($conexao,$query);

}

?>
