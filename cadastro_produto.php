<?php include("cabecalho.php");

  if(isset($_GET['removeu'])){
  $removeu= $_GET['removeu'];

    if($removeu){
        echo"<p class= text-success'>Produto removido</p>";
    }else {
    echo"<p class= text-danger'>Ocorreu um problema. TENTE MAIS TARDE.</p>";
  }
  }
  if(isset($_GET['cadastrou'])){
    $cadastrou= $_GET['cadastrou'];
    $nomeCadastrado= $_GET['nome'];
    $precoCadastrado= $_GET['preco'];
    if($cadastrou){
        echo"<p class= text-success>O Produto $nomeCadastrado foi cadastrado pelo preço $precoCadastrado reais.</p>";
    }else {
    echo"<p class= text-danger>Ocorreu um problema. TENTE MAIS TARDE.</p>";
  }
  }

  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $produtoAlteracao = buscarProduto($conexao, $id);
  ?>

    <form action= "/salva_produto.php" method= "post">
          <table class="table">
            <input type="hidden" value="<?= $produtoAlteracao['ID'] ?>" name="id"/>
            <tr>
      <td>Nome:</td>
      <td><input type="text" name="nome" value="<?= $produtoAlteracao['NOME'] ?>" /></td>
          </tr>
          <tr>
      <td>Preço:</td>
      <td><input type="number" name="preco" value="<?= $produtoAlteracao['PRECO'] ?>"/></td>
          </tr>
  <tr>
              <td><input type="submit" class="btn btn-primary" value="Alterar"/></td>
                </tr>
</table>
</form>
}

<?php include("listar_produto.php");?>
<?php include("rodape.php"); ?>
