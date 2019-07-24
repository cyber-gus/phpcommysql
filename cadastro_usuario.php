<?php include("cabecalho.php");
include("produto_bd.php");
include("bd.php");

  if(isset($_GET['cadastrou'])){
        $cadastrou= $_GET['cadastrou'];
        $usuarioCadastrado= $_GET['email'];

          if($cadastrou){
            echo"<p class= text-success>O $usuarioCadastrado foi cadastrado com sucesso.</p>";
          }else {
              echo"<p class= text-danger>Ocorreu um problema. TENTE MAIS TARDE.</p>";
      }
  }

?>

        <form action= "/salva_usuario.php" method= "post">
              <table class="table">

                <tr>
          <td>E-mail:</td>
          <td><input type="text" name="email" /></td>
              </tr>
              <tr>
          <td>Senha:</td>
          <td><input type="password" name="senha" /></td>
              </tr>
      <tr>
                  <td><input input type="submit"  class="btn btn-primary" value="Cadastrar"/></td>
                    </tr>
    </table>
    </form>

<?php include("rodape.php"); ?>
