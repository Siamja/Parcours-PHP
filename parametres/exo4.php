<?php
if (isset($_GET['langage']) AND isset($_GET['serveur']))  {
    echo $_GET['langage'] . " " . $_GET['serveur'];
}
else {
    echo "ERREUR BANANE";
}

?>