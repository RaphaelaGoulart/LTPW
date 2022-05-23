<?php
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from usuario where id = '".$id."';");
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
	<br>
		<h3 class="page-header">Visualizar registro da Usuários - <?php echo $id;?></h3>
	
	<!-- 1ª LINHA -->
	
	<div class="row">
		<div class="col-md-1">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id'];?></p>
		</div>

		<div class="col-md-5">
			<p><strong>Nome do usuário</strong></p>
			<p><?php echo $row['nome'];?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Usuário</strong></p>
			<p><?php echo $row['usuario']; ?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Senha</strong></p>
			<p><?php echo $row['senha']; ?></p>
		</div>
	</div>
	
	<!-- 2ª LINHA -->
	
	<div class="row">
		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email'];?></p>
		</div>

		<div class="col-md-2">
			<p><strong>Nível</strong></p>
			<p><?php switch($row['nivel'])
					{
						case 1: echo "RELATÓRIO";break;
						case 2: echo "CADASTRO";break;
						case 3: echo "ADMINISTRADOR";break;
					}
				?>
			</p>
		</div>

		<div class="col-md-3">
			<p><strong>Data do cadastro</strong></p>
			<p><?php echo date('d/m/Y',strtotime($row['dt_cadastro'])); ?></p>
		</div>

		<div class="col-md-2">
			<p><strong>Ativo</strong></p>
			<p><?php
				if($row["ativo"]==1){
					echo "SIM";
				}else if($row["ativo"]==0){
					echo "NÃO";
				}
				?>
			</p>
		</div>
	</div>
	

	<hr/>
	
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_usu" class="btn btn-default">Voltar</a>
			<?php echo "<a href=?page=fedita_usu&id=".$row['id']." class='btn btn-primary'>Editar</a>";?>
			<?php
				if($row["ativo"]==1){
					echo "<a href=?page=block_usu&id=".$row['id']." class='btn btn-danger'>Bloquear</a>";
				}else if($row["ativo"]==0){
					echo "<a href=?page=ativa_usu&id=".$row['id']." class='btn btn-success'>&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a>";
				}
				?>
		</div>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>