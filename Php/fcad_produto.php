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
    <form action="inserir_prod.php" method="post">
        nome produto: <br>
        <input type="text" name="nom_produto"> <br>
        Quantidade produto: <br>
        <input type="text" name="qtde_produto"> <br>
        Valor produto: <br>
        <input type="text" name="valor_produto"> <br>
        
        <input type="submit" value="salvar">
    </form>
</body>
</html>