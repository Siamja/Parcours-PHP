<?php

$month = mktime(0, 0, 0, 2, 1, 2017);
setlocale(LC_ALL, 'fr_FR.utf8');
echo strftime("Le mois de ".date("F Y",$month)." compte ".date("t",$month)." jours");

?>