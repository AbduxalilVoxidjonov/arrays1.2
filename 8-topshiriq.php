<form action="8-topshiriq.php" method="post">
    <input type="number" name="k" placeholder="k sonini kiriting">
    <input type="submit" value="Yuborish">
</form>
<?php
$n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
$k = $_POST['k'];
$yaqin_son=$n[0];
$n_i=0;


for($i =0; $i < count($n); $i++){
    if(abs($n[$i] - $k) < $yaqin_son){
        $yaqin_son = abs($n[$i] - $k);
        $n_i = $i;
    }
}


echo  "Kiritilgan son bilan eng yaqin bo'lgan son: ".$n[$n_i];

?>