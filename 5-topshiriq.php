<?php
$n = 5;
$result = [];
for ($i = 0; $i < $n; $i++) {
    $result[] = pow(2, $i);
}
echo implode(", ", $result); 

?>