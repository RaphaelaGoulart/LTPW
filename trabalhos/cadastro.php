<?php

$nome = $_POST["nome"];
$nomep = $_POST["nomep"];
$nomem = $_POST["nomem"];


if(isset($_POST["sexo"])){
    if($_POST["sexo"] == "m"){
        $sexo ="Masculino";
   
    }else{
        $sexo = "Feminino";
    }
}else{

    $sexo= "Opção não foi Marcada";
}


$data = $_POST["data"];
$cpf = $_POST["cpf"];
$escolaridade = $_POST["escolaridade"];
$nacionalidade = $_POST["nacionalidade"];


echo "<table>"."<tr>"."<td>"."NOME:".$nome. "</td>";
echo "<td>"."NOME DO PAI:".$nomep. "</td>";
echo "<td>"."NOME DA MÃE:".$nomem."</td>". "</tr>";
echo "<tr>". "<td>". "CPF:". $cpf. "</td>";
echo "<td>". "DATA DE NASCIMENTO:". $data. "</td>". "</tr>"
echo . "GRAU DE INSTRUÇÃO:".$escolaridade.;
echo . "NACIONALIDADE:". $nacionalidade. ;
echo .  $sexo. ;







?>