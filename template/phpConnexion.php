<?php
 
    
        $login = $_GET['login'];
        $mdp = $_GET['mdp'];
        $Vlogin = 'coco';
        $Vmdp = 'coco';

        // Le formulaire a été soumis via la méthode POST


        // Vérifiez si les champs requis ont été renseignés
        if (isset($_GET['login']) && isset($_GET['mdp'])) {
            if ($mdp == $Vmdp && $login == $Vlogin) {
                header("Location: pageClient.html");
            } else {
                echo 'Mot de passe invalide.';
            }
        } else {
            // Certains champs requis n'ont pas été renseignés
            echo "Veuillez remplir tous les champs obligatoires.";
        }
    
    ?>
