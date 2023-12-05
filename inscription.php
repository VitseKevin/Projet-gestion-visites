<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 10px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>S'inscrire</h1>

    <form action="../controller/passerelle_inscr.php" method="post">
        <fieldset>
            <legend>Informations personnelles</legend>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">

            <label for="login">Login :</label>
            <input type="text" id="login" name="login">
        

            <label for="mdp">Mot de Passe :</label>
            <input type="password" id="mdp" name="mdp">

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse">

            <label for="cp">Code Postal :</label>
            <input type="number" id="cp" name="cp" min="0" max="100000">

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville">
        </fieldset>

        <fieldset>
            <legend>Date d'embauche</legend>

            <label for="date_embauche">Date d'embauche :</label>
            <input type="date" id="date_embauche" name="date_embauche" value="2023-11-17" min="2000-01-01" max="2023-12-31">
        </fieldset>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
