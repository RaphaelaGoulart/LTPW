<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Pesquisa</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <table width= "60%">

        <tr>
            <td>
                NOME: <br> <input type="text" name="nome"> 
            </td>
            <td>
                NOME DO PAI: <br> <input type="text" name="nomep">
            </td>
            <td>
                NOME DA MÃE: <br> <input type="text" name="nomem">
            </td>
        </tr>
        
        <tr>
            <td>
                CPF: <br> <input type="text" name="cpf">
            </td>
            <td>
                DATA DE NASCIMENTO: <br> <input type="date" name="data">
            </td>
            <td>
                SEXO: <br>
                <input type="radio" name="sexo" value="f">Feminino
                <input type="radio" name="sexo" value="m">Masculino
            </td>
        </tr>
        
        <tr>
            <td>
                NÍVEL DE ESCOLARIDADE: <br>
                <select name="escolaridade" class="form-select">
                    <option value="1">---SELECIONE---</option>
                    <option value="fundamental"> Fundamental</option>
                    <option value="medio"> Médio</option>
                    <option value="superior"> Superior</option>
                    <option value="doutorado"> Doutorado</option>
                </select>
            </td>
        
            <td>
                NACIONALIDADE: <br>
                <select name="nacionalidade" class="form-select">
                    <option value="1">---SELECIONE---</option>
                    <option value="brasileiro"> Brasileiro(a)</option>
                    <option value="americano"> Americano(a)</option>
                    <option value="canadense"> Canadense</option>
                    <option value="espanhol"> Espanhol(a)</option>
                    <option value="argentino"> Argentino(a)</option>
                </select>
            </td>
        </tr>
        <tr>
           <td>INTERESSES:</td> 
        </tr>
        <tr>
            <td>
                <br><input type="checkbox" name="hob[]" value="natacao"> Natação
                <br><input type="checkbox" name="hob[]" value="volei"> Vôlei
                <br><input type="checkbox" name="hob[]" value="futebol"> Futebol
                <br><input type="checkbox" name="hob[]" value="handbol"> Handbol
                <br><input type="checkbox" name="hob[]" value="bale"> Balé
            </td>

            <td>
                <br><input type="checkbox" name="hob[]" value="jazz"> Jazz
                <br><input type="checkbox" name="hob[]" value="poledance"> Pole Dance
                <br><input type="checkbox" name="hob[]" value="ginastica"> Ginástica
                <br><input type="checkbox" name="hob[]" value="futsal"> Futsal
                <br><input type="checkbox" name="hob[]" value="badminton"> Badminton
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>

        </table>
    
</body>
</html>