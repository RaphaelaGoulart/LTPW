<?php
    $id = (int) $_GET["id_serv"];
    $sql = mysqli_query($con, "select * from servicos where id_serv='". $id . "';");
    $row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Serviço - <?php echo $id; ?> </h3>
	<div class="row">
        <div class="col-md-2">
            <p><strong>ID</strong></p>
            <p><?php echo $row["id_serv"]; ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Nome Serviço</strong></p>
            <p><?php echo $row["nome_serv"]; ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Sigla Serviço</strong></p>
            <p><?php echo $row["sigla_serv"]; ?></p>
        </div>
        <div class="col-md-2">
            <p><strong>Valor Serviço</strong></p>
            <p><?php echo $row["valor_serv"]; ?></p>
        </div>
        <div class="col-md-3">
            <p><strong>Tempo Estimado Serviço</strong></p>
            <p><?php echo $row["tempo_est_serv"]; ?></p>
        </div>
	</div>
    <hr>
    <div id="actions" class="row">
    <div class="col-md-12">
			<a href="?page=lista_serv" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_serv&id_serv=".$row['id_serv']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_serv&id_serv=".$row['id_serv']." class='btn btn-danger'>Excluir</a>";?>
		</div>
    </div>
</div>