<?php
require_once ("../inc/init.inc.php");


// Vérification du formulaire
if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    // Requête préparée pour récupérer le visiteur par son login
    $query = $pdo->prepare("SELECT * FROM visiteur WHERE login = :login");
    $query->bindParam('d:login', $login, PDO::PARAM_STR);
    $query->execute();

    $visiteur = $query->fetch(PDO::FETCH_ASSOC);

    if ($visiteur) {

        if ($mdp == $visiteur['mdp']) {
            // Login et mot de passe valides
            echo "Authentification réussie !";
            $_SESSION["login"] = $login;
            
            // Rediriger après l'insertion des données
            header("Location: ../Vue/acceuil.php");
            exit();
        
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Utilisateur non trouvé.";
    }
} else {
    // Champs du formulaire non remplis
    echo "Veuillez remplir tous les champs du formulaire.";
}
?>
