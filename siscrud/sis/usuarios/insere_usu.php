<?php
$nome 			= $_POST["nome"];
$usuario		= $_POST["usuario"];
$senha			= $_POST["senha"];
$email			= $_POST["email"];
$nivel			= $_POST["nivel"];

$sql = "insert into usuario values ";
$sql .= "('0','$nome','$usuario', '".sha1($senha)."','$email','$nivel','1', '".date('Y-m-d')."');";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if($resultado){
	header('Location: \siscrud/index.php?page=lista_usu&msg=1');
	mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_usu&msg=6');
	mysqli_close($con);
}
?>