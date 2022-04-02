<?php

$con = mysqli_connect("localhost","root","","base");

$nome= $_POST["nome_cli"];
$cpf= $_POST["cpf_cli"];
$rg= $_POST["rg_cli"];
$datanasc= $_POST["dt_nasc_cli"];
$sexo= $_POST["sexo_cli"];
$escolaridade= $_POST["escolaridade_cli"];
$nomep= $_POST["nome_pai_cli"];
$nomem= $_POST["nome_mae_cli"];

$sql= "insert into cliente values";
$sql.= "('0','$nome', '$cpf', '$rg', '$datanasc', '$sexo', '$escolaridade', '$nomep', '$nomem')";

//echo $sql;
//exit;

$result = mysqli_query($con,$sql);

if($result){
    echo "Dados do Cliente Inseridos com Sucesso!";
    include "lista_cli.php";
} else{
    echo "Babou!";
}


?>