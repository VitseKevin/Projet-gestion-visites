<?php
   require_once("../inc/init.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de mes médecins</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        button {
            padding: 8px 12px; 
            border-radius: 4px;
            margin-right: 10px;
            cursor: pointer;

        }

        select {
            width: 200px;
            padding: 8px;
            border-radius: 4px;
            margin-right: 10px;
            cursor: pointer;
        }

        input[type="submit"], input[type="button"] {
            background-color: #4CAF50;
            color: white;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #45a049;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Gestion de mes médecins</h1>
    <form action="gestion_medecin.php?id" method='get'>
        <label for="choix">Choisissez un Médecin :</label>
        <select id="id" name="id">
            <?php
                $resultat = $pdo->query("SELECT id, nom, prenom FROM medecin");

                while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $donnees['id'] . "'>" . $donnees['nom'] . " " . $donnees['prenom'] . "</option>";
                }
            ?>
        </select>
        <button type="submit">
        <i class="fas fa-search"></i> Rechercher 
        </button>
    </form>
    <br>
    <button onclick="window.location.href='creation_medecin.php';">
    <i class="fas fa-plus"></i> Ajouter un médecin 
    </button>
    <br>
    <button onclick="window.location.href='accueil.php';">
    <i class="fas fa-home"></i> Accueil 
    </button>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['id'])){
                $resultat = $pdo->query("SELECT id, nom, prenom, ville FROM medecin WHERE id='{$_GET['id']}'");
            }
            else{
            $resultat = $pdo->query("SELECT id, nom, prenom, ville FROM medecin");
            }
            
            while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {

                ?>
                <tr>
                    <td><?= $donnees['nom'] ?></td>
                    <td><?= $donnees['prenom'] ?></td>
                    <td><?= $donnees['ville'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>
