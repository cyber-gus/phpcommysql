<?php
  include("cabecalho.php");
  include("bd.php");
    function insereProduto($conexao, $nome, $preco){
        $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}',{$preco})";
        $resultadoDoInsere = mysqli_query($conexao, $query);
      return $resultadoDoInsere;
    }

  $nome= $_POST["nome"];
  $preco= $_POST["preco"];

    if (isset($_POST["id"])){
      $id = $_POST["id"];
      if (alteraProduto($conexao, $nome, $preco, $id)){
        header ("Location: cadastro_produto.php?alterou=true&nome={$nome}&preco={$preco}");
      }
      echo mysqli_error($conexao);
      header("Location: cadastro_produto.php?alterou=false");
    } else {

  if(insereProduto($conexao, $nome, $preco)){
    header("Location: cadastro_produto.php?cadastrou=true&nome={$nome}&preco={$preco}");
  } else {
    header("Location: cadastro_produto.php?cadastrou=false");
  }
  }
  include("rodape.php");
 ?>
