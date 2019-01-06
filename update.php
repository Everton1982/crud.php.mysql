<?php 

require 'connect.php';

if (isset($_GET['id'])) {
    $result = mysqli_query($con, 'select * from produto where id='.$_GET['id']);
    $produto = mysqli_fetch_object($result);
}

if(isset($_POST['submitSave'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $descricao = $_POST['descricao'];
    mysqli_query($con, 'update produto set nome="'. $nome . '", preco='.$preco.', quantidade='.$quantidade.', descricao="'.$descricao.'" where id='.$id);
    header('location: index.php');
}
?>


<h3>Editar produto</h3>
<form method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><?php echo $produto->id; ?><input type="hidden" name="id" value="<?php echo $produto->id; ?>"></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><?php echo $produto->nome; ?><input type="hidden" name="nome" value="<?php echo $produto->nome; ?>"></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><?php echo $produto->preco; ?><input type="hidden" name="preco" value="<?php echo $produto->preco; ?>"></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><?php echo $produto->quantidade; ?><input type="hidden" name="quantidade" value="<?php echo $produto->quantidade; ?>"></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><?php echo $produto->descricao; ?><input type="hidden" name="descricao" value="<?php echo $produto->descricao; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submitSave" value="Save"></td>
        </tr>
    </table>
</form>
