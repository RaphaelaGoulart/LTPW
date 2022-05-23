<?php
$id = (int) @$_GET['id_serv'];
 
$sql = "delete from servico where id_serv = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \trab_freitas/index.php?page=lista_cli&msg=3');
    mysqli_close($con);
}else{
    header('Location: \trab_freitas/index.php?page=lista_cli&msg=4');
    mysqli_close($con);
}
?>