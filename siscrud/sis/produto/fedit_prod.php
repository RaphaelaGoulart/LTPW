<?php

    $id = (int) $_GET["id"];
   
    $con = mysqli_connect("localhost", "root", "", "base");

   $sql = "select * from produto where id_produto=".$id;
   
   $dados = mysqli_query($con,$sql);

   $row =  mysqli_fetch_array($dados);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de Produtos</h3>
    <form action="atualiza_prod.php" method="post">
        ID produto: <br>
        <input type="text" name="id_produto" readonly value="<?php echo $id?>"><br>
        Nome produto: <br>
        <input type="text" name="nome_produto" value="<?php echo $row['nome_produto']?>"><br>
        Quantidade produto: <br>
        <input type="text" name="qtde_produto" value="<?php echo $row['qtde_produto']?>"><br>
        Valor produto: <br>
        <input type="text" name="valor_produto" value="<?php echo $row['valor_produto']?>"><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>