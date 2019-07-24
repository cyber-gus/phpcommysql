<?php function insereUsuario($conexao,$email,$senha){

  $query ="INSERT into USUARIO (EMAIL,SENHA) values ('{$email}', '{$senha}')";
  $resultadoDoInsere = mysqli_query($conexao, $query);
  return $resultadoDoInsere;
}

?>
