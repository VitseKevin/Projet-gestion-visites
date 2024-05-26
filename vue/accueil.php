<?php
require_once("../inc/init.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion des Visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.9)), url(zhopital.jpg);
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 32px;
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
            color: #000;
            margin: 0 15px;
            font-size: 20px;
            font-weight: bold;
        }

        a:hover {
            color: #30824f;
        }

        .icon {
            font-size: 24px;
            margin-right: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <h1>Galaxy Swiss Bourdin</h1>
    </header>

    <div id="message">
        <p><b>Bienvenue</b></p>
    </div>

    <div id="liens">
        <a href="gestion rapport.php"><i class="fas fa-file-alt icon"></i> Gérer mes rapports de visites.</a>
        <a href="gestion_medecin.php"><i class="fas fa-user-md icon"></i> Gérer mes médecins.</a>
        <a href='connexion.php'><i class="fas fa-sign-out-alt icon"></i> Déconnexion</a>
    </div>
    <div class="logo-container">
        <img src="logo1.png" alt="Logo">
    </div>
</body>
</html>


