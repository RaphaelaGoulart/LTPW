
<?php

$nome             = $_POST["nome_serv"];
$sigla             = $_POST["sigla_serv"];
$valor             = $_POST["valor_serv"];
$temp        	  = $_POST["temp_est_serv"];

$sql = "insert into servico values ";
$sql .= "('0','$nome','$sigla','$valor','$temp');";



$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
    header('Location: \trab_freitas/index.php?page=lista_serv&msg=1');
    mysqli_close($con);
}else{
    header('Location: \trab_freitas/index.php?page=lista_serv&msg=4');
    mysqli_close($con);
}
?>