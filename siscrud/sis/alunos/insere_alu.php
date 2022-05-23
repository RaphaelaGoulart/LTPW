<?php

    $nome             = $_POST["nome_aluno"];
    $dt_nasc          = $_POST["dt_nasc"];
    $sexo             = $_POST["sexo_aluno"];
    $nomepai          = $_POST["nome_pai"];
    $nomemae          = $_POST["nome_mae"];
    $rg           	  = $_POST["rg_aluno"];
    $cpf              = $_POST["cpf_aluno"];

    $fdt_nasc 	= implode("-", array_reverse(explode("/", $dt_nasc)));

    $sql = "insert into aluno values ";
    $sql .= "('0','$nome','$nomepai','$nomemae','$dt_nasc','$sexo','$rg','$cpf');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_alu&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_alu&msg=4');
        mysqli_close($con);
    }
?>