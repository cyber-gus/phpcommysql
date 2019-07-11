<?php
  include("cabecalho.php");
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];

  $query= "insert into CATEGORIA (CATEGORIA, DESCRICAO) values({$categoria},{$descricao}) ";

    $conexao= mysqli_connect('localhost','root','','ecommerce');

      if(mysqli_query($conexao, $query)){
        echo "<p class= 'alert-success'> O produto $categoria, foi descrito como: $descricao. </p>";
      } else {
        echo "<p class= 'alert-danger'> Tanto a $descricao, quanto sua respectiva categoria $categoria tiveram problemas no cadastramento. TENTE NOVAMENTE MAIS TARDE!";
      }
  include("rodape.php");

 ?>
