<?php

function sex($age3, $genre2) {
    if ($genre2 == "Homme" and $age3 >= (integer)18) {
        return("Vous êtes un homme et vous êtes majeur");
    }elseif ($genre2 == "Homme" and $age3 < (integer)18) {
        return("Vous êtes un homme et vous êtes mineur");
    }
    elseif ($genre2 == "Femme" and $age3 >= (integer)18) {
        return("Vous êtes une femme et vous êtes majeure");
    }elseif ($genre2 == "Femme" and $age3 < (integer)18) {
        return("Vous êtes une femme et vous êtes mineure");
    };
}
    print sex(18, "Femme");
?>


