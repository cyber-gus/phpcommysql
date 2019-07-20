<?php
include("cabecalho.php");
include("bd.php");
include("categoria_bd.php");?>
<table class="table">;
<?php
$categorias= listar_categoria($conexao);
foreach ($categorias as $categoria) {
?>
  <tr>
    <td><?= $categoria['nome'] ?></td>
    <td><?= $categoria['descricao'] ?></td>
    <td><a href="remove_categoria.php?id=<?= $categoria['id'] ?>" class="text-danger" >Remover</a></td>
    </tr>
<?php
}
?>
</table>
<?php include("rodape.php");?>
