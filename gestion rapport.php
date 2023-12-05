<?php
require_once("../inc/init.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de mes Rapports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!-- Titre de la page -->
    <h1>Gestion de mes rapports</h1>

    <!-- Bouton pour ajouter un rapport avec redirection vers CreationRapport.php -->
    <input type='button' onclick="window.location.href='CreationRapport.php';" value='Ajouter un rapport'></input>

    <!-- Tableau pour afficher les rapports -->
    <table>
        <thead>
            <tr>
                <th>medecin</th>
                <th>date</th>
                <th>motif</th>
                <th>bilan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Requête SQL pour récupérer les rapports liés à un visiteur spécifique
            $resultat = $pdo->query("SELECT rapport.id, date, motif, bilan, medecin.nom, medecin.prenom FROM rapport LEFT JOIN medecin ON rapport.idMedecin=medecin.id WHERE idVisiteur = '{$_SESSION["id"]}' ");

            // Boucle pour afficher chaque ligne du tableau
            while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <!-- Affichage des données de chaque rapport -->
                    <td><?= $donnees['nom'] ." ". $donnees['prenom'] ?></td>
                    <td><?= $donnees['date'] ?></td>
                    <td><?= $donnees['motif'] ?></td>
                    <td><?= $donnees['bilan'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>

