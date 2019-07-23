<?php
function listar_produtos($conexao){
  $produtos = array();
  $query = "SELECT * FROM PRODUTO";
  $resultado = mysqli_query($conexao,$query);

  while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
  }
  return $produtos;
}
function insereProduto($conexao,$nome,$preco){

  $query ="Insert into PRODUTO (NOME,PRECO) values ('{$nome}', {$preco})";
  $resultadoDoInsere = mysqli_query($conexao, $query);
  return $resultadoDoInsere;
}

function apagarProduto($conexao,$id){
  $query = "DELETE FROM PRODUTO WHERE ID = {$id}";
  return mysqli_query($conexao,$query);
}
function buscarProduto($conexao, $id){
  $query = "SELECT * FROM PRODUTO WHERE ID = {$id}";
  $resultado = mysqli_query($conexao, $query);
  $produto = mysqli_fetch_assoc($resultado);
  return $produto;
}

function alteraProduto($conexao, $nome, $preco, $id){
  $query = "UPDATE PRODUTO SET NOME = '{$nome}', PRECO = '{$preco}' WHERE ID = {$id}";
  return mysqli_query($conexao,$query);

}
?>
