<?php

function phrase ($nom, $prenom, $age) {
    return "Bonjour \n" .  $nom . " " . $prenom . " " . ", tu as \n" . $age . " " . "ans";
    
}

echo phrase("Bonbeur", "Jean", 45);


?>
