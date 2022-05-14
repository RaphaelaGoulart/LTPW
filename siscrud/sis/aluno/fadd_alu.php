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
			<h2>Alunos</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fadd_alu" class="btn btn-primary pull-right h2">Novo Aluno</a> 
		</div>
	</div>
	<form action="?page=insere_alu" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="matricula">Matrícula</label>
				<input type="text" class="form-control" name="matricula" readonly>
			</div>
			<div class="form-group col-md-5">
				<label for="nome_aluno">Nome Completo</label>
				<input type="text" class="form-control" name="nome_aluno">
			</div>
			<div class="form-group col-md-3">
				<label for="dt_nasc">Data Nascimento</label>
				<input type="date" class="form-control" name="dt_nasc">
			</div>
			<div class="form-group col-md-2">
				<label for="sexo_aluno">Sexo</label>
				<select class="form-control" name="sexo_aluno">
					<option> --------- </option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-6">
				<label for="nome_pai">Nome do Pai</label>
				<input type="text" class="form-control" name="nome_pai">
			</div>

			<div class="form-group col-md-6">
				<label for="nome_mae">Nome da Mãe</label>
				<input type="text" class="form-control" name="nome_mae">
			</div>
		</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-4">
				<label for="rg_aluno">RG</label>
				<input type="text" class="form-control" name="rg_aluno">
			</div>
		 
			<div class="form-group col-md-4">
				<label for="cpf_aluno">CPF</label>
				<input type="text" class="form-control" name="cpf_aluno">
			</div>

		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_alu" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>