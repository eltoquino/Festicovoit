<?php
class VehicleAnnouncementController {
    private $vehicleAnnouncementDAO;

    public function __construct($vehicleAnnouncementDAO) {
        $this->vehicleAnnouncementDAO = $vehicleAnnouncementDAO;
    }

    public function createAnnouncement() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $vehicleType = $_POST['type de vehicule'];
            $availableSeats = $_POST['siege disponible'];
            $departureDate = $_POST['date de depart'];
            $returnDate = $_POST['date de retour'];

            // Appeler la méthode pour créer l'annonce de véhicule dans le modèle
            $this->vehicleAnnouncementDAO->createAnnouncement($vehicleType, $availableSeats, $departureDate, $returnDate);

            // Rediriger vers la liste des annonces de véhicules
            header('Location: index.php?action=listAnnouncements');
        } else {
            // Afficher le formulaire de création d'annonce de véhicule
            require_once 'views/create_announcement.php';
        }
    }

    public function listAnnouncements() {
        $announcements = $this->vehicleAnnouncementDAO->getAllAnnouncements();
        require_once 'views/announcements.php';
    }

  
}
?>