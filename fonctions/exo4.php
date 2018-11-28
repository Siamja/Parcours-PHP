<?php

function numbers ($nbr1, $nbr2) {

    if ($nbr1 > $nbr2) {
        return "Le premier nombre est plus grand";
    }
    elseif ($nbr1 < $nbr2) {
        return "Le premier nombre est plus petit";
    }
    elseif ($nbr1 == $nbr2) {
        return "Les deux nombres sont identiques";
}
}

echo numbers(15, 26);


?>