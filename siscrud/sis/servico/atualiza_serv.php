<?php
    $nome             = $_POST["nome_serv"];
    $sigla             = $_POST["sigla_serv"];
    $valor             = $_POST["valor_serv"];
    $temp        	  = $_POST["temp_est_serv"];
    


    $sql = "update servico set ";
    $sql .= "nome_serv='".$nome."', sigla_serv='".$sigla."', valor_serv='".$valor."',";
    $sql .= "temp_est_serv='".$temp."'";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \trab_freitas/index.php?page=lista_cli&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \trab_freitas/index.php?page=lista_cli&msg=4');
        mysqli_close($con);
    }
?>