<?php
$n = array( 31, 1012, 9, 1012, 22, 5, 7, 9, 31,12);

$nums=0;

for($i =0; $i < count($n); $i++){
for($j = $i+1; $j < count($n); $j++){
    if($n[$i] == $n[$j]){
      $nums =$n[$i];	
      break 2;
    }
}

}
echo $nums;

?>