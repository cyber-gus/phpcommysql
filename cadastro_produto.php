<?php include("cabecalho.php"); ?>
      <form action= "/salva_produto.php" method= "post">

          <table class="table">
            <tr>
      <td>Nome:</td>
      <td><input type="text" name="nome" /></td>
          </tr>
          <tr>
      <td>Preço:</td>
      <td><input type="number" name="preco" /></td>
          </tr>
  <tr>
              <td><input type="submit" class="btn btn-primary" value="cadastrar"/></td>
                </tr>
</table>
</form>
<?php include("rodape.php"); ?>
