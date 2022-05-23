<?php

    // Upload
    //$dir = "/opt/lampp/htdocs/documento/upload/";
    //$file = $dir . $_FILES["local_doc"]["name"];
    //$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
    //$check = getimagesize($_FILES["local_doc"]["tmp_name"]); 
    //$FezUpload = move_uploaded_file($_FILES["local_doc"]["tmp_name"], $file);
    //$caminhoCerto = "/documento/upload/" . $_FILES["local_doc"]["name"];
    
    $file = $_FILES["local_doc"]["tmp_name"];
    $dir = "C:/xampp/htdocs/siscrud/sis/documento/upload/" . $_FILES["local_doc"]["name"];

    copy($file, $dir);

   // echo $file . "<br>" . $dir . "<br>";

    // Salvando no banco
    $titulo = $_POST["tit_doc"];
    $desc = $_POST["desc_doc"];
    $local = $caminhoCerto;
    $status = $_POST["status_doc"];
    $versao = $_POST["versao_doc"];

    $sql = "insert into documento values ('0', '$titulo', '$desc', '$status','$versao','$dir');";
    
    $resultado = mysqli_query($con,$sql); 
     

    if($resultado && $FezUpload==1){
        header('Location: index.php?page=lista_doc&msg=1');
        mysqli_close($con);
    }else{
        header('Location: index.php?page=lista_doc&msg=4');
        mysqli_close($con);
    }
?>