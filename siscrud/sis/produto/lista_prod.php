<?php 

$con = mysqli_connect("localhost", "root", "", "base");

$sql = "select * from produto;";

$dados = mysqli_query($con,$sql);

echo "<table border='1'>
        <tr><td>ID</td><td>Nome</td><td>Quantidade</td><td>Valor</td><td colspan='2'>Ações</td></tr>";

while($info = mysqli_fetch_array($dados)){
    echo "<tr> <td>" . $info['id_produto'] . "</td>";
    echo "<td>" . $info['nome_produto'] ."</td>";
    echo "<td>" . $info['qtde_produto'] ."</td>";
    echo "<td>" . $info['valor_produto'] ."</td>";
    echo "<td> <a href=excluir_prod.php?id=".$info[0].">Excluir</a> </td>";
    echo "<td> <a href=fedit_prod.php?id=".$info[0]."> Editar </a> </td> </tr>";
}

?>