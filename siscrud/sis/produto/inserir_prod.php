<?php
    $con = mysqli_connect("localhost", "root", "", "base");

    $nome = $_POST["nome_produto"];
    $qtde = $_POST["qtde_produto"];
    $valor = $_POST["valor_produto"];

    $sql = "insert into produto values";
    $sql .= "('0', '$nome', $qtde, $valor)";

    $result = mysqli_query($con, $sql);

    if($result ){
        echo "Dados do produto inseridos com sucesso!";
        include "lista_produto.php";
    }else{
        echo "babou";
    }

?>