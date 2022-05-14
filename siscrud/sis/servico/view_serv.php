<?php
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
	<h3 class="page-header">Visualizar registro do Serviço - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_serv'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_serv'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Sigla</strong></p>
			<p><?php echo $row['sigla_serv'] ;?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Valor</strong></p>
			<p><?php echo $row['valor_serv'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p><strong>Tempo Estimado</strong></p>
			<p><?php echo $row['temp_est_serv'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_cli" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_serv&id_serv=".$row['id_serv']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_serv&id_serv=".$row['id_serv']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>