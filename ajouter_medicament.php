<?php
require_once ("../inc/init.inc.php");
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

        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
</head>
<body>

<form action="../vue/passerelleMedic.php" method="POST">
        <h1>Créer un médecin</h1>
        <input type='text' name='nom' placeholder='Nom commercial du medicament' required></input>
        <br>
        <input type='text' name='composition' placeholder='Composition' required></input>
        <br>
        <label for="choix">À quelle famille appartient le médicament ? (Si elle n'est pas dans la liste, veuillez la créer.)
        </label>
        <select id="famille" name="famille">  
        <?php
                $resultat = $pdo->query("SELECT libelle FROM famille");

                while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $donnees['libelle'] . "'>" . $donnees['libelle'] . "</option>";
                }
            ?>
        </select>   <a href="ajouter_medicament1.php">Ajouter une famille.</a>
        <br>
        <br>
        <input type='text' name='effets' placeholder='Effets' required></input>
        <br>
        <input type='text' name='contreindic' placeholder='Contre Indication' required></input>
        <br>
        <input type="submit" value="Créer"></input>
        <input type='button' onclick="window.location.href='acceuil.php';" value='Retour'></input>
    </form>

</body>
</html>