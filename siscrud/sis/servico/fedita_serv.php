<?php
	//include "base\conexao.php";
	$id = (int) $_GET['id_serv'];
	$sql = mysqli_query($con, "select * from servico where id_serv = '".$id."';");
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
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Serviços</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar serviços -->
			<a href="?page=fadd_serv" class="btn btn-primary pull-right h2">Novo Serviço</a> 
		</div>
	</div>
	<form action="?page=insere_serv" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="id_serv">ID</label>
				<input type="text" class="form-control" name="id_serv" readonly>
			</div>
			<div class="form-group col-md-5">
				<label for="nome_serv">Nome do Serviço</label>
				<input type="text" class="form-control" name="nome_serv">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-6">
				<label for="valor_serv">Valor</label>
				<input type="text" class="form-control" name="valor_serv">
			</div>

            <div class="row"> 
			<div class="form-group col-md-6">
				<label for="temp_est_serv">Tempo Estimado</label>
				<input type="text" class="form-control" name="temp_est_serv">
			</div>
		</div>

		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_cli" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>