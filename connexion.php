<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
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
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            text-align: center;
            color: #333;
            text-decoration: none;
            display: block;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <h1>Se connecter</h1>

    <form action="../controlleur/passerelle_co.php" method="POST">
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" />
        </div>

        <div>
            <label for="mdp">Mot de passe:</label>
            <input type="password" name="mdp" id="mdp" />
        </div>

        <div>
            <input type="submit" value="Se connecter" />
        </div>
    </form>

    <div>
        <a href="inscription.php">Vous n'avez pas de compte ? Inscrivez-vous maintenant !</a>
    </div>
</body>

</html>

