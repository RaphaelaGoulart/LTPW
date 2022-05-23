<?php
$matricula = (int) @$_GET['matricula'];
 
$sql = "delete from aluno where matricula = '$matricula';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \trab_freitas/index.php?page=lista_alu&msg=3');
    mysqli_close($con);
}else{
    header('Location: \trab_freitas/index.php?page=lista_alu&msg=4');
    mysqli_close($con);
}
?>