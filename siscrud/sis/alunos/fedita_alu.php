<?php
	//include "base\conexao.php";
	$matricula = (int) $_GET['matricula'];
	$sql = mysqli_query($con, "select * from aluno where matricula = '".$matricula."';");
	$row = mysqli_fetch_array($sql);
?>]


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
        <div id="main" class="container-fluid">
            <br><h3 class="page-header">Editar registro do Aluno - <?php echo $matricula;?></h3>

            <!-- Área de campos do formulário de edição-->

            <form action="?page=atualiza_alu&matricula=<?php echo $row['matricula']; ?>" method="post">

            <!-- 1ª LINHA -->	
            <div class="row"> 
                <div class="form-group col-md-2">
                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" name="matricula" value="<?php echo $row["matricula"]; ?>">
                </div>
                <div class="form-group col-md-5">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" name="nome_aluno" value="<?php echo $row["nome_aluno"]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="dt_nasc">Data Nascimento</label>
                    <input type="text" class="form-control" name="dt_nasc" value="<?php echo date('d/m/Y',strtotime($row["dt_nasc"])); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="sexo">Sexo</label>
                    <select class="form-control" name="sexo_aluno">
                        <?php 
                        if($row["sexo_aluno"]=="M") 
                            echo '<option selected="selected" value="M">Masculino</option><option value="F">Feminino</option>'; 
                        else 
                            echo '<option value="M">Masculino</option><option selected="selected" value="F">Feminino</option>'; 
                        ?>
                    </select>
                </div>
            </div>

            <!-- 2ª LINHA -->
            <div class="row"> 
                <div class="form-group col-md-6">
                    <label for="nome_pai">Nome do Pai</label>
                    <input type="text" class="form-control" name="nome_pai" value="<?php echo $row["nome_pai"]; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="nome_mae">Nome da Mãe</label>
                    <input type="text" class="form-control" name="nome_mae" value="<?php echo $row["nome_mae"]; ?>">
                </div>
            </div>

            <!-- 3ª LINHA -->
            <div class="row"> 
                <div class="form-group col-md-4">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" name="rg_aluno" value="<?php echo $row["rg_aluno"]; ?>">
                </div>
            
                <div class="form-group col-md-4">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf_aluno" value="<?php echo $row["cpf_aluno"]; ?>">
                </div>

            </div>

            <hr/>

            <div id="actions" class="row">
                <div class="col-md-12">
                    <a href="?page=lista_alu" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>