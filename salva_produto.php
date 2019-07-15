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

  if(insereProduto($conexao, $nome, $preco)){
        echo "<p class= 'alert-success'> O produto $nome, no valor $preco reais, foi cadastrado com sucesso. </p>";
      } else {
        echo "<p class= 'alert-danger' > Deu um ruim aqui e o produto não cadastrou.";
      }
  include("rodape.php");
 ?>
