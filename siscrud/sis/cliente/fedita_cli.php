<?php
	//include "base\conexao.php";
	$id = (int) $_GET['id_cli'];
	$sql = mysqli_query($con, "select * from cliente where id_cli = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
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
	<br><h3 class="page-header">Editar registro do Cliente - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_cli&id_cli=<?php echo $row['id_cli']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_cli">ID</label>
			<input type="text" class="form-control" name="id_cli" value="<?php echo $row["id_cli"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_cli" value="<?php echo $row["nome_cli"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="cpf_cli">CPF</label>
			<input type="text" class="form-control" name="cpf_cli" value="<?php echo $row["cpf_cli"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="sexo">Sexo</label>
			<select class="form-control" name="sexo_cli">
				<?php 
				if($row["sexo_cli"]=="M") 
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
			<label for="rg_cli">RG</label>
			<input type="text" class="form-control" name="rg_cli" value="<?php echo $row["rg_cli"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="escolaridade">Escolaridade</label>
			<select class="form-control" name="escolaridade" >
                <option value="F">Ensino Fundamental</option>
                <option value="M">Ensino Médio</option>
                <option value="S">Ensino Superior</option>
            </select>
		</div>
	</div>

	

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_cli" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>