<?php
    $matricula		  = $_POST["matricula"];
    $nome             = $_POST["nome_aluno"];
    $dt_nasc          = $_POST["dt_nasc"];
    $sexo             = $_POST["sexo_aluno"];
    $nomepai          = $_POST["nome_pai"];
    $nomemae          = $_POST["nome_mae"];
    $rg           	  = $_POST["rg_aluno"];
    $cpf              = $_POST["cpf_aluno"];

    $fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc)); 

    $sql = "update aluno set ";
    $sql .= "nome_aluno='".$nome."', nome_pai='".$nomepai."', nome_mae='".$nomemae."',";
    $sql .= "dt_nasc='".$fdg_dt_nasc."', rg_aluno='".$rg."', cpf_aluno='".$cpf."', sexo_aluno='".$sexo."'";
    $sql .= "where matricula = '".$matricula."';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_alu&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_alu&msg=4');
        mysqli_close($con);
    }
?>