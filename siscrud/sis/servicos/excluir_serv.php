<?php
    $id = $_GET["id_serv"];

    $sql = "delete from servicos where id_serv='" . $id . "';"; 

    $resultado = mysqli_query($con, $sql);

    if($resultado){
        header('Location: index.php?page=lista_serv&msg=3');
        mysqli_close($con);
    }else{
        header('Location: index.php?page=lista_serv&msg=4');
        mysqli_close($con);
    }

?>