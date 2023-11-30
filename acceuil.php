<?php
require_once("../inc/init.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        #message {
            font-size: 24px;
            margin: 20px 0;
        }

        #liens {
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin: 0 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Page d'Accueil</h1>
    </header>

    <div id="message">
        <p>Bienvenue!</p>
    </div>

    <div id="liens">
        <a href="gestion rapport.php">Gérer mes rapports de visites.</a>
        <a href="gestion_medecin.php">Gérer mes médecins.</a>
        <a href="ajouter_medicament.php">Ajouter un médicament.</a>
    </div>
</body>
</html>
