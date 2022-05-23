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
            <h2>Documento</h2>
        </div>

</div>

<form action="?page=insere_doc" method="post" enctype="multipart/form-data">
    <div class="row">        
        <div class="col-md-2">
            <label for="id_doc">ID</label><br>
            <input type="text" name="id_doc" readonly>
        </div>

        <div class="col-md-2">
            <label for="tit_doc">Título</label><br>
            <input type="text" name="tit_doc" >
        </div>

        <div class="col-md-2">
            <label for="desc_doc">Descedencia</label><br>
            <input type="text" name="desc_doc" >
        </div>
    </div>    
    <div class="row"> 
        <div class="col-md-3">
            <label for="local_doc">Local</label>
            <input type="file" name="local_doc" >
        </div>
        <div class="col-md-2">
            <label for="status_doc">Status:</label><br>
 
            <input type="radio" name="status_doc" value="0"> Inativo 
            <input type="radio" name="status_doc" value="1"> Ativo
        </div>
        <div class="col-md-6">
            <label for="versao_doc">Versão</label>
            <input type="text" name="versao_doc">


        </div>
    </div>
    <hr>
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="?page=lista_doc" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>