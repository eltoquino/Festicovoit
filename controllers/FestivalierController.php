<?php
class FestivalierController {
    private $festivalgoerDAO;

    public function __construct($festivalgoerDAO) {
        $this->festivalgoerDAO = $festivalgoerDAO;
    }

    public function createFestivalgoer() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $name = $_POST['nom'];
            $firstName = $_POST['prenom'];
            $presenceDate = $_POST['date de presence'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Appeler la méthode pour créer le festivalier dans le modèle
            $this->festivalgoerDAO->createFestivalgoer($name, $firstName, $presenceDate, $login, $password);

            // Rediriger vers la liste des festivaliers
            header('Location: index.php?action=listFestivalgoers');
        } else {
            // Afficher le formulaire de création du festivalier
            require_once 'views/create_festivalgoer.php';
        }
    }

    public function listFestivalgoers() {
        $festivalgoers = $this->festivalgoerDAO->getAllFestivalgoers();
        require_once 'views/festivalgoers.php';
    }

  
}
?>