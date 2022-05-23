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
			<h2>Documentos</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar documentos -->
			<a href="?page=fadd_doc" class="btn btn-primary pull-right h2">Novo Documento</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="bloco-list-pag">	
			<div id="list" class="row">
				<div class="table-responsive col-xs-12">
					<?php
						$quantidade = 5;

						$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
						$inicio = ($quantidade * $pagina) - $quantidade;


						$data = mysqli_query($con, "select * from documento order by id_doc asc limit $inicio, $quantidade;") or die(mysqli_error($con));

						//$data = mysqli_query($con, "select * from documento order by id_doc") or die(mysqli_error($con));

						echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
						echo "<thead><tr>";
						echo "<td><strong>ID</strong></td>"; 
						echo "<td><strong>Título</strong></td>"; 
						echo "<td><strong>Descedencia</strong></td>";
						echo "<td><strong>Local</strong></td>";
						echo "<td><strong>Status</strong></td>";
						echo "<td><strong>Versão</strong></td>";
						echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
						echo "</tr></thead><tbody>";
						while($info = mysqli_fetch_array($data)){ 
							echo "<tr>";
							echo "<td>".$info['id_doc']."</td>";
							echo "<td>".$info['tit_doc']."</td>";
							echo "<td>".$info['desc_doc']." </td>";
							echo "<td><a href='".$info['local_doc']."' target='_blanck'>" .$info['local_doc']. "</a></td>";

							if($info["status_doc"] == 1){
								echo "<td>Ativo</td>";
							}else if($info["status_doc"] == 0){
								echo "<td>Inativo</td>";
							}

							echo "<td>".$info['versao_doc']."</td>";
							echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
							echo "<a class='btn btn-success btn-xs' href=?page=view_doc&id_doc=".$info['id_doc']."> Visualizar </a>";
							echo "<a class='btn btn-warning btn-xs' href=?page=fedita_doc&id_doc=".$info['id_doc']."> Editar </a>"; 
							echo "<a href=?page=excluir_doc&id_doc=".$info['id_doc']." class='btn btn-danger btn-xs'> Excluir </a></td>";
						}
						echo "</tr></tbody></table>";
					?>				
				</div><!-- Div Table -->
			</div><!--list-->
			<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_doc from documento;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error($con));
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_doc&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_doc&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_doc&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_doc&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_doc&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_doc&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>