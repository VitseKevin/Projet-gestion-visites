<?php
include ('../model/medecin.php');
include ('../controller/passerelleMedecin.php');

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

    <form method="post">
        <h1>Créer un médecin</h1>
        <input type='text' name='nom' placeholder='Nom' required></input>
        <br>
        <input type='text' name='prenom' placeholder='Prénom' required></input>
        <br>
        <input type='text' name='adresse' placeholder='Adresse' required></input>
        <br>
        <input type='text' name='ville' placeholder='Ville' required></input>
        <br>
        <input type='text' name='cp' placeholder='Code postal' required></input>
        <br>
        <input type='text' name='departement' placeholder='Département' required></input>
        <br>
        <input type='text' name='tel' placeholder='Téléphone' required></input>
        <br>
        <input type='text' name='specialite' placeholder='Spécialité complémentaire' required></input>
        <br>
        <input type="submit" value="Créer"></input>
        <input type='button' onclick="window.location.href='gestion_medecin.php';" value='Retour'></input>
    </form>

</body>
</html>
