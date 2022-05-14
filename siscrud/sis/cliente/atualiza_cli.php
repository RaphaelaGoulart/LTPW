<?php
    $nome             = $_POST["nome_cli"];
    $cpf              = $_POST["cpf_cli"];
    $sexo             = $_POST["sexo_cli"];
    $rg           	  = $_POST["rg_cli"];
    $escolaridade     = $_POST["escolaridade"];


    $sql = "update cliente set ";
    $sql .= "nome_cli='".$nome."', cpf_cli='".$cpf."', sexo_cli='".$sexo."',";
    $sql .= "rg_cli='".$rg."', escolaridade='".$escolaridade."'";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_cli&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_cli&msg=4');
        mysqli_close($con);
    }
?>