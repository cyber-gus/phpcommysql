<?php
      include("cabecalho.php");?>

<?php
      include("bd.php"); ?>
<?php
    function insereCategoria($conexao, $categoria, $descricao){
      $query= "insert into CATEGORIA (NOME, DESCRICAO) values('{$categoria}','{$descricao}')";
      $resultadoDoInsere = mysqli_query($conexao, $query);
      return $resultadoDoInsere;
    }

$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];

      if(inserecategoria($conexao, $categoria, $descricao)){
        echo "<p class= 'alert-success'> O produto $categoria, foi descrito como: $descricao. </p>";
      } else {
        echo "<p class= 'alert-danger'> Tanto a $descricao, quanto sua respectiva categoria $categoria tiveram problemas no cadastramento. TENTE NOVAMENTE MAIS TARDE!";
      }
  include("rodape.php");

 ?>
