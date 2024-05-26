<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
    <h1>Se connecter</h1>

    <form action="../controller/passerelleConnexion.php" method="POST">
        <div>
            <input type="text" name="login" id="login" placeholder="Identifiant"/>
        </div>

        <div>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"/>
        </div>

        <div>
            <input type="submit" value="Se connecter" />
        </div>
    </form>
        <br>
    <div>
        <a href="inscription.php">Vous n'avez pas de compte ? Inscrivez-vous maintenant !</a>
    </div>
</body>

</html>

