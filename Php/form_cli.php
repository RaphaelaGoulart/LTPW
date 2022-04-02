<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
<form action="inserir_cli.php" method="post">
        <table width= "70%">

        <tr>
            <td>
                NOME: <br> <input type="text" name="nome_cli"> 
            </td>
            <td>
                NOME DO PAI: <br> <input type="text" name="nome_pai_cli">
            </td>
            <td>
                NOME DA MÃE: <br> <input type="text" name="nome_mae_cli">
            </td>
        </tr>
        
        <tr>
            <td>
                CPF: <br> <input type="text" name="cpf_cli" >
            </td>
            <td>
                RG: <br> <input type="text" name="rg_cli" >
            </td>
            <td>
                DATA DE NASCIMENTO: <br> <input type="date" name="dt_nasc_cli">
            </td>
        </tr>
        
        <tr>
            <td>
                NÍVEL DE ESCOLARIDADE: <br>
                <select name="escolaridade_cli" class="form-select">
                    <option value="1">---SELECIONE---</option>
                    <option value="fundamental"> Fundamental</option>
                    <option value="medio"> Médio</option>
                    <option value="superior"> Superior</option>
                    <option value="doutorado"> Doutorado</option>
                </select>

                <td>
                SEXO: <br>
                <input type="radio" name="sexo_cli" value="f">Feminino
                <input type="radio" name="sexo_cli" value="m">Masculino
            </td>
            
        </tr>
        
        <tr>
            <td><input type="submit" value="Enviar"></td>
        </tr>
          

        </table>
    
</body>
</html>