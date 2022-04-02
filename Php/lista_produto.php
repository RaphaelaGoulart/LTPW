<?php
$con = mysqli_connect("localhost","root","","base");
$sql = "select * from produto;";
$dados = mysqli_query($con,$sql);
echo "<table border ='1'>";
while($info = mysqli_fetch_array($dados)){
    echo "<tr> <td>". $info['id_produto']."</td>";
    echo "<td>".$info['nom_produto'] ."</td>";
    echo "<td>".$info['qtde_produto'] ."</td>";
    echo "<td>".$info['valor_produto'] ."</td></tr>";
}


?>