<?php

$givenDatum = "16-05-2016";
    $Today = date("d-m-Y");
    $Result = ((strtotime($Today)) - strtotime($givenDatum));
    $Result = round($Result / (60*60*24)); 
    echo "La différence entre les 2 dates est de $Result jours<br><br>";


?>