<?php
    $con = mysqli_connect("localhost", "root", "", "base");

    $id = (int) $_GET["id"];

    $sql = "delete from produto where id_produto=".$id;

    $resultado= mysqli_query($con,$sql);

    if($resultado){
        echo "Produto excluido com sucesso";
        include "lista_produto.php";
    }else{
        echo "Babou";
    }

?>