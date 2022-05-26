<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div> <?php include "mensagens.php"; ?> </div>
<div id="main" class="container-fluid">
	<h3 class="page-header">Cadastrar Usuário</h3>
	<form action="?page=insere_usu" method="post">
		
		<div id="linha01" class="row"> 
			<div class="form-group col-md-1">
				<label for="id">ID</label>
				<input type="text" disabled="disabled" value="0" class="form-control" name="id">
			</div>
			
			<div class="form-group col-md-5">
				<label for="nome">Nome do Usuário</label>
				<input type="text" class="form-control" name="nome">
			</div>
			
			<div class="form-group col-md-3">
				<label for="usuario">Usuário</label>
				<input type="text" class="form-control" name="usuario">
			</div>
			
			<div class="form-group col-md-3">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" name="senha">
			</div>
			
		</div>
	
		<div id="linha02" class="row"> 
		
			<div class="form-group col-md-4">
				<label for="email">E-mail</label>
				<input type="email" class="form-control" name="email">
			</div>

			<div class="form-group col-md-2">
				<label for="nivel">Nível</label>
				<select class="form-control" name="nivel" id="nivel">
					<option value="1" >Relatórios</option>
					<option value="2">Cadastros</option>
					<option value="3">Administrador</option>		
				</select>
			</div>
			
			<div class="form-group col-md-3">
				<label for="dt_cad">Data do cadastro</label>
				<input type="text" disabled="disabled" class="form-control" value="<?php echo date('d/m/Y'); ?>" name="dt_cad">
			</div>

			<div class="form-group col-md-2">
				<label for="ativo">Ativo</label><br>
				<label class="radio-inline">
					<input type="radio" name="optativo" checked disabled >Sim
				</label>
				<label class="radio-inline">
					<input type="radio" name="optativo" disabled>Não
				</label>
			</div>

		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_usu" class="btn btn-default">Cancelar</a>
			</div>
		</div>

	</form> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>