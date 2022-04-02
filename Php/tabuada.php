<?php
$a = array(1,2,3,4,5,6,7,8,9,10);
for($i=1; $i<=10; $i++){
    
    for ($a=0; $a <=10 ; $a++) { 
        echo "<table>". $a. "x". $i. "=". $a*$i."<br>". "</table>"."<br>";
    }
}


?>