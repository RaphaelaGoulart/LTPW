<?php

    $con = mysqli_connect("localhost", "root", "", "base");

    $id = $_POST["id_produto"];
    $nome = $_POST["nome_produto"];
    $qtde = $_POST["qtde_produto"];
    $valor = $_POST["valor_produto"];

    $sql = "update produto set ";
    $sql .= "nome_produto = '$nome', qtde_produto = '$qtde', ";
    $sql .= "valor_produto = '$valor' where id_produto = '$id';";


    $result = mysqli_query($con, $sql); 

    if($result){
        echo "Cadastro atualizado com suceso!";
        include "lista_produto.php";
    }else{
        echo "babou";
    }

?>