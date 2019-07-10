<?php include("cabecalho.php"); ?>
      <form action= "/salva_produto.php" method= "post">

        Nome: <input type ="text" name = "nome" /> <br />
        Preço: <input type = "number" name = "preco" /> <br />

                  <input type = "submit" value = "cadastrar" /> <br/>
                  <a href = "index.php" >Página inicial<a/> <br/>
                  <a href = "cadastro_categoria.php" >Cadastrar categoria<a/>
<?php include("rodape.php"); ?>  
