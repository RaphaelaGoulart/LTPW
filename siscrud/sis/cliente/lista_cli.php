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
			<h2>Clientes</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar clientes -->
			<a href="?page=fadd_cli" class="btn btn-primary pull-right h2">Novo Cliente</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens_cli.php"; ?> </div>

<<<<<<< HEAD
	
	</div>

	<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					//$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					//$inicio = ($quantidade * $pagina) - $quantidade;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

					$data = mysqli_query($con, "select * from cliente order by id_cli asc limit $inicio, $quantidade;") or die(mysqli_error("ERRO: ".$con));
					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>ID</strong></td>"; 
					echo "<td><strong>Nome</strong></td>"; 
					echo "<td><strong>CPF</strong></td>";
					echo "<td><strong>Sexo</strong></td>";
					echo "<td><strong>RG</strong></td>";
					echo "<td><strong>Escolaridade</strong></td>";
					echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";
					while($info = mysqli_fetch_array($data)){ 
						echo "<tr>";
						echo "<td>".$info['id_cli']."</td>";
						echo "<td>".$info['nome_cli']."</td>";
						echo "<td>".$info['cpf_cli']." </td>";
						echo "<td>".$info['sexo_cli']."</td>";
						echo "<td>".$info['rg_cli']."</td>";
						echo "<td>".$info['escolaridade']."</td>";

						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
						echo "<a class='btn btn-success btn-xs' href=?page=view_cli&id_cli=".$info['id_cli']."> Visualizar </a>";
						echo "<a class='btn btn-warning btn-xs' href=?page=fedita_cli&id_cli=".$info['id_cli']."> Editar </a>"; 
						echo "<a href=?page=excluir_cli&id_cli=".$info['id_cli']." class='btn btn-danger btn-xs'> Excluir </a></td>";

					}
					echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_cli from cliente;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_cli&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_cli&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_cli&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_cli&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_cli&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_cli&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
=======
	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($con, "select * from cliente order by id_cli;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Nome</strong></td>"; 
				echo "<td><strong>CPF</strong></td>";
				echo "<td><strong>Sexo</strong></td>";
				echo "<td><strong>RG</strong></td>";
                echo "<td><strong>Escolaridade</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_cli']."</td>";
					echo "<td>".$info['nome_cli']."</td>";
					echo "<td>".$info['cpf_cli']." </td>";
					echo "<td>".$info['sexo_cli']."</td>";
                    echo "<td>".$info['rg_cli']."</td>";
                    echo "<td>".$info['escolaridade']."</td>";

                    echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_cli&id_cli=".$info['id_cli']."> Visualizar </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=fedita_cli&id_cli=".$info['id_cli']."> Editar </a>"; 
					echo "<a href=?page=excluir_cli&id_cli=".$info['id_cli']." class='btn btn-danger btn-xs'> Excluir </a></td>";

				}
				echo "</tr></tbody></table>";
			?>				
		</div>
>>>>>>> c72bdb71bd2a6635c56695ff36db0513b18cb3a0
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>