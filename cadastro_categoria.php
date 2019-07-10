<?php include("cabecalho.php"); ?>
      <form action = "/salva_categoria.php" method="post" />
        Categoria: <input type = "text" name = "categoria" /> <br>
        Descrição: <input type = "text" name = "descricao" /><br>

            <input type = "submit" value="Enviar" /> <br>
        </form>

    <a href = "index.php"> Página inicial <a/><br>
    <a href = "cadastro_produto.php"> Cadastrar produto <a/>
<?php include("rodape.php"); ?>
