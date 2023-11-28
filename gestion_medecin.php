<?php
   require_once("./inc/init.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de mes médecins</title>
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

    <h1>Gestion de mes médecins</h1>
    <input type='button' onclick="window.location.href='http://localhost/ENSITECH_PHP/AP%20Gestion%20visites/creation_medecin.php';" value='Ajouter un médecin'></input>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultat = $pdo->query("SELECT id, nom, prenom, ville FROM medecin");

            while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?= $donnees['nom'] ?></td>
                    <td><?= $donnees['prenom'] ?></td>
                    <td><?= $donnees['ville'] ?></td>
                    <td>
                        <a href="?action=modifier&id=<?= $donnees['id'] ?>">Modifier</a> |
                        <a href="?action=supprimer&id=<?= $donnees['id'] ?>">Supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>
