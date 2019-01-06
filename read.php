<?php require 'connect.php'; ?>

<?php
if (isset($_GET['action'])) {
    $id = $_GET['id'];
    mysqli_query($con, 'delete from produto where id' . $id);
}

?>

<br>
<table class="table table-sm">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição</th>
    </tr>

    
    <?php
$result = mysqli_query($con, 'select * from produto');
while ($produto = mysqli_fetch_object($result)) {
    ?>
          <tr>
              <td><?php echo $produto->id; ?></td>
              <td><?php echo $produto->nome; ?></td>
              <td><?php echo $produto->preco; ?></td>
              <td><a href="index.php?id=<?php echo $produto->id; ?>&action=delete" onclick="return confirm('Você tem certeza?')">Deletar</a> | <a href="update.php?id=<?php echo $produto->id; ?>">Editar</a>
            </td>
        </tr>
        <?php 
} ?>
</table>
