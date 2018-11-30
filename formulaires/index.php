<?php include("exo1.php"); ?> <br><br><br>
<?php include("exo2.php"); ?> <br><br><br>

<?php 

if (!empty($_GET['statut']) AND !empty($_GET['prenom3']) AND !empty($_GET['nom3']))  {
  echo $_GET["statut"] . " " . $_GET["prenom3"] . " " . $_GET["nom3"] . "\n a uploadé le fichier " . $_GET["mon_fichier"];
}
else {
echo '<form action = "index.php" method = "GET">';
echo '<p><SELECT name="statut" size="1">';
echo '<OPTION>M.';
echo '<OPTION>Mlle';
echo '<OPTION>Mme';
echo '</SELECT></p>';
echo '<p><label>Nom : <input type="text" name="nom3" /></label></p>';
echo '<p><label>Prénom : <input type="text" name="prenom3" /></label></p>';
echo '<p><input type="submit" <p>';
echo '<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />';
echo '<input type="file" name="mon_fichier" id="mon_fichier" /><br/>'; // A OUVRIR AVEC FIREFOX, FERME CHROMIUM

}


/* A FAIRE
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédents, vérifier que le fichier transmis est bien un fichier pdf.
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vive le PHP - Les formulaires</title>
</head>
<body>
</body>
</html>

