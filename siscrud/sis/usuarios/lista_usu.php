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
			<h2>Usuários</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fadd_usu" class="btn btn-primary pull-right h2">Novo Usuário</a> 
		</div>
	</div>
	<div>	<?php include "mensagens.php"; ?>	</div>
	<!--top - Lista dos Campos-->
	<hr/>
	<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					//$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					//$inicio = ($quantidade * $pagina) - $quantidade;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

					$data_all = mysqli_query($con, "select * from usuario order by id_usu asc limit $inicio, $quantidade;") or die(mysqli_error());

					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>ID</strong></td>"; 
					echo "<td><strong>Nome do usuário</strong></td>"; 
					echo "<td><strong>Usuário</strong></td>";
					echo "<td><strong>Senha</strong></td>";
					echo "<td><strong>E-mail</strong></td>";
					echo "<td><strong>Nível</strong></td>";
					echo "<td><strong>Ativo</strong></td>";
					echo "<td><strong>Data cad/ed</strong></td>";
					echo "<td class='actions'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";

					while($info = mysqli_fetch_array($data_all)){ 
						echo "<tr>";
						echo "<td>".$info['id']."</td>";
						echo "<td>".$info['nome']."</td>";
						echo "<td>".$info['usuario']."</td>";
						echo "<td>".$info['senha']."</td>";
						echo "<td>".$info['email']." </td>";
						echo "<td>".$info['nivel']."</td>";
						if($info['ativo'] == 1){
							echo "<td>SIM</td>";
						}else if($info['ativo'] == 0){
							echo "<td>NÃO</td>";
						}
						echo "<td>".date('d/m/Y',strtotime($info['dt_cadastro']))."</td>";
						echo "<td><div class='btn-group btn-group-xs'>";
						echo "<a class='btn btn-info btn-xs' href=?page=view_usu&id=".$info['id']."> Detalhar </a>";
						echo "<a class='btn btn-warning btn-xs' href=?page=fedita_usu&id=".$info['id']."> Editar </a>";
						if($info['ativo'] == 1){
							echo "<a class='btn btn-danger btn-xs'  href=?page=block_usu&id=".$info['id']."> Bloquear </a>";
						}else if($info['ativo'] == 0){
							echo "<a class='btn btn-success btn-xs'  href=?page=ativa_usu&id=".$info['id'].">&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a></div></td>";
						}
					}
					echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_usu from usuario;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_usu&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_usu&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
	</div>
</div><!--main-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>