<?php
  include("cabecalho.php");
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}',{$preco})";

    $conexao = mysqli_connect('localhost', 'root', '', 'ecommerce');
  if(mysqli_query($conexao, $query)){
        echo "<p class= 'alert-success'> O produto $nome, no valor $preco reais, foi cadastrado com sucesso. </p>";
      } else {
        echo "<p class= 'alert-danger' > Deu um ruim aqui e o produto não cadastrou.";
      }
  include("rodape.php");
 ?>
