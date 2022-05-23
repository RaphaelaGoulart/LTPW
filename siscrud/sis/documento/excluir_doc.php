<?php 
    $id = $_GET["id_doc"];

    $sql = "delete from documento where id_doc='" . $id . "';";

    $resultado = mysqli_query($con, $sql);

    if($resultado){
        header('Location: index.php?page=lista_doc&msg=3');
        mysqli_close($con);
    }else{
        header('Location: index.php?page=lista_doc&msg=4');
        mysqli_close($con);
    }

?>