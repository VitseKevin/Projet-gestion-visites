<?php
require_once ("../inc/init.inc.php");

if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $query = $pdo->prepare("SELECT * FROM user WHERE login = :login");
    $query->bindParam(':login', $login, PDO::PARAM_STR);
    $query->execute();


    $visiteur = $query->fetch(PDO::FETCH_ASSOC);

    if ($visiteur) {

        if ($mdp == $visiteur['mdp']) {
            echo "Authentification réussie !";
            $_SESSION["login"] = $login;
            $_SESSION["id"] = $visiteur["id"];
            header("Location: ../Vue/accueil.php");
            exit();
        
        } else {
            
            echo "Mot de passe incorrect.";
        }
    } else {
       
        echo "Utilisateur introuvable.";
    }
} else {
   
    echo "Veuillez remplir tous les champs du formulaire.";
}
?>
