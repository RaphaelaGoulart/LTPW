<?php

    $nome             = $_POST["nome_cli"];
    $cpf              = $_POST["cpf_cli"];
    $sexo             = $_POST["sexo_cli"];
    $rg           	  = $_POST["rg_cli"];
    $escolaridade     = $_POST["escolaridade"];

    $sql = "insert into cliente values ";
    $sql .= "('0','$nome','$cpf','$sexo','$rg','$escolaridade');";

<<<<<<< HEAD
   // echo $sql; exit;
=======
 
>>>>>>> c72bdb71bd2a6635c56695ff36db0513b18cb3a0

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
<<<<<<< HEAD
        header('Location: \siscrud/index.php?page=lista_cli&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_cli&msg=4');
=======
        header('Location: \trab_freitas/index.php?page=lista_cli&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \trab_freitas/index.php?page=lista_cli&msg=4');
>>>>>>> c72bdb71bd2a6635c56695ff36db0513b18cb3a0
        mysqli_close($con);
    }
?>