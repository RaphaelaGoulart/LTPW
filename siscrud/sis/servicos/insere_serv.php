<?php
    $id = strtoupper($_POST["id_serv"]);
    $nome = strtoupper($_POST["nome_serv"]);
    $sigla = strtoupper($_POST["sigla_serv"]);
    $valor = strtoupper($_POST["valor_serv"]);
    $tempo = strtoupper($_POST["tempo_est_serv"]);

    $sql = "insert into servicos values ";
    $sql .= "('0', '$nome', '$sigla', '$valor', '$tempo')";

    $resultado = mysqli_query($con, $sql);

    if($resultado){
        header('Location: index.php?page=lista_serv&msg=1');
        mysqli_close($con);
    }else{
        header('Location: index.php?page=lista_serv&msg=4');
        mysqli_close($con);
    }
?>