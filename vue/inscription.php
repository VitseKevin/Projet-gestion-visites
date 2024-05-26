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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; 
        }

        h1 {
            text-align: center;
            margin-bottom: 20px; 
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
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
    <h1>S'inscrire</h1>

    <form action="../controller/passerelleInscription.php" method="post">
        <input type="text" id="nom" name="nom" placeholder="Nom">
        <input type="text" id="prenom" name="prenom" placeholder="Prénom">
        <input type="text" id="login" name="login" placeholder="Login">
        <input type="text" id="mdp" name="mdp" placeholder="Mot de passe">
        <input type="text" id="adresse" name="adresse" placeholder="Adresse">
        <input type="number" id="cp" name="cp" placeholder="Code postal">
        <input type="text" id="ville" name="ville" placeholder="Ville">
        <input type="date" id="date_embauche" name="date_embauche" value="2023-11-17" min="2000-01-01" max="2023-12-31">
        <select id="privilege" name="privilege">
            <option value="Visiteur">Visiteur</option>
            <option value="Service Ventes">Service Ventes</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
