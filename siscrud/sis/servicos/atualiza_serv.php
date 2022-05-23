<?php

    $id = strtoupper($_POST["id_serv"]);
    $nome = strtoupper($_POST["nome_serv"]);
    $sigla = strtoupper($_POST["sigla_serv"]);
    $valor = strtoupper($_POST["valor_serv"]);
    $tempo = strtoupper($_POST["tempo_est_serv"]);

    $sql = "update servicos set ";
    $sql .= "nome_serv='" . $nome . "', sigla_serv='" . $sigla . "',";
    $sql .= "valor_serv='" . $valor . "', tempo_est_serv='" . $tempo . "'";
    $sql .= "where id_serv='" . $id . "';";
 echo $sql;
    $resultado = mysqli_query($con, $sql);
    
    if($resultado){
        header('Location: \siscrud/index.php?page=lista_serv&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_serv&msg=4');
        mysqli_close($con);
    }
?>