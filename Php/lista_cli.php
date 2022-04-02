<?php
$con = mysqli_connect("localhost","root","","base");

$sql = "select * from cliente;";
$dados = mysqli_query($con,$sql);

echo "<table border ='1'>";
while($info = mysqli_fetch_array($dados)){
    echo "<tr> <td>".$info['id_cli']."</td>";
    echo "<td>".$info['nome_cli'] ."</td>";
    echo "<td>".$info['cpf_cli'] ."</td>";
    echo "<td>".$info['rg_cli'] ."</td>";
    echo "<td>".$info['dt_nasc_cli'] ."</td>";
    echo "<td>".$info['sexo_cli'] ."</td>";
    echo "<td>".$info['escolaridade_cli'] ."</td>";
    echo "<td>".$info['nome_pai_cli'] ."</td>";
    echo "<td>".$info['nome_mae_cli'] ."</td></tr>";
}


?>