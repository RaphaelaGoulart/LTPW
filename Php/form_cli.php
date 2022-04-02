<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulário Bootstrap</title>
  </head>
  <body>
  <div>
    <form action="inserir_cli.php" method="post">
<!-- LINHA 1 -->
  
        <div class="container">
            <h1 >Cadastro!</h1>
            <div class="row">
            <div class="col -6" >
                Nome: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "nome_cli">

            </div>
            <div class="col-3">
                Data de Nasc: <input type="date" name = "dt_nasc_cli">
            </div>
            <div class="col-3">
                Sexo: <br>
                    <input class="form-check-input" type="radio" id="flexRadioDefault1"name = "sexo_cli" value="f"> Feminino
                    <label class="form-check-label" for="flexRadioDefault1"> 
                    <input class="form-check-input" type="radio" id="flexRadioDefault1"name = "sexo_cli" value="m">Masculino
                    <label class="form-check-label" for="flexRadioDefault1">
            </div>

            </div>

            <br>

            <!-- LINHA2 -->

            <div class="row">
            <div class="col-6">
                Pai: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "nome_pai_cli">
            </div>
            <div class="col-6">
                Mãe: <br> 
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "nome_mae_cli">

            </div>
            

            </div>

            <br>

            <!-- LINHA 3  -->

            <div class="row">
            <div class="col">
                RG: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "rg_cli">

            </div>
            <div class="col">
                CPF :<br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name = "cpf_cli">

            </div>
            <div class="col">
                Escolaridade: <br>
                <select class="form-select" name="escolaridade_cli" id=""> 
                    <option value="1">---selecione---</option>
                    <option value="2">Ensino fundamental</option>
                    <option value="3">Ensino medio</option>
                    <option value="4">Superior</option>
                    <option value="5">Mestrado</option>
                </select>
            </div>
            </div>

            <!-- LINHA 4 -->

                <div class="row">
                
                <div class="col-12">
                    

                </div>
                
                </div>
            </div>
            <div>
            </div>

            <div class="row">
                
                <div class="col-12">
                    <br>
                <button type="submit" class="btn btn-info">enviar</button>
                
            </div>
            
            </div>
            </div>



            </div>
            </form>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>
</html>
