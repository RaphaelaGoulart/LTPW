<?php
    $id = (int) $_GET["id_doc"];
    $sql = mysqli_query($con,"select * from documento where id_doc='" . $id . "';");
    $row = mysqli_fetch_array($sql);
?>

   


<div id="main" class="container-fluid">
    
    <br>

    <h3 class="page-header"> Visualizar registro do Documento - <?php echo $id ?></h3>

    <div class="row">
        <div class="form-group col-md-1">
            <p><strong>ID</strong></p>
            <p> <?php echo $row["id_doc"];?> </p>
        </div>

        <div class="form-group col-md-1">
            <p><strong>Título</strong></p>
            <p> <?php echo $row["tit_doc"]; ?> </p>
        </div>

        <div class="form-group col-md-2">
            <p><strong>Descedencia</strong></p>
            <p> <?php echo $row["desc_doc"]; ?> </p>
        </div>

        <div class="form-group col-md-2">
            <p><strong>Local</strong></p>
            <p> <?php echo $row["local_doc"]; ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-1">
            <p><strong>Status</strong></p>
            <p> 
                <?php 
                    if($row["status_doc"] == 0){
                        echo "Inativo";
                    }elseif($row["status_doc"] == 1){
                        echo "Ativo";}; 
                ?> 
            </p>
        </div>

        <div class="form-group col-md-1">
            <p><strong>Versão</strong></p>
            <p> <?php echo $row["versao_doc"]; ?> </p>
        </div>
    </div>
   <hr>
    <div id="actions" class="row">
        <div class="col-md-12">
			<a href="?page=lista_doc" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedita_doc&id_doc=".$row['id_doc']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_doc&id_doc=".$row['id_doc']." class='btn btn-danger'>Excluir</a>";?>
                
        </div>

        <object height="500px" data="/siscrud/sis/documento/upload/<?php echo $row["tit_doc"];?>.pdf" type="application/pdf">
        <p>Seu navegador não tem plugin para pdf</p></object>
    </div>
</div>