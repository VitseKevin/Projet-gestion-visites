<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h1>S'inscrire</h1>

    <form action="../controlleur/passerelle_inscr.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">

        <label for="login">Login :</label>
        <input type="text" id="login" name="login">

        <label for="mdp">Mot de Passe :</label>
        <input type="text" id="mdp" name="mdp">

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">

        <label for="cp">Code Postal :</label>
        <input type="number" id="cp" name="cp" min="0" max="100000">

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville">

        <label for="date_embauche">Date d'embauche :</label>
        <input type="date" id="date_embauche" name="date_embauche" value="2023-11-17" min="2000-01-01" max="2023-12-31">

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
