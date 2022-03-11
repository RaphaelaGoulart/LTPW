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

$escolaridade = $_POST["escolaridade"];
$nacionalidade = $_POST["nacionalidade"];

echo "<table>"."<tr>"."<td>"."NOME:".$nome. "</td>";
echo "<td>"."NOME DO PAI:".$nomep. "</td>";
echo "<td>"."NOME DA MÃE:".$nomem. "</td>". "</tr>";
echo "<tr>". "<td>". "GRAU DE INSTRUÇÃO:".$escolaridade."</td>";
echo "<td>". "NACIONALIDADE:". $nacionalidade. "</td>";
echo "<td>". "SEXO:". $sexo. "</td>". "</tr>";







?>