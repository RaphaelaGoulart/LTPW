<?php

    $id = (int) $_GET["id"];

    $con = mysqli_connect("localhost", "root", "", "base");

    $sql ="delete from usuario where id_usu= $id ";

    $resultado = mysqli_query($con,$sql);

    if($resultado){
        echo "Cadastro excluido com sucesso";
        include "lista_usu.php";
    }else{
        echo "babou";
    }

?>