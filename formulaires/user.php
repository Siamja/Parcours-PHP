<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les formulaires - Je suis </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p> Bonjour <?php echo $_GET["prenom"] . " " . $_GET["nom"]; ?></p>
    <p> Bonjour <?php echo $_POST["prenom"] . " " . $_POST["nom"]; ?></p>
</body>
</html>