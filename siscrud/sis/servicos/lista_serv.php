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
			<!-- Chama o Formulário para adicionar servicos -->
			<a href="?page=fadd_serv" class="btn btn-primary pull-right h2">Novo Serviço</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>



<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					//$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					//$inicio = ($quantidade * $pagina) - $quantidade;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

                    $data = mysqli_query($con, "select * from servicos order by id_serv asc limit $inicio, $quantidade;") or die(mysqli_error($con));
                
                    echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
                    echo "<thead><tr>";
                    echo "<td><strong> ID </strong></td>";
                    echo "<td><strong> Nome </strong></td>";
                    echo "<td><strong> Sigla </strong></td>";
                    echo "<td><strong> Valor </strong></td>";
                    echo "<td><strong> Tempo Estimado Serviço";
                    echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>";
                    echo "</tr></thead><tbody>";
    
                    while($info = mysqli_fetch_array($data)){
                        echo "<tr>";
                        echo "<td>" . $info["id_serv"]."</td>";
                        echo "<td>" . $info["nome_serv"]."</td>";
                        echo "<td>" . $info["sigla_serv"]."</td>";
                        echo "<td>" . $info["valor_serv"]."</td>";
                        echo "<td>" .$info["tempo_est_serv"]."</td>";			
                        echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
                        echo "<a class='btn btn-success btn-xs' href=?page=view_serv&id_serv=".$info['id_serv']."> Visualizar </a>";
                        echo "<a class='btn btn-warning btn-xs' href=?page=fedita_serv&id_serv=".$info['id_serv']."> Editar </a>"; 
                        echo "<a href=?page=excluir_serv&id_serv=".$info['id_serv']." class='btn btn-danger btn-xs'> Excluir </a></td>"; 
                    }
                    echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_serv from servicos;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_serv&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_serv&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_serv&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_serv&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_serv&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_serv&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>