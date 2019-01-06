<?php
 
require 'connect.php';

if (isset($_POST['submitSave'])) {
    $nome = $_POST[`nome`];
    $preco = $_POST[`preco`];
    $quantidade = $_POST[`quantidade`];
    $descricao = $_POST[`descricao`];
    mysqli_query($con, 'inset into produto(name, price, quantity, description) values("' . $nome . '",' . $preco . ',' . $quantidade . ',"' . $descricao . '")');
}
?>

<h3>Adicionar produto</h3>
<form method="post">
    <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input type="text" name="preco"></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><textarea rows="5" cols="20" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submitSave" value="Save"></td>
        </tr>
    </table>
</form>