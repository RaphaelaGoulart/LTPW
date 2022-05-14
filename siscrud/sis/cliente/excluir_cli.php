<?php
$id = (int) @$_GET['id_cli'];
 
$sql = "delete from cliente where id_cli = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_cli&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_cli&msg=4');
    mysqli_close($con);
}
?>