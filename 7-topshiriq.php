<?php
$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);


// juft o'rindagilar
for($i =0; $i < count($n); $i+=2){
    echo $n[$i] . " ";
}
echo "<br>";

// toq o'rindagilar
for($i =1; $i < count($n); $i+=2){
    echo $n[$i] . " ";
}

?>