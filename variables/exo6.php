<?php

$price = (integer) 785;
$reduc = (integer) (($price /100)*30);
$paid = (integer) $price - $reduc;

echo ("Ce t-shirt qui coutait $price euros a une réduction de 30%, soit $reduc euros, il coûte donc $paid ce mois-ci ");

?>