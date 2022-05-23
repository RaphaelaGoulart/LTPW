<?php
    $id_serv = $_GET["id_serv"];
    $sql = mysqli_query($con, "select * from servicos where id_serv='" . $id_serv . "';");
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
	<br><h3 class="page-header">Editar registro do Serviço - <?php echo $matricula;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_serv&id_serv=<?php echo $row['id_serv']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_serv">ID</label>
			<input type="text" class="form-control" name="id_serv" value="<?php echo $row["id_serv"]; ?>" readonly>
		</div>
		<div class="form-group col-md-6">
			<label for="nome">Nome Serviço</label>
			<input type="text" class="form-control" name="nome_serv" value="<?php echo $row["nome_serv"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="sigla">Sigla</label>
			<input type="text" class="form-control" name="sigla_serv" value="<?php echo $row["sigla_serv"]; ?>">
		</div>

	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
        <label for="valor">Valor</label>
			<input type="text" class="form-control" name="valor_serv" value="<?php echo $row["valor_serv"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="tempo">Tempo Estimado Serviço</label>
			<input type="text" class="form-control" name="tempo_est_serv" value="<?php echo $row["tempo_est_serv"]; ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_serv" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>