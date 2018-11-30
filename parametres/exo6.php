<?php
if (isset($_GET['batiment']) AND isset($_GET['salle']))  {
    echo $_GET['batiment'] . " " . $_GET['salle'];
}
else {
    echo "ERREUR BANANE";
}

?>