<?php include("cabecalho.php");
include("categoria_bd.php");
include("bd.php"); ?>
<?php

if(isset($_GET['removeu'])){
$removeu= $_GET['removeu'];

  if($removeu){
      echo"<p class= text-success'>Categoria removida.</p>";
  }else {
  echo"<p class= text-danger'>Ocorreu um problema. TENTE MAIS TARDE.</p>";
}
}
  if(isset($_GET['cadastrou'])){
    $cadastrou= $_GET['cadastrou'];
    $categoriaCadastrada= $_GET['nome'];
    $descricaoCadastrada= $_GET['descricao'];
      if($cadastrou){
        echo"<p class= text-success>A $categoriaCadastrada foi cadastrado como $descricaoCadastrada.</p>";
      }else {
        echo"<p class= text-danger>Ocorreu um problema. TENTE MAIS TARDE.</p>";
}
}
if (isset($_GET['id'])){
      $id = $_GET['id'];
      $categoriaAlteracao = buscarCategoria($conexao, $id);

?>

      <form action= "/salva_categoria.php" method= "post">
            <table class="table">
              <input type="hidden" value="<?= $categoriaAlteracao['id'] ?>" name="id"/>
              <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" value="<?= $categoriaAlteracao['nome'] ?>" /></td>
            </tr>
            <tr>
        <td>Descrição:</td>
        <td><input type="text" name="descricao" value="<?= $categoriaAlteracao['descricao'] ?>"/></td>
            </tr>
    <tr>
                <td><input type="submit" class="btn btn-primary" value="Alterar"/></td>
                  </tr>
  </table>
  </form>
<?php
} else{
?>

      <form action = "/salva_categoria.php" method="post" />
      <table class="table">
        <tr>
      <td>Categoria:</td>
      <td><input type="text" name="nome" /></td>
      </tr>
      <tr>
      <td>Desriçao:</td>
      <td><input type="text" name="descricao" /></td>
      </tr>
      <tr>
          <td><input type="submit" class="btn btn-primary" value="Cadastrar"/></td>
            </tr>
        </table>
        </form>
        <?php
      }
      ?>
<?php include("listar_categoria.php");?>
<?php include("rodape.php"); ?>
