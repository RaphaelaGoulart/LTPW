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
			<h2>Serviço</h2>
		</div>
		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar servicos -->
			<a href="?page=fadd_alu" class="btn btn-primary pull-right h2">Novo Serviço</a> 
		</div>
	</div>
	<!-- Área de campos do formulário de edição-->

	<form action="?page=insere_serv" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_serv">ID</label>
			<input type="text" class="form-control" name="id_serv" readonly>
		</div>
		<div class="form-group col-md-6">
			<label for="nome">Nome Serviço</label>
			<input type="text" class="form-control" name="nome_serv">
		</div>
		<div class="form-group col-md-4">
			<label for="sigla">Sigla</label>
			<input type="text" class="form-control" name="sigla_serv">
		</div>

	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
        <label for="valor">Valor</label>
			<input type="text" class="form-control" name="valor_serv">
		</div>

		<div class="form-group col-md-6">
			<label for="tempo">Tempo Estimado Serviço</label>
			<input type="text" class="form-control" name="tempo_est_serv">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_serv" class="btn btn-secondary">Cancelar</a>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>