<?php
require_once("../inc/init.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: none;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Créer un rapport de visite</title>
</head>
<body>


    <form action="../controller/passerelleRapport.php" method="post">
        <h1>Créer un rapport de visite</h1>

        <label for="choix">Choisissez un Medecin :</label>
        <select id="medecin" name="medecin">
            <?php
                // Récupération des médecins depuis la base de données
                $resultat = $pdo->query("SELECT id, nom, prenom FROM medecin");

                // Affichage des options dans la liste déroulante
                while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $donnees['id'] . "'>" . $donnees['nom'] . " " . $donnees['prenom'] . "</option>";
                }
            ?>
        </select>
        <br>
        <label>Date de la visite:</label>
        <input type='date' name='date' required></input>
        <br>

        <input type='text' name='motif' placeholder='Motif' required></input>
        <br>

        <textarea name='bilan' placeholder='Bilan' rows='4' style='resize: none;' required></textarea>
        <br>

        <label for="choix">Choisissez un Medicament :</label>
        <select id="medicament" name="medicament">
            <?php
                // Récupération des médicaments depuis la base de données
                $resultat = $pdo->query("SELECT id, nomCommercial FROM medicament");

                // Affichage des options dans la liste déroulante
                while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $donnees['id'] . "'>" . $donnees['nomCommercial']. "</option>";
                }
            ?>
        </select>
        <br>

        <input type='text' name='quantite' placeholder='quantite' required></input>
        <br>

        <input type="submit" value="Créer" ></input>
    </form>
</body>
</html>
