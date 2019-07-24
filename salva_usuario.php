<?php
  include("usuario.php");
  include("bd.php");
  $email= $_POST["email"];
  $senha= $_POST["senha"];

  if(insereUsuario($conexao, $email, md5($senha))){
    header("Location: cadastro_usuario.php?cadastrou=true&email={$email}");
  } else {
    header("Location:cadastro_usuario.php?cadastrou=false");
  }
 ?>
