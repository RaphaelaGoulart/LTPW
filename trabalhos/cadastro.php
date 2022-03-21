<?php

$nome = $_POST["nome"];
$nomep = $_POST["nomep"];
$nomem = $_POST["nomem"];
$data = $_POST["data"];
$cpf = $_POST["cpf"];



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


echo "<table>"."<tr>"."<td>"."NOME:"."<br>".$nome. "</td>";
echo "<td>"."NOME DO PAI:"."<br>".$nomep. "</td>";
echo "<td>"."NOME DA MÃE:"."<br>".$nomem."</td>". "</tr>";
echo "<tr>". "<td>". "CPF:"."<br>". $cpf. "</td>";
echo "<td>". "DATA DE NASCIMENTO:"."<br>". $data. "</td>";
echo "<td>". "SEXO:"."<br>". $sexo. "</td>". "</tr>";
echo "<tr>"."<td>"."GRAU DE INSTRUÇÃO:"."<br>".$escolaridade ."</td>";
echo "<td>"."NACIONALIDADE:"."<br>". $nacionalidade ."</td>". "</tr>";
echo "<tr>". "<td>". "INTERESSES:". "<br>". "</td>"."</tr>";
foreach($_POST["hob"]as $value){
    echo "<tr>". "<td>"."*". $value. "<br>". "</td>". "</tr>". "</table>";
}









?>