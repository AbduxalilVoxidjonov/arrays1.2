<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');
$suz = 'lue';
$found = false;

foreach ($array as $value) {
    if (strpos($value, $suz) !== false) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "bor";
} else {
    echo "yo'q";
}

?>
