<?php
  include("cabecalho.php");
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];

echo "<p class='alert-success'> O produto $categoria, foi descrito como: $descricao. </p>";
  include("rodape.php");

 ?>
