<?php
class UserController {
    private $userDAO;

    public function __construct($userDAO) {
        $this->userDAO = $userDAO;
    }

    public function createUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $login = $_POST['login'];
            $password = $_POST['password'];

            // Appeler la méthode pour créer l'utilisateur dans le modèle
            $this->userDAO->createUser($login, $password);

            // Rediriger vers la liste des utilisateurs
            header('Location: index.php?action=listUsers');
        } else {
            // Afficher le formulaire de création de l'utilisateur
            require_once 'views/create_user.php';
        }
    }

    public function listUsers() {
        $users = $this->userDAO->getAllUsers();
        require_once 'views/users.php';
    }
}
?>