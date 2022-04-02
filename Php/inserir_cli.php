<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trabalho bootstrap</title>
  </head>
  <body>
    

    <?php

        $con = mysqli_connect("localhost","root","","base");

        $nome= $_POST["nome_cli"];
        $cpf= $_POST["cpf_cli"];
        $rg= $_POST["rg_cli"];
        $datanasc= $_POST["dt_nasc_cli"];
        $sexo= $_POST["sexo_cli"];
        $escolaridade= $_POST["escolaridade_cli"];
        $nomep= $_POST["nome_pai_cli"];
        $nomem= $_POST["nome_mae_cli"];

        $sql= "insert into cliente values";
        $sql.= "('0','$nome', '$cpf', '$rg', '$datanasc', '$sexo', '$escolaridade', '$nomep', '$nomem')";

        //echo $sql;
        //exit;

        $result = mysqli_query($con,$sql);

        if($result){
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Dados cadastrados com sucesso!</strong> 
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
            include "lista_cli.php";
        } else{
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Babou!</strong> 
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }


?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
