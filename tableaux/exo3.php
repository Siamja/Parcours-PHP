<?php

$departements = array(
01 => "Ain",
03 => "Allier",
07 => "Ardèche",
15 => "Cantal",
26 => "Drôme",
38 => "Isère",
42 => "Loire",
43 => "Haute-Loire",
63 => "Puy-de-Dôme",
69 => "Rhône",
73 => "Savoie",
74 => "Haute-Savoie",


);

echo "$departements[69] <br>";
$departements [57] = "Metz";

foreach ($departements as $key => $value) {
    echo "Le département \n" . "{$value}" . "\n a le numéro" . " " . "{$key} <br>";

}


?>


